<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/product-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
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

        <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="col">
                    <!-- Filtering options container -->
                    <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                        <div class="d-flex flex-grow-1 flex-wrap">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter1">
                                <label class="form-check-label" for="filter1">
                                    Option 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter2">
                                <label class="form-check-label" for="filter2">
                                    Option 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter3">
                                <label class="form-check-label" for="filter3">
                                    Option 3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter4">
                                <label class="form-check-label" for="filter4">
                                    Option 4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 5
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 6
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 7
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="button-custom button-white">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="Product-Page">
            
                    <!-- Product 1-->
                    <x-product-item product="product1" image="250x250.png" name="Product Name" code="202410" 
                    description="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam similique minima cumque, voluptatem aperiam reprehenderit 
                    accusantium officia atque officiis impedit iure animi sunt temporibus non ullam fugiat saepe optio magnam nam. Assumenda possimus vitae fuga non veniam.." 
                    price="1000" />
                    <!-- Product 2-->
                    <x-product-item product="product1" image="250x250.png" name="Product Name" code="202410" 
                    description="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam similique minima cumque, voluptatem aperiam reprehenderit 
                    accusantium officia atque officiis impedit iure animi sunt temporibus non ullam fugiat saepe optio magnam nam. Assumenda possimus vitae fuga non veniam.." 
                    price="1000" />

        </section>

        <section>
            <div class="container mt-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item mx-2">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item mx-2"><a class="page-link current border-radius-custom" href="#">1</a></li>
                        <li class="page-item mx-2"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mx-2"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mx-2"><a class="page-link" href="#">4</a></li>
                        <li class="page-item mx-2"><a class="page-link" href="#">5</a></li>
                        <li class="page-item mx-2">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </section>
    </main>
</x-layout>