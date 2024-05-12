<div class="container container-custom mb-3 mt-2 card">
    <div class="row">

        <div class="col-sm-10 px-0 d-flex">
            @php
                $mainImage = $product->images->where('order', 0)->first();
            @endphp
            <img src="{{ asset($mainImage->path) }}" alt="{{ $product->name }}" class="card-img">
            
            <div class="card-body">

                
                <h2 class="white-text">{{ $product->name }}</h2>

                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <p class="price-text">{{ $product->price }} €</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="input-group">
                            <!-- + -->
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn btn-outline-light"
                                    data-type="plus" data-field="">
                                    +
                                </button>
                            </span>
                            <!-- Quantity -->
                            <input type="text" id="quantity" name="quantity"
                                class="form-control input-number" value="{{ $quantity }}" min="1" max="100">
                            <!-- - -->
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn btn-outline-light"
                                    data-type="minus" data-field="">
                                    -
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="d-flex mt-2">
                            <span class="{{ $product->availability === 'available' ? 'text-success' : 'text-danger' }}">
                                {{ $product->availability === 'available' ? '✓ Available' : 'X Not Available' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-2 my-md-0 my-2 py-md-0 py-2 d-flex justify-content-center">
            <button type="button" class="remove-button" aria-label="Close">×</button>
        </div>
    </div>
</div>

