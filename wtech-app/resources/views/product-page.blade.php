<!doctype html>
<html lang="en">

<head>
    <title>Placeholder.sk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../libs/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles/product-page.css">
    <link rel="stylesheet" href="../css/responsive/product-page-responsive.css">
    <link rel="stylesheet" href="../css/styles/global.css">
    <link rel="stylesheet" href="../css/styles/components.css">
    <link rel="stylesheet" href="../css/responsive/components.css">

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