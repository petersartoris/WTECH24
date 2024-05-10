<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-cart.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom center-all mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart.html" class="btn btn-primary w-100 my-2">Shopping
                            Cart</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart-delivery-options.html"
                            class="btn btn-outline-secondary w-100 my-2">Shipping
                            & Payment</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-delivery-address.html"
                            class="btn btn-outline-secondary w-100 my-2">Delivery Information</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-custom mb-3 mt-2 card">
            <div class="row">
                

                <div class="col-sm-2 px-0">
                    <img src="/images/main/product-desktop.jpg" class="card-img" alt="Product Image">
                </div>
                <div class="col-sm-3">
                    <div class="card-body">
                        <h2 class="white-text">Product Name</h2>
                        <p class="price-text">1000 €</p>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-outline-light"
                                            data-type="plus" data-field="">
                                            +
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                        value="1" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-outline-light"
                                            data-type="minus" data-field="">
                                            -
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <span class="text-success">✓ Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5"></div>
                <div class="col-sm-2 my-md-0 my-2 py-md-0 py-2  d-flex justify-content-center">
                    <button type="button" class="remove-button" aria-label="Close">&times;</button>
                </div>
            </div>
        </div>

        <div class="container container-custom border-radius-custom mb-3 mt-2 p-3 border-custom">
            <div class="row">
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
    </main>

</x-layout>