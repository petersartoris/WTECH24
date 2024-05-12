<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/product-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <!--SORTING-->
        <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-start align-items-center m-3">
                        <span class="fw-bold white-text">Sort by:</span>
                        <button class="button-custom button-box">Newest</button>
                        <button class="button-custom button-box">Best-selling</button>
                        <button class="button-custom button-box">Lowest Price</button>
                        <button class="button-custom button-box">Highest Price</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Categories-->
        {{-- <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <!--check if the current_category is not null-->
                        @if ($current_category)
                            <x-nav-item href="{{ route('products') }}" :active="request()->is('products')">All</x-nav-item>
                            <!-- <x-product-page-category :category="$current_category" /> -->
                        @endif
                        @foreach ($subcategories as $subcategory)
                            <!-- <x-product-page-category :category="$subcategory" /> -->
                            <x-nav-item
                                href="{{ route('products', ['categories[]' => $subcategory->slug]) }}">$subcategory->name</x-nav-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}

        <!--Categories-->
        <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <!--check if the current_category is not null-->
                        @if ($current_category)
                            @if ($current_category->parent)
                                <x-nav-item class="button-custom category-link"
                                    href="{{ route('products', ['categories[]' => $current_category->parent->slug]) }}"
                                    :active="request()->is('products/' . $current_category->parent->slug)">
                                    {{ $current_category->parent->name }}
                                </x-nav-item>
                            @else
                                <x-nav-item class="button-custom category-link"
                                    href="{{ route('products') }}">All</x-nav-item>
                            @endif
                            <x-nav-item class="button-custom category-link"
                                href="{{ route('products', ['categories[]' => $current_category->slug]) }}"
                                :active="true">
                                {{ $current_category->name }}
                            </x-nav-item>
                            <!-- add a divider-->
                            <span class="divider"></span>
                        @endif
                        @foreach ($subcategories as $subcategory)
                            <x-nav-item class="button-custom category-link"
                                href="{{ route('products', ['categories[]' => $subcategory->slug]) }}"
                                :active="request()->is('products/' . $subcategory->slug)">
                                {{ $subcategory->name }}
                            </x-nav-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <!--Filters -->
        {{-- <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <x-product-page-filter id="filter1" label="Option 1" />
                        <x-product-page-filter id="filter2" label="Option 2" />
                        <x-product-page-filter id="filter3" label="Option 3" />
                        <x-product-page-filter id="filter4" label="Option 4" />
                        <x-product-page-filter id="filter5" label="Option 5" />
                        <x-product-page-filter id="filter6" label="Option 6" />
                        <x-product-page-filter id="filter7" label="Option 7" />
                    </div>
                    <button class="button-custom button-white">Filter</button>
                </div>
            </div>
        </div> --}}

        @section('content')
            <!--PRODUCTS-->
            <section id="Product-Page">
                @foreach ($products as $product)
                    @php
                        $image = $product->images->where('order', 0)->first();
                    @endphp
                    <x-product-item product="{{ $product->id }}"
                        image="{{ asset($image->path ?? 'images/main/250x250.png') }}" name="{{ $product->name }}"
                        code="{{ $product->code }}" description="{{ $product->description }}"
                        price="{{ $product->price }}" availability="{{ $product->availability }}" />
                @endforeach
            </section>

            <!--PAGINATION-->
            <div class="container mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">

                        <!-- Previous Page Link -->
                        @if ($products->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">«</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}"
                                    rel="prev">«</a></li>
                        @endif

                        <!-- Pagination Elements -->
                        @php
                            $start = max($products->currentPage() - 3, 1);
                            $end = min($start + 6, $products->lastPage());
                        @endphp
                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $products->currentPage())
                                <li class="page-item active "><span
                                        class="page-link current border-radius-custom">{{ $i }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $products->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor

                        <!-- Next Page Link -->
                        @if ($products->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}"
                                    rel="next">»</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">»</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endsection

    </main>
</x-layout>
