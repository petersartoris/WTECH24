<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validate the request data
        // $validatedData = $request->validate(Order::rules());
        // validate the inputs from the request: name, email, phone, address, city
        $data = $request->all();
        $data['deliveryMethod'] = (string) $data['deliveryMethod'];
        $data['paymentMethod'] = (string) $data['paymentMethod'];

        try {
            $validator = validator($data, [
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'total' => 'required|numeric',
                'deliveryMethod' => 'required|in:standard,express,next day',
                'paymentMethod' => 'required|in:credit card,paypal,cash on delivery',
            ]);

            $validatedData = $validator->validate(); // This will return the validated data as an array

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors(), $e->validator->getData());
            return redirect()->route('cart')->with('error', 'Please fill in all the required fields');
        }


        $cityCountry = explode(',', $validatedData['city']);
        $city = trim($cityCountry[0]);
        $country = isset($cityCountry[1]) ? trim($cityCountry[1]) : '';

        $addressPostalCode = explode(',', $validatedData['address']);
        $address = trim($addressPostalCode[0]);
        $postalCode = isset($addressPostalCode[1]) ? trim($addressPostalCode[1]) : '';

        $name = explode(' ', $validatedData['name']);
        $firstName = $name[0];
        $lastName = isset($name[1]) ? $name[1] : '';

        $order = new Order();
        $order->first_name = $firstName;
        $order->last_name = $lastName;
        $order->phone_number = $validatedData['phone'];
        $order->address = $address;
        $order->zip_code = $postalCode;
        $order->city = $city;
        $order->country = $country;
        $order->total_price = $validatedData['total'];

        // Get the delivery method and payment method from the DB
        $deliveryMethodName = $validatedData['deliveryMethod'];
        $deliveryMethod = \App\Models\DeliveryType::where('name', $deliveryMethodName)->firstOrFail();
        $order->delivery_type_id = $deliveryMethod->id;

        $paymentMethodName = $validatedData['paymentMethod'];
        $paymentMethod = \App\Models\PaymentType::where('name', $paymentMethodName)->firstOrFail();
        $order->payment_type_id = $paymentMethod->id;

        $order->status = 'pending';
        $order->save();

        $cart = session('cart', []);

        foreach ($cart as $item) {
            $order->products()->attach($item->getProduct()->id, ['quantity' => $item->quantity]);
        }

        // If the user is logged in, set the user_id
        if (Auth::check()) {
            $order->user_id = Auth::id();
        }

        // Save the order
        $order->save();

        // Get the cart from the session
        $cart = session('cart', []);

        // Attach the products to the order
        foreach ($cart as $item) {
            // check if the order-product relation already exists
            $existingProduct = $order->products()->where('product_id', $item->getProduct()->id)->first();
            if ($existingProduct) {
                // if it exists, update the quantity
                $existingProduct->pivot->quantity += $item->quantity;
                $existingProduct->pivot->save();
            } else {
                // if it doesn't exist, create a new relation
                $order->products()->attach($item->getProduct()->id, ['quantity' => $item->quantity]);
            }
        }

        // Clear the cart
        session(['cart' => []]);

        // Redirect to a success page
        return redirect()->route('order-success');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
