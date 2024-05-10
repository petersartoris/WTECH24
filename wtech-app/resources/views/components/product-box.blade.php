<div class="col-12 col-sm-2 spacioo">
    <div class="p-3 border box-category">
        <a href="{{ route('product-detail', ['product' => $product]) }}">
            <img src="{{ asset('images/main/' . $image) }}" alt="Image" class="img-fluid">
            <span class="button-custom product-button-text button-red">View</span>
        </a>
    </div>
</div>