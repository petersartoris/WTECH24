<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-delivery-address.css') }}" rel="stylesheet">
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
                        <a href="/html/shopping-cart-delivery-options.html"
                            class="btn btn-outline-secondary w-100 my-2">Shipping
                            & Payment</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-delivery-address.html" class="btn btn-primary w-100 my-2">Delivery
                            Information</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="delivery-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-3">
                        <h1 class="text-center border-custom" id="delivery-address">Enter delivery address</h1>
                        <form>
                            <div class="form-group">
                                <label for="name">First name, Last name</label>
                                <input type="text" class="form-control" id="name" autocomplete="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Street address, Postal code</label>
                                <input type="text" class="form-control" id="address" autocomplete="street-address">
                            </div>
                            <div class="form-group">
                                <label for="city">City, Country</label>
                                <input type="text" class="form-control" id="city" autocomplete="address-level2">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone number</label>
                                <input type="tel" class="form-control" id="phone" autocomplete="tel">
                            </div>
                        </form>

                        <div class="d-flex flex-column align-items-center">
                            <h2 class="white-text mt-4">Total: 4000 €</h2>
                            <button id="finish-order" class="button-custom button-red mt-2">Finish Order</button>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mt-5 mt-md-3 align-content-center">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100" src="../images/delivery-address/delivery-page.jpeg"
                                alt="picture of mascot in storage facility">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-layout>