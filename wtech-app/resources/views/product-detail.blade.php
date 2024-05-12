<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/product-detail.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom">
            <div class="row">

                <div class="col-md-5 mb-5 mb-md-0">
                    <!--GET IMAGES FROM DATABASE-->
                    @php
                        $mainImage = $product->images->where('order', 0)->first();
                        $otherImages = $product->images->where('order', '>=', 0)->sortBy('order')->take(4);
                    @endphp

                    <!--MAIN PRODUCT IMAGE-->
                    <div class="d-flex justify-content-center align-content-center">
                        <img src="{{ asset($mainImage->path) }}" class="img-fluid main" alt="{{ $product->name }}">
                    </div>

                    <!--SMALL PRODUCT IMAGES-->
                    <div class="container container-custom">
                        <div class="row justify-content-center align-items-center">
                            @foreach ($otherImages as $image)
                                <div class="col center-all">
                                    <a href="#">
                                        <img src="{{ asset($image->path) }}" class="img-fluid">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!--PRODUCT DETAIL-->
                <div class="col-md-7">
                    <div class="container-fluid">
                        <h2 class="white-text">{{ $product->name }}</h2>
                        <div class="text-container">
                            <p class="my-4 me-3 border-color text-justify fs-5">
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="my-2">
                                <h2 class="my-2 white-text">{{ $product->price }} €</h2>
                                
                                <x-cart-add-button :product="$product"></x-cart-add-button>

                                @php
                                    $availability = $product->getAvailabilityAttribute($product->availability);
                                @endphp
                                <div class="d-flex mt-2">
                                    <span class="{{ $availability === 'available' ? 'text-success' : 'text-danger' }}">
                                        {{ $availability === 'available' ? '✓ Available' : 'X Not Available' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".img-fluid").click(function() {
                var imgSrc = $(this).attr("src");
                $(".main").attr("src", imgSrc);
            });
        });
    </script>

</x-layout>
