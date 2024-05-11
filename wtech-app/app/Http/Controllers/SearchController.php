<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])
                ->orWhereRaw('LOWER(description) LIKE ?', ["%{$query}%"])
                ->take(5)->get();

        return view('search-results', ['products' => $products]);
    }
}
