<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-cart.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <x-cart-links></x-cart-links>

        @php
            $cart = auth()->check() ? auth()->user()->products : session('cart', []);
            foreach ($cart as $key => $item) {
                $product = auth()->check() ? $item : \App\Models\Product::find($item->product_id);
                if (!$product) {
                    unset($cart[$key]);
                }
            }
        @endphp

        @if(count($cart) > 0)
            @foreach ($cart as $item)
                @php
                    
                    $product = auth()->check() ? $item : \App\Models\Product::find($item->product_id);
                    $quantity = auth()->check() ? $item->pivot->quantity : $item->quantity;
                @endphp
                
                <x-cart-item :product="$product" :quantity="$quantity"></x-cart-item>
            @endforeach
        @else
            <p>No products in the cart.</p>
        @endif

        <div class="container container-custom border-radius-custom mb-3 mt-2 border-custom">
            <div class="row">
                <div class="col-sm-7"></div>
                <div class="col-sm-3 d-flex justify-content-center align-items-center my-3">
                    <div class="flex-column">
                        <h2 class="white-text">Total Price: {{ collect($cart)->map(function ($item) {
                            $product = auth()->check() ? $item : \App\Models\Product::find($item->product_id);
                            $quantity = auth()->check() ? $item->pivot->quantity : $item->quantity;
                            return $product->price * $quantity;
                        })->sum() }} €</h2>                        
                    </div>                    
                </div>

                <div class="col-sm-2 d-flex justify-content-center my-3">
                    <button class="button-custom button-red">Continue</button>
                </div>
            </div>
        </div>
    </main>
</x-layout>
