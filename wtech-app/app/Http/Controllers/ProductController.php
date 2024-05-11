<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::all();
        $products = Product::paginate(5);
        return view('product-page', ['products' => $products]);
    }

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
}
