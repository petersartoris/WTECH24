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
                            @php
                                $deliveryMethods = App\Models\DeliveryType::all();
                            @endphp
                            @foreach ($deliveryMethods as $deliveryMethod)
                                <x-cart-method method="{{ $deliveryMethod->name }}"
                                    price="{{ $deliveryMethod->price }} €" class="delivery-button"
                                    num_price="{{ $deliveryMethod->price }}"></x-cart-method>
                            @endforeach
                            {{-- <x-cart-method method="Delivery Box" price="2.00 €" class="delivery-button selected"
                                num_price="2.00"></x-cart-method>
                            <x-cart-method method="Our Stores" price="1.00 €" class="delivery-button"
                                num_price="1.00"></x-cart-method>
                            <x-cart-method method="Delivery to Address" price="3.50 €" class="delivery-button"
                                num_price="3.50"></x-cart-method> --}}

                        </div>

                        <div class="row mb-4">
                            <div class="container container-custom border-custom border-radius-custom my-3">
                                <h2 class="text-center m-2 white-text">Choose payment method</h2>
                            </div>
                            @php
                                $paymentMethods = App\Models\PaymentType::all();
                            @endphp

                            @foreach ($paymentMethods as $paymentMethod)
                                <x-cart-method method="{{ $paymentMethod->name }}" price="{{ $paymentMethod->price }} €"
                                    class="payment-button" num_price="{{ $paymentMethod->price }}"></x-cart-method>
                            @endforeach
                            {{-- <x-cart-method method="Payment Card" price="Free" class="payment-button selected"
                                    num_price="0.00"></x-cart-method>
                                <x-cart-method method="Cash on Delivery" price="1.00 €" class="payment-button"
                                    num_price="1.00"></x-cart-method> --}}
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 mt-5 mt-md-3 align-content-center">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100"
                                src="{{ asset('images/delivery-address/delivery-page.jpeg') }}"
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
                            <h2 class="white-text total-price">Total Price: {{ $total }} €</h2>
                        </div>
                    </div>

                    <div class="col-sm-2 d-flex justify-content-center my-3">
                        <form action="{{ route('cart-delivery-info') }}" method="POST" class="form-button-custom">
                            @csrf
                            <input type="hidden" id="totalprice" name="totalprice">
                            <input type="hidden" id="deliverymethod" name="deliverymethod">
                            <input type="hidden" id="paymentmethod" name="paymentmethod">
                            <button type="submit" class="button-custom button-red">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/cart-methods.js') }}"></script>
</x-layout>
