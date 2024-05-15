<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resources depending on attributes.
     */
    public function index(Request $request)
    {
        $context = is_array($request->input('categories')) ? 'array' : 'string'; // Determine if the categories are passed as an array or a string

        // validate the inputs from the request: price(ASC/DESC), name , availability, categories
        $request->validate([
            'price' => 'nullable|in:ASC,DESC',
            'name' => 'nullable|in:ASC,DESC',
            'availability' => 'nullable|in:AVLF,NAVLF',
            'categories' => Category::rules($context),
            'min_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
        ]);

        $price = $request->input('price');
        $name = $request->input('name');
        $availability = $request->input('availability');
        $categorySlugs = is_array($request->input('categories')) ? $request->input('categories') : explode(',', $request->input('categories')); // convert the string of category slugs to an array
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // get the first category in the list of category slugs
        $category = Category::where('slug', $categorySlugs[0] ?? null)->first();

        // get top-level categories if no category is selected
        $topLevelCategories = $category ? collect() : Category::whereNull('parent_id')->get();

        // get products based on the selected category or all products if no category is selected
        $query = $category ? $category->products()->with(['categories', 'images']) : Product::query()->with(['categories', 'images']);

        // filter the products based on the filter price range
        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }
        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        // sort the products based on the selected options
        if ($availability) {
            $query->where('availability', $availability == 'AVLF' ? 'available' : 'unavailable');
        }
        if ($price) {
            $query->orderBy('price', $price);
        }
        if ($name) {
            $query->orderBy('name', $name);
        }


        // paginate the query results
        // $products = $query->paginate(5)->appends(['categories' => $categorySlugs]);
        $products = $query->paginate(5)->appends($request->all());

        return view(
            'product-page',
            [
                'products' => $products,
                'current_category' => $category, // the current category that will be displayed to the left
                'subcategories' => $category ? $category->children : $topLevelCategories // Get the subcategories of the selected category
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
            ->with(['images'])
            ->paginate(5)->appends(['query' => $query]);

        return view('product-page', ['products' => $products]);
    }


    public function showProducts()
    {
        $products = Product::all();

        return view('admin.admin-page', ['products' => $products]);
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
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('product-name');
        $product->code = substr(str_shuffle('0123456789'), 0, 3) . chr(rand(97, 122)) . substr(str_shuffle('0123456789'), 0, 3);
        $product->description = $request->input('product-description');
        $product->price = $request->input('product-price');
        $product->quantity = $request->input('product-quantity');
        $product->availability = $request->input('availability');
        $product->save();

        return redirect()->route('admin');
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
    public function destroy($id)
    {
        $product = Product::find($id);

        // Delete the associated images
        $product->images()->delete();

        $product->delete();

        return redirect()->route('admin');
    }
}
