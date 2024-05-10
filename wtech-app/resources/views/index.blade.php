<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <!--PRODUCT CATEGORIES-->
        <section id="product-categories">
            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                        <h2 class="text-center m-2 white-text">Product Categories</h2>
                </div>
            </div>
            <div class="container container-custom">
                <div class="row">
                    <x-product-category justify="justify-content-start" image="product-desktop.jpg" category="desktop-pcs" name="Desktop PCs" />
                    <x-product-category image="product-components.jpg" category="components" name="Components" />
                    <x-product-category justify="justify-content-end" image="product-accessories.jpg" category="accessories" name="Accessories" />
                </div>
            </div>
        </section>

        <!-- NEWEST PRODUCTS -->
        <section id="Newest products">
            <div class="container container-sales border-custom border-radius-custom">
                <div class="container container-custom border-custom border-radius-custom">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center m-2 white-text">Newest Products</h2>
                        </div>
                    </div>
                </div>
                <div class="container container-custom">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center flex-wrap responsive-drop">
                            <x-product-box product="product1" image="250x250.png" />
                            <x-product-box product="product2" image="250x250.png" />
                            <x-product-box product="product3" image="250x250.png" />
                            <x-product-box product="product4" image="250x250.png" />
                            <x-product-box product="product5" image="250x250.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layout>