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
            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                    <!-- Product 1-->
                    <div class="container container-fluid px-0">
                        <div class="row row-product content flex-column flex-sm-row">

                            <!--IMAGE + TITLE-->
                            <div class="col-lg-10 col-md-8">
                                <div class="d-flex">
                                    <a href="product-detail.html" class="product-link">
                                        <img src="../images/main/250x250.png" alt="Product Image" class="img-fluid">
                                    </a>
                                    <div class="container-fluid ms-3 m-2 product-info">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 white-text">Product Name</h2>
                                        </a>
                                        <p class="m-2 white-text">Product code: 202410</p>
                                        <p class="m-2 mb-2 gray-text text-justify d-md-block d-none">Lorem ipsum dolor,
                                            sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam
                                            similique minima cumque, voluptatem aperiam reprehenderit accusantium
                                            officia atque officiis impedit iure animi sunt temporibus non ullam fugiat
                                            saepe optio magnam nam. Assumenda possimus vitae fuga non veniam..</p>
                                    </div>
                                </div>
                            </div>

                            <!--ADD TO CART-->
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <div class="m-2">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 d-md-none d-block white-text">Product Name</h2>
                                        </a>
                                        <h2 class="m-2 white-text">1000 €</h2>
                                        <button class="button-custom button-red fixed-size">Add to cart</button>
                                        <div class="d-flex mb-3 mt-sm-2">
                                            <span class="text-success">✓ Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Other items -->
                </div>
            </div>

            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                    <!-- Product 2-->
                    <div class="container container-fluid px-0">
                        <div class="row row-product content flex-column flex-sm-row">

                            <!--IMAGE + TITLE-->
                            <div class="col-lg-10 col-md-8">
                                <div class="d-flex">
                                    <a href="product-detail.html" class="product-link">
                                        <img src="../images/main/250x250.png" alt="Product Image" class="img-fluid">
                                    </a>
                                    <div class="container-fluid ms-3 m-2 product-info">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 white-text">Product Name</h2>
                                        </a>
                                        <p class="m-2 white-text">Product code: 202410</p>
                                        <p class="m-2 mb-2 gray-text text-justify d-md-block d-none">Lorem ipsum dolor,
                                            sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam
                                            similique minima cumque, voluptatem aperiam reprehenderit accusantium
                                            officia atque officiis impedit iure animi sunt temporibus non ullam fugiat
                                            saepe optio magnam nam. Assumenda possimus vitae fuga non veniam..</p>
                                    </div>
                                </div>
                            </div>

                            <!--ADD TO CART-->
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <div class="m-2">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 d-md-none d-block white-text">Product Name</h2>
                                        </a>
                                        <h2 class="m-2 white-text">1000 €</h2>
                                        <button class="button-custom button-red fixed-size">Add to cart</button>
                                        <div class="d-flex mb-3 mt-sm-2">
                                            <span class="text-success">✓ Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Other items -->
                </div>
            </div>

            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                    <!-- Product 3-->
                    <div class="container container-fluid px-0">
                        <div class="row row-product content flex-column flex-sm-row">

                            <!--IMAGE + TITLE-->
                            <div class="col-lg-10 col-md-8">
                                <div class="d-flex">
                                    <a href="product-detail.html" class="product-link">
                                        <img src="../images/main/250x250.png" alt="Product Image" class="img-fluid">
                                    </a>
                                    <div class="container-fluid ms-3 m-2 product-info">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 white-text">Product Name</h2>
                                        </a>
                                        <p class="m-2 white-text">Product code: 202410</p>
                                        <p class="m-2 mb-2 gray-text text-justify d-md-block d-none">Lorem ipsum dolor,
                                            sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam
                                            similique minima cumque, voluptatem aperiam reprehenderit accusantium
                                            officia atque officiis impedit iure animi sunt temporibus non ullam fugiat
                                            saepe optio magnam nam. Assumenda possimus vitae fuga non veniam..</p>
                                    </div>
                                </div>
                            </div>

                            <!--ADD TO CART-->
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <div class="m-2">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 d-md-none d-block white-text">Product Name</h2>
                                        </a>
                                        <h2 class="m-2 white-text">1000 €</h2>
                                        <button class="button-custom button-red fixed-size">Add to cart</button>
                                        <div class="d-flex mb-3 mt-sm-2">
                                            <span class="text-success">✓ Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Other items -->
                </div>
            </div>

            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                    <!-- Product 4-->
                    <div class="container container-fluid px-0">
                        <div class="row row-product content flex-column flex-sm-row">

                            <!--IMAGE + TITLE-->
                            <div class="col-lg-10 col-md-8">
                                <div class="d-flex">
                                    <a href="product-detail.html" class="product-link">
                                        <img src="../images/main/250x250.png" alt="Product Image" class="img-fluid">
                                    </a>
                                    <div class="container-fluid ms-3 m-2 product-info">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 white-text">Product Name</h2>
                                        </a>
                                        <p class="m-2 white-text">Product code: 202410</p>
                                        <p class="m-2 mb-2 gray-text text-justify d-md-block d-none">Lorem ipsum dolor,
                                            sit amet consectetur adipisicing elit. Ipsa inventore nemo, quisquam
                                            similique minima cumque, voluptatem aperiam reprehenderit accusantium
                                            officia atque officiis impedit iure animi sunt temporibus non ullam fugiat
                                            saepe optio magnam nam. Assumenda possimus vitae fuga non veniam..</p>
                                    </div>
                                </div>
                            </div>

                            <!--ADD TO CART-->
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <div class="m-2">
                                        <a href="product-detail.html" class="product-link">
                                            <h2 class="m-2 d-md-none d-block white-text">Product Name</h2>
                                        </a>
                                        <h2 class="m-2 white-text">1000 €</h2>
                                        <button class="button-custom button-red fixed-size">Add to cart</button>
                                        <div class="d-flex mb-3 mt-sm-2">
                                            <span class="text-success">✓ Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Other items -->
                </div>
            </div>

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