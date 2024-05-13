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
                        <span class="fw-bold white-text ">Sort by:</span>

                        <form class="sort-form" method="get" action="{{ route('products') }}">
                            <x-product-page-sort-option name="price" label="Price" />
                            <x-product-page-sort-option name="name" label="Name" />
                            <x-product-page-sort-option name="availability" label="Availability" :options="['' => '----', 'AVLF' => 'Available first', 'NAVLF' => 'Not Available first']" />

                            <!--check if the current category is not null-->
                            @if (isset($current_category))
                                <!--if the current category is not null we need to add it to the form so that we can use filters on it-->
                                <input type="hidden" name="categories[]" value="{{ $current_category->slug }}">
                            @endif

                            <button type="submit" class="button-custom">Sort</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--FILTERING-->
        <div class="container container-custom border-custom border-radius-custom bg-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-start align-items-center m-3">
                        <span class="fw-bold white-text ">Filter by:</span>
                        <!--filtering-->
                        <form class="sort-form d-flex align-items: center flex-wrap" method="get"
                            action="{{ route('products') }}">
                            <!-- Filter by Price Range -->
                            <label for="min-price" class="dropdown-label">Min Price:</label>
                            <input class="price-box" type="range" id="min-price" name="min_price" min="0"
                                max="400" value="{{ request('min_price', '0') }}"
                                oninput="document.getElementById('minPriceValue').innerText = this.value">
                            <span id="minPriceValue" class="price-display">{{ request('min_price', '0') }}</span>

                            <label for="max-price" class="dropdown-label">Max Price:</label>
                            <input class="price-box" type="range" id="max-price" name="max_price" min="0"
                                max="1000" value="{{ request('max_price', '0') }}"
                                oninput="document.getElementById('maxPriceValue').innerText = this.value">
                            <span id="maxPriceValue" class="price-display">{{ request('max_price', '0') }}</span>

                            @if (isset($current_category))
                                <input type="hidden" name="categories[]" value="{{ $current_category->slug }}">
                            @endif

                            <input type="hidden" name="price" value="{{ request('price') }}">
                            <input type="hidden" name="name" value="{{ request('name') }}">
                            <input type="hidden" name="availability" value="{{ request('availability') }}">

                            <button type="submit" class="button-custom">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!--Categories-->
        @if (isset($subcategories))
            <div class="container container-custom border-custom border-radius-custom center-all bg-box">
                <div class="row">
                    <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                        <div class="d-flex flex-grow-1 flex-wrap">
                            <!--check if the current_category exists and is not null-->

                            @if (isset($current_category))
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
                            @if (isset($subcategories))
                                @foreach ($subcategories as $subcategory)
                                    <x-nav-item class="button-custom category-link"
                                        href="{{ route('products', ['categories[]' => $subcategory->slug]) }}"
                                        :active="request()->is('products/' . $subcategory->slug)">
                                        {{ $subcategory->name }}
                                    </x-nav-item>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif


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
                                    class="page-link current border-radius-custom">{{ $i }}</span>
                            </li>
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


    </main>
</x-layout>
