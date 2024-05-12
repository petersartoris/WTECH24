<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\CartItem;

class ProductController extends Controller
{
    /**
     * Display a listing of the resources depending on attributes.
     */
    public function index(Request $request)
    {
        $context = is_array($request->input('categories')) ? 'array' : 'string'; // Determine if the categories are passed as an array or a string

        $request->validate([
            'sort' => 'nullable|string|in:newest,availability,low-to-high,high-to-low',
            'categories' => Category::rules($context),
        ]);

        $sort = $request->input('sort');
        $categorySlugs = is_array($request->input('categories')) ? $request->input('categories') : explode(',', $request->input('categories')); // convert the string of category slugs to an array

        // get the first category in the list of category slugs
        $category = Category::where('slug', $categorySlugs[0] ?? null)->first();

        // get products based on the selected category or all products if no category is selected
        $query = $category ? $category->products()->with(['categories', 'images']) : Product::query()->with(['categories', 'images']);

        switch ($sort) {
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'availability':
                $query->orderByRaw("CASE WHEN availability = 'available' THEN 1 ELSE 2 END");
                break;
            case 'low-to-high':
                $query->orderBy('price', 'asc');
                break;
            case 'high-to-low':
                $query->orderBy('price', 'desc');
                // Add more cases as needed for other sort options
        }

        // paginate the query results
        $products = $query->paginate(5)->appends(['categories' => $categorySlugs]);

        return view(
            'product-page',
            [
                'products' => $products,
                'current_category' => $category, // the current category that will be displayed to the left
                'subcategories' => $category ? $category->children : collect() // Get the subcategories of the selected category
            ]
        );
    }

    /**
     * Search for products.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])
            ->orWhereRaw('LOWER(description) LIKE ?', ["%{$query}%"])
            ->paginate(5);

        return view('product-page', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            //return view('error');
            return view('product-detail', ['product' => $product]);
        } else {
            // Handle the case where the product was not found
            return view('error');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addToCart(Request $request, Product $product)
    {
        // Get the quantity from the request, or default to 1 if no quantity is provided
        $quantity = $request->input('quantity', 1);

        if ($request->user()) {
            // If user is logged in, add to their cart in the database
            $pivot = $request->user()->products()->where('product_id', $product->id)->first();
            if ($pivot) {
                $pivot->pivot->quantity += $quantity;
                $pivot->pivot->save();
            } else {
                $request->user()->products()->attach($product->id, ['quantity' => $quantity]);
            }
        } else {
            // If user is not logged in, add to their cart in the session
            $cart = $request->session()->get('cart', []);
            if (isset($cart[$product->id])) {
                $cart[$product->id]->quantity += $quantity;
            } else {
                $cart[$product->id] = new CartItem($product->id, $quantity);
            }
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
