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
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-center m-2 white-text">Select delivery method</h2>
                                    </div>
                                </div>
                            </div>
                            <x-cart-delivery-method method="Method 1" price="1"></x-cart-delivery-method>
                            <x-cart-delivery-method method="Method 2" price="1"></x-cart-delivery-method>
                            <x-cart-delivery-method method="Method 3" price="1"></x-cart-delivery-method>
                        </div>

                        <div class="row mb-4">
                            <div class="container container-custom border-custom border-radius-custom my-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-center m-2 white-text">Choose payment method</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-method">
                                <div class="row py-3">
                                    <div class="col-9 d-flex justify-content-start">
                                        <!-- Align the content to the right -->
                                        <button class="button-custom button-white method-button">
                                            <h4>Method 1</h4>
                                        </button> <!-- Set button width to 80% -->
                                    </div>
                                    <div class="col-3">
                                        <h4 class="m-2 px-4 white-text">1 €</h4>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-9 d-flex justify-content-start">
                                        <!-- Align the content to the right -->
                                        <button class="button-custom button-white method-button">
                                            <h4>Method 2</h4>
                                        </button> <!-- Set button width to 80% -->
                                    </div>
                                    <div class="col-3">
                                        <h4 class="m-2 px-4 white-text">1 €</h4>
                                    </div>
                                </div>
                            </div>    
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

            <div class="container container-custom border-radius-custom mb-3 mt-2 border-custom">
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