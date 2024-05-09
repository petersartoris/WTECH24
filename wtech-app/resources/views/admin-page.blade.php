<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../libs/bootstrap-5.3.3-dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles/admin-page.css">
    <link rel="stylesheet" href="../css/styles/global.css">
    <link rel="stylesheet" href="../css/styles/components.css">
    <link rel="stylesheet" href="../css/responsive/components.css">

    <!-- Favicon made with realfavicongenerator.net-->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/site.webmanifest">
    <link rel="mask-icon" href="../images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
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
                    <a class="nav-item nav-link" href="error.html">Delivery</a>
                    <a class="nav-item nav-link" href="error.html">Contact</a>
                    <a class="nav-item nav-link" href="about.html">About</a>
                </div>
            </nav>
        </div>
    </header>

    <main>

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


        <div class="container container-custom">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>

    <div class="container container-custom pos-footer">
        <div class="row">
            <footer class="pt-3 mb-3 mt-4">
                <ul class="nav justify-content-center border-bottom-custom pb-3 mb-3">
                    <li class="nav-item"><a href="index.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Home</a></li>
                    <li class="nav-item"><a href="error.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Products</a>
                    </li>
                    <li class="nav-item"><a href="error.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Delivery</a>
                    </li>
                    <li class="nav-item"><a href="error.html"
                            class="nav-link px-2 text-body-secondary nav-footer">Contact</a>
                    </li>
                    <li class="nav-item"><a href="error.html"
                            class="nav-link px-2 text-body-secondary nav-footer">About</a></li>
                </ul>
                <p class="text-center text-body-secondary nav-footer">Copyright &copy; 2024 BombaShop WTECH @ FIIT STU
                </p>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="../libs/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

</body>

</html>