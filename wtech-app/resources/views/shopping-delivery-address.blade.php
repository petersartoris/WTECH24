<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping-delivery</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../libs/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <!-- Custom CSS for this file -->
    <link rel="stylesheet" type="text/css" href="../css/styles/shopping-delivery-address.css">

    <!-- Custom CSS for the whole project -->
    <link rel="stylesheet" type="text/css" href="../css/styles/global.css">
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
        <div class="container container-custom center-all mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart.html" class="btn btn-outline-secondary w-100 my-2">Shopping
                            Cart</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-cart-delivery-options.html"
                            class="btn btn-outline-secondary w-100 my-2">Shipping
                            & Payment</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <a href="/html/shopping-delivery-address.html" class="btn btn-primary w-100 my-2">Delivery
                            Information</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="delivery-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-3">
                        <h1 class="text-center border-custom" id="delivery-address">Enter delivery address</h1>
                        <form>
                            <div class="form-group">
                                <label for="name">First name, Last name</label>
                                <input type="text" class="form-control" id="name" autocomplete="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Street address, Postal code</label>
                                <input type="text" class="form-control" id="address" autocomplete="street-address">
                            </div>
                            <div class="form-group">
                                <label for="city">City, Country</label>
                                <input type="text" class="form-control" id="city" autocomplete="address-level2">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone number</label>
                                <input type="tel" class="form-control" id="phone" autocomplete="tel">
                            </div>
                        </form>

                        <div class="d-flex flex-column align-items-center">
                            <h2 class="white-text mt-4">Total: 4000 €</h2>
                            <button id="finish-order" class="button-custom button-red mt-2">Finish Order</button>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4 mt-5 mt-md-3 align-content-center">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100" src="../images/delivery-address/delivery-page.jpeg"
                                alt="picture of mascot in storage facility">
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