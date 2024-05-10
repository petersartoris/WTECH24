<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/main-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <!--PRODUCT CATEGORIES-->
        <section id="Product-Categories">
            <div class="container container-custom border-custom border-radius-custom">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center m-2 white-text">Product Categories</h2>
                    </div>
                </div>
            </div>
            <div class="container container-custom">
                <div class="row">
                    <div class="col-12 col-sm-4 col-product justify-content-start">
                        <div class="p-3 border product-category">
                            <a href="product-page.html">
                                <img src="../images/main/product-desktop.jpg" alt="Image" class="img-fluid">
                                <span class="button-custom product-button-text button-red">Show</span>
                            </a>
                            <p class="product-name">Desktop PCs</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-product">
                        <div class="p-3 border product-category">
                            <a href="product-page.html">
                                <img src="../images/main/product-components.jpg" alt="Image" class="img-fluid">
                                <span class="button-custom product-button-text button-red">Show</span>
                            </a>
                            <p class="product-name">Components</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-product justify-content-end">
                        <div class="p-3 border product-category ">
                            <a href="product-page.html">
                                <img src="../images/main/product-accessories.jpg" alt="Image" class="img-fluid">
                                <span class="button-custom product-button-text button-red">Show</span>
                            </a>
                            <p class="product-name">Accessories</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWEST PRODUCTS -->
        <section id="Newest products">
            <div class="container container-sales border-custom border-radius-custom">
                <div class="container container-custom border-custom border-radius-custom">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center m-2 white-text">Newest Products</h2>
                        </div>
                    </div>
                </div>
                <div class="container container-custom">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center responsive-drop">
                            <div class="col-12 col-sm-2 spacioo">
                                <div class="p-3 border box-category">
                                    <a href="product-detail.html">
                                        <img src="../images/main/250x250.png" alt="Image" class="img-fluid">
                                        <span class="button-custom product-button-text button-red">View</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-2 spacioo">
                                <div class="p-3 border box-category">
                                    <a href="product-detail.html">
                                        <img src="../images/main/250x250.png" alt="Image" class="img-fluid">
                                        <span class="button-custom product-button-text button-red">View</span> </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-2 spacioo">
                                <div class="p-3 border box-category">
                                    <a href="product-detail.html">
                                        <img src="../images/main/250x250.png" alt="Image" class="img-fluid">
                                        <span class="button-custom product-button-text button-red">View</span> </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-2 spacioo">
                                <div class="p-3 border box-category">
                                    <a href="product-detail.html">
                                        <img src="../images/main/250x250.png" alt="Image" class="img-fluid">
                                        <span class="button-custom product-button-text button-red">View</span> </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-2 spacioo">
                                <div class="p-3 border box-category">
                                    <a href="product-detail.html">
                                        <img src="../images/main/250x250.png" alt="Image" class="img-fluid">
                                        <span class="button-custom product-button-text button-red">View</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layout>