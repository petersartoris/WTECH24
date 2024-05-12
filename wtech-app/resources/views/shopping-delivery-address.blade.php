<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/shopping-delivery-address.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <x-cart-links></x-cart-links>

        <section id="delivery-page">
            <div class="container container-custom">
                <div class="row">
                    <form method="POST" action="{{ route('order-create') }}">
                        @csrf
                        <x-cart-form-group id="name" name="name" label="First name, Last name" type="text"
                            autocomplete="name"></x-cart-form-group>
                        <x-cart-form-group id="address" name="address" label="Street address, Postal code"
                            type="text" autocomplete="street-address"></x-cart-form-group>
                        <x-cart-form-group id="city" name="city" label="City, Country" type="text"
                            autocomplete="address-level2"></x-cart-form-group>
                        <x-cart-form-group id="phone" name="phone" label="Phone number" type="tel"
                            autocomplete="tel"></x-cart-form-group>

                        <!-- Add these hidden fields -->
                        <input type="hidden" name="total" value="{{ $total }}">
                        <input type="hidden" name="deliveryMethod" value="{{ $deliveryMethod }}">
                        <input type="hidden" name="paymentMethod" value="{{ $paymentMethod }}">

                        <div class="d-flex flex-column align-items-center">
                            <h2 class="white-text mt-4">Total: {{ $total }} €</h2>
                            <button type="submit" id="finish-order" class="button-custom button-red mt-2">Finish
                                Order</button>
                        </div>
                    </form>



                    <div class="col-md-5 col-sm-12 mt-5 mt-md-3 align-content-center">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100"
                                src="{{ asset('images/delivery-address/delivery-page.jpeg') }}"
                                alt="picture of mascot in storage facility">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
</x-layout>
