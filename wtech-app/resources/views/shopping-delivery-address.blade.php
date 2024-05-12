<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-delivery-address.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <x-cart-links></x-cart-links>

        <section id="delivery-page">
            <div class="container container-custom">
                <div class="row">
                    <div class="col-md-7 col-sm-12 mt-3">
                        <h2 class="text-center border-custom" id="delivery-address">Enter delivery address</h2>
                        <form>
                            <x-cart-form-group id="name" label="First name, Last name" type="text" autocomplete="name"></x-cart-form-group>
                            <x-cart-form-group id="address" label="Street address, Postal code" type="text" autocomplete="street-address"></x-cart-form-group>
                            <x-cart-form-group id="city" label="City, Country" type="text" autocomplete="address-level2"></x-cart-form-group>
                            <x-cart-form-group id="phone" label="Phone number" type="tel" autocomplete="tel"></x-cart-form-group>

                        </form>

                        <div class="d-flex flex-column align-items-center">
                            <h2 class="white-text mt-4">Total: 4000 €</h2>
                            <button id="finish-order" class="button-custom button-red mt-2">Finish Order</button>
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
        </section>

    </main>
</x-layout>