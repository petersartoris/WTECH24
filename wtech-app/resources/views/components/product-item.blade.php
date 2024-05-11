<div class="container container-custom border-custom border-radius-custom">
    <div class="row row-product content flex-column flex-sm-row">
        <!--IMAGE + TITLE-->
        <div class="col-lg-10 col-md-8 d-flex">
            <a href="{{ route('product-detail', ['id' => $product]) }}" class="product-link">
                <img src="{{ asset($image) }}" alt="Product Image" class="img-fluid thumbnail">
            </a>
            <div class="container-fluid ms-3 m-2 product-info">
                <a href="{{ route('product-detail', ['id' => $product]) }}" class="product-link">
                    <h2 class="m-2 white-text">{{ $name }}</h2>
                </a>
                <p class="m-2 white-text">Product code: {{ $code }}</p>
                <p class="m-2 mb-2 gray-text text-justify d-md-block d-none" id="description">
                    {{ Str::limit($description, 430, '...') }}</p>
            </div>
        </div>

        <!--ADD TO CART-->
        <div class="col-lg-2 col-md-4 d-flex">
            <div class="m-2">
                <a href="{{ route('product-detail', ['id' => $product]) }}" class="product-link">
                    <h2 class="m-2 d-md-none d-block white-text">{{ $name }}</h2>
                </a>
                <h2 class="m-2 white-text">{{ $price }} €</h2>
                <x-button-cart-add></x-button-cart-add>
                <div class="d-flex mb-3 mt-sm-2">
                    <span class="text-success">✓ Available</span>
                </div>
            </div>
        </div>
    </div>
</div>
