<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/product-detail.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom">
            <div class="row">
                <!--MAIN PRODUCT IMAGE-->
                <div class="col-md-5 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center align-content-center">
                        <img src="../images/main/vents.jpg" class="img-fluid" alt="Product Photo">
                    </div>

                    <!--SMALL IMAGE BUTTONS-->
                    <div class="container container-custom">
                        <div class="row justify-content-center align-items-center">
                            <div class="col center-all">
                                <a href="#">
                                    <img src="../images/main/vents100x100.jpg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col center-all">
                                <a href="#">
                                    <img src="../images/main/vents100x100.jpg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col center-all">
                                <a href="#">
                                    <img src="../images/main/vents100x100.jpg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col center-all">
                                <a href="#">
                                    <img src="../images/main/vents100x100.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--PRODUCT DETAILS UPPER-->
                <div class="col-md-7">
                    <div class="container-fluid">
                        <h2 class="white-text">Product Name</h2>
                        <div class="text-container">
                            <p class="my-4 me-3 border-color text-justify fs-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis est nihil optio
                                accusamus impedit necessitatibus exercitationem natus praesentium non commodi
                                repudiandae, ipsum iusto eos totam vero fugiat ab. Exercitationem qui voluptatem maiores
                                laborum, libero ullam ratione illo iste ut. Eveniet voluptates perspiciatis laboriosam
                                maxime laborum obcaecati perferendis eos molestiae eum.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="my-2">
                                <h2 class="my-2 white-text">1000 €</h2>
                                <button class="button-custom button-red fixed-size my-2">Add to cart</button>
                                <div class="d-flex mt-2">
                                    <span class="text-success">✓ Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout>