<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap-->
    <!--<link rel="stylesheet" type="text/css" href="../libs/bootstrap-5.3.3-dist/css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/styles/main-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive/main-page-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive/components.css') }}" rel="stylesheet">

    <!-- Favicon made with realfavicongenerator.net-->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/site.webmanifest">
    <link rel="mask-icon" href="../images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>


<body>
    <header>
        <div class="container-header">
            <nav class="navbar navbar-expand-lg navbar-dark border-body navbar-upper">
                <div class="container-fluid">

                    <!--BRAND LOGO-->
                    <div class="d-flex align-items-center">
                        <a href="index.html">
                            <img src="../images/main/wtech-logo.png" alt="Logo" class="img-fluid logo-image">
                        </a>
                    </div>

                    <!--SEARCH BAR-->
                    <div class="container-fluid search-container order-3 order-lg-2" id="navbarSearch">
                        <div class="input-group">
                            <input id="search" class="form-control" type="search" placeholder="Search"
                                aria-label="Search">
                            <button type="button" class="btn btn-search">
                                <img src="../images/main/magnifying-glass.png" alt="">
                            </button>
                        </div>
                    </div>

                    <!--LOGIN REGISTER CART-->
                    <div class="d-flex order-2 order-lg-3 ">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-stretch flex-row-navbar">
                            <li class="nav-item">
                                <a href="login.html">
                                    <button class="button-custom button-red">Log In</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="register.html">
                                    <button class="button-custom button-white">Create Account</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="shopping-cart.html">
                                    <img src="../images/main/cart.png" alt="Cart" class="ml-2">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--NAVBAR LOWER-->
            <nav class="navbar navbar-expand navbar-lower">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.html">Home</a>
                    <a class="nav-item nav-link" href="product-page.html">Products</a>
                    <a class="nav-item nav-link" href="delivery-about-contact.html#delivery">Delivery</a>
                    <a class="nav-item nav-link" href="delivery-about-contact.html#contact">Contact</a>
                    <a class="nav-item nav-link" href="delivery-about-contact.html#about">About</a>
                </div>
            </nav>
        </div>
    </header>


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

    <div class="container footer-position container-custom">
        <div class="row">
            <footer class="pt-3 mb-3 mt-4">
                <ul class="nav justify-content-center border-bottom-custom pb-3 mb-3">
                    <li class="nav-item"><a href="index.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Home</a>
                    </li>
                    <li class="nav-item"><a href="product-page.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Products</a>
                    </li>
                    <li class="nav-item"><a href="delivery-about-contact.html#delivery"
                            class="nav-link px-2 text-body-secondary nav-footer">Delivery</a>
                    </li>
                    <li class="nav-item"><a href="delivery-about-contact.html#contact"
                            class="nav-link px-2 text-body-secondary nav-footer">Contact</a>
                    </li>
                    <li class="nav-item"><a href="delivery-about-contact.html#about"
                            class="nav-link px-2 text-body-secondary nav-footer">About</a>
                    </li>
                </ul>
                <p class="text-center text-body-secondary nav-footer">Copyright &copy; 2024
                    BombaShop WTECH @ FIIT STU
                </p>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="../libs/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>