<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <form method="POST", action="/login">
            @csrf
            <!-- login page -->
            <div class="container container-custom">
                <div class="row border-custom border-radius-custom">
                    <div class="col-12 col-lg-8 col-md-6 mx-auto">
                        <h1 class="text-center white-text mt-3 mb-3">Log In</h1>
                        <div class="form-design mx-auto">
                            <form action="loginForm" method="post">
                                <x-form-field label="Email" type="text" placeholder="example@company.com" id="email" name="email" autocomplete="email" />
                                <x-form-field label="Password" type="password" placeholder="password" id="password" name="password" autocomplete="current-password" />

                                <div class="mb-5 position-relative">
                                    <small class="form-text text-muted position-absolute end-0">
                                        <a href="error.html" id="forgot-password-link">Forgot your password?</a>
                                    </small>
                                </div>
                                <button type="submit" class="button-login button-red mb-4 mb-md-2">Login</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100" src="../images/login/login-page.jpeg"
                                alt="Placeholder Image">
                            <div id="registration-caller" class="mx-auto">
                                <h1 id="registration-caller-text">Do not have an account?</h1>
                                <a href="register.html" class="no-underline">
                                    <!-- <button type="button" class="btn btn-light">Create Account</button> -->
                                    <span class="button-custom caller-button-text">Create Account</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    
</x-layout>