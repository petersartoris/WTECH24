<header>
    <div class="container-header">
        <nav class="navbar navbar-expand-lg navbar-dark border-body navbar-upper">
            <div class="container-fluid">

                <!--BRAND LOGO-->
                <div class="d-flex align-items-center">
                    <a href="{{ route('/') }}">
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

                        @guest
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-stretch flex-row-navbar">
                                <li class="nav-item">
                                    <a href="{{ route('login') }}">
                                        <button class="button-custom button-red">Log In</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">
                                        <button class="button-custom button-white">Create Account</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart') }}">
                                        <img src="../images/main/cart.png" alt="Cart" class="ml-2">
                                    </a>
                                </li>
                            </ul>
                        @endguest
                        @auth
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-stretch flex-row-navbar">
                                <li class="nav-item">
                                    <label>{{ Auth::user()->username }}</label>
                                </li>

                                <li class="nav-item">
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button class="button-custom button-white">Log Out</button>
                                    </form>
                                    
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ route('cart') }}">
                                        <img src="../images/main/cart.png" alt="Cart" class="ml-2">
                                    </a>
                                </li>              
                            </ul>
                        @endauth
                    
                </div>
            </div>
        </nav>

        <!--NAVBAR LOWER-->
        <nav class="navbar navbar-expand navbar-lower">
            <div class="navbar-nav">
                <x-nav-item name="Home" url="/"/>
                <x-nav-item name="Products" url="products"/>
                <x-nav-item name="Delivery" url="about"/>
                <x-nav-item name="Contact" url="about"/>
                <x-nav-item name="Contact" url="about"/>
            </div>
            </div>
        </nav>
    </div>
</header>