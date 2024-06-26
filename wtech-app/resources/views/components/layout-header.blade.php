<header>
    <div class="container-header">
        <nav class="navbar navbar-expand-lg navbar-dark border-body navbar-upper">
            <div class="container-fluid">

                <!--BRAND LOGO-->
                <div class="d-flex align-items-center">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('images/main/wtech-logo.png') }}" alt="Logo" class="img-fluid logo-image">
                    </a>
                </div>

                <div class="container-fluid search-container order-3 order-lg-2" id="navbarSearch">
                    <form action="/products/search" method="GET" class="input-group-wrapper">
                        <div class="input-group">
                            <input id="search" name="query" class="form-control" type="search"
                                placeholder="Search" aria-label="Search" onkeyup="fetchResults()">
                            <button type="submit" class="btn btn-search">
                                <img src="{{ asset('images/main/magnifying-glass.png') }}" alt="">
                            </button>
                        </div>
                        <div id="search-results"></div>
                    </form>
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
                            <li class="nav-item cart-image">
                                <a href="{{ route('cart') }}">
                                    <img src="{{ asset('/images/main/cart.png') }}" alt="Cart" class="ml-2">
                                </a>
                            </li>
                        </ul>
                    @endguest
                    @auth
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-stretch flex-row-navbar">
                            <li class="nav-item d-flex justify-content-center align-items-center">
                                <i class="fas fa-user"></i>
                            </li>

                            <li class="nav-item d-flex justify-content-center align-items-center">
                                <label>{{ Auth::user()->username }}</label>
                            </li>

                            <li class="nav-item">
                                <form method="POST" action="/logout" class="form-button-custom">
                                    @csrf
                                    <button class="button-custom button-white">Log Out</button>
                                </form>

                            </li>

                            <li class="nav-item">
                                <a href="{{ route('cart') }}">
                                    <img src="{{ asset('/images/main/cart.png') }}" alt="Cart" class="ml-2">
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
                <x-nav-item :href="route('/')" :active="request()->is('/')">Home</x-nav-item>
                <x-nav-item :href="route('products')" :active="request()->is('products')">Products</x-nav-item>
                <x-nav-item :href="route('about') . '#delivery'" :active="request()->is('about')">Delivery</x-nav-item>
                <x-nav-item :href="route('about') . '#contact'" :active="request()->is('about')">Contact</x-nav-item>
                <x-nav-item :href="route('about') . '#about'" :active="request()->is('about')">About</x-nav-item>
            </div>
        </nav>
    </div>
</header>
