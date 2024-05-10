<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-cart-delivery-options.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom center-all mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart.html" class="btn btn-outline-secondary w-100 my-2">Shopping
                            Cart</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart-delivery-options.html" class="btn btn-primary w-100 my-2">Shipping
                            & Payment</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-delivery-address.html"
                            class="btn btn-outline-secondary w-100 my-2">Delivery Information</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-custom border-custom border-radius-custom">
            <div class="row">
                <div class="col-12 col-md-8 center-all flex-column">
                    <div class="row mb-4">
                        <div class="container container-custom border-custom border-radius-custom my-3">
                            <div class="row">
                                <div class="col">
                                    <h2 class="text-center m-2 white-text">Select delivery method</h2>
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
                        </div>
                        <div class="delivery-method">
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
                        <div class="delivery-method">
                            <div class="row py-3">
                                <div class="col-9 d-flex justify-content-start">
                                    <!-- Align the content to the right -->
                                    <button class="button-custom button-white method-button">
                                        <h4>Method 3</h4>
                                    </button> <!-- Set button width to 80% -->
                                </div>
                                <div class="col-3">
                                    <h4 class="m-2 px-4 white-text">1 €</h4>
                                </div>
                            </div>
                        </div>
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
                    <div class="row align-content-center">
                        <div class="col-sm-4 d-flex justify-content-center align-items-center">
                            <div class="flex-column">
                                <h2 class="white-text">Total Price:</h2>
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center my-3">
                            <div class="d-flex align-items-center">
                                <h2 class="white-text">1000€</h2>
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center my-3">
                            <button class="button-custom button-red">Continue</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-none d-md-block center-all border-left-custom">
                    <!-- Placeholder for the second column -->
                </div>
            </div>
        </div>
    </main>

</x-layout>