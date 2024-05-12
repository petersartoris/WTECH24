<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\CartItem;


class CartController extends Controller
{

    public function index()
    {
        $cart = session('cart', []);
        $total = array_sum(array_map(function ($item) {
            return $item->getProduct()->price * $item->quantity;
        }, $cart));

        session(['total' => $total]);

        return view('shopping-cart', compact('cart', 'total'));
    }

    public function deliveryOptions(Request $request)
    {
        $cart = session('cart', []);
        $total = $request->input('total', 0);
        $deliveryMethod = $request->input('deliverymethod');
        $paymentMethod = $request->input('paymentmethod');

        // Store the data in the session
        session(['total' => $total, 'deliverymethod' => $deliveryMethod, 'paymentmethod' => $paymentMethod]);

        return view('shopping-cart-delivery-options', compact('cart', 'total'));
    }


    public function finalOrder(Request $request)
    {
        $total = session('total');
        $deliveryMethod = session('deliverymethod');
        $paymentMethod = session('paymentmethod');

        // Now you can use these values in your view
        return view('shopping-delivery-address', compact('total', 'deliveryMethod', 'paymentMethod'));
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

    public function updateCart(Request $request, Product $product)
    {
        $quantity = $request->input('quantity', 1);

        if ($request->user()) {
            // If user is logged in, update their cart in the database
            $pivot = $request->user()->products()->where('product_id', $product->id)->first();
            if ($pivot) {
                $pivot->pivot->quantity = $quantity;
                $pivot->pivot->save();
            }
        } else {
            // If user is not logged in, update their cart in the session
            $cart = $request->session()->get('cart', []);
            if (isset($cart[$product->id])) {
                $cart[$product->id]->quantity = $quantity;
            }
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product quantity updated successfully!');
    }

    public function removeFromCart(Request $request, Product $product)
    {
        if ($request->user()) {
            // If user is logged in, remove from their cart in the database
            $pivot = $request->user()->products()->where('product_id', $product->id)->first();
            if ($pivot) {
                $pivot->pivot->delete();
            }
        } else {
            // If user is not logged in, remove from their cart in the session
            $cart = $request->session()->get('cart', []);
            if (isset($cart[$product->id])) {
                unset($cart[$product->id]);
            }
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }

}