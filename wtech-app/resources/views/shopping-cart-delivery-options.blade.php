<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-cart-delivery-options.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <x-cart-links></x-cart-links>

        <section id="delivery-page">
            <div class="container container-custom">
                <div class="row">
                    <div class="col-md-7 col-sm-12 mt-3">
                        <div class="row mb-4">
                            <div class="container container-custom border-custom border-radius-custom my-3">
                                <h2 class="text-center m-2 white-text">Select delivery method</h2>
                            </div>
                            <x-cart-method method="Method 1" price="1"></x-cart-method>
                            <x-cart-method method="Method 2" price="1"></x-cart-method>
                            <x-cart-method method="Method 3" price="1"></x-cart-method>
                        </div>

                        <div class="row mb-4">
                            <div class="container container-custom border-custom border-radius-custom my-3">
                                <h2 class="text-center m-2 white-text">Choose payment method</h2>
                            </div>
                            <x-cart-method method="Method 1" price="1"></x-cart-method>
                            <x-cart-method method="Method 2" price="1"></x-cart-method>  
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 mt-5 mt-md-3 align-content-center">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100" src="{{ asset('images/delivery-address/delivery-page.jpeg') }}"
                                alt="picture of mascot in storage facility">
                        </div>
                    </div>   
                </div>        
            </div>

            <div class="container container-custom border-radius-custom mb-5 mt-2 border-custom">
                <div class="row">
                    <div class="col-sm-7"></div>
                    <div class="col-sm-3 d-flex justify-content-center align-items-center my-3">
                        <div class="flex-column">
                            <h2 class="white-text">Total Price: {{ $total }} €</h2>                        
                        </div>                    
                    </div>
    
                    <div class="col-sm-2 d-flex justify-content-center my-3">
                        <a href="{{ route('cart-delivery') }}">
                            <button class="button-custom button-red">Continue</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout>