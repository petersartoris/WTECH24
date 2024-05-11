<link href="{{ asset('css/components.css') }}" rel="stylesheet">

@if(count($products) > 0)
    <ul>
        @foreach($products as $product)
            @php
                $mainImage = $product->images->where('order', 0)->first();
            @endphp
            <li>
                <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="product-link-search">
                    <img src="{{ asset($mainImage->path) }}" alt="{{ $product->name }}" class="product-image-search">
                    {{ $product->name }}
                </a>
            </li>
        @endforeach
    </ul>
@else
    <p>No results found</p>
@endif




