
<div class="col-12 col-sm-4 col-product {{ $justify ?? '' }}">
    <div class="p-3 border product-category">
        <a href="{{ route('products', ['category' => $category]) }}">
            <img src="{{ asset($image) }}" alt="Image" class="img-fluid">
            <span class="button-custom product-button-text button-red">Show</span>
        </a>
        <p class="product-name">{{ $name }}</p>
    </div>
</div>