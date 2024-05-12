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
                <div class="row"> <!-- use slugs for the category attribute -->
                    <x-product-category justify="justify-content-start" image="images/main/product-desktop.jpg"
                        category="category-1" name="Desktop PCs" />
                    <x-product-category image="images/main/product-components.jpg" category="category-2"
                        name="Components" />
                    <x-product-category justify="justify-content-end" image="images/main/product-accessories.jpg"
                        category="category-3" name="Accessories" />
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
                            @php
                                $products = App\Models\Product::orderBy('created_at', 'desc')->take(5)->get();
                            @endphp

                            @foreach ($products as $product)
                                @php
                                    $image = $product->images->where('order', 0)->first();
                                @endphp
                                
                                <x-product-box product="{{$product->id}}" image="{{ asset($image->path ?? 'images/main/250x250.png') }}" />
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layout>
