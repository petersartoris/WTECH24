<div class="delivery-method">
    <div class="row py-3">
        <div class="col-9 d-flex justify-content-start">
            <button class="button-custom button-white method-button {{ $class }}" data-price="{{ $price }}">
                <h4>{{ $method }}</h4>
            </button>
        </div>
        <div class="col-3">
            <h4 class="m-2 px-4 white-text">{{ $price }}</h4>
        </div>
    </div>
</div>