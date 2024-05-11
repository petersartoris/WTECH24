<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <!--REGISTRATION-FORM-->
        <form method="POST", action="/register">
            @csrf
            <div class="container container-custom">
                <div class="row border-custom border-radius-custom">
                    <div class="col-12 col-md-6 col-lg-8 mb-4 mb-md-0 d-flex justify-content-center">
                        <div class="form-design">
                            <h1 class="text-center white-text mt-3 mb-3">Register</h1>
                            <form action="registrationForm" method="post">

                                <x-form-field label="Username" type="text" placeholder="username" id="username" name="username" autocomplete="username" />
                                
                                <x-form-field label="Email" type="text" placeholder="example@company.com" id="email" name="email" autocomplete="email" />
                                
                                <x-form-field label="Password" type="password" placeholder="password" id="password" name="password" autocomplete="new-password" />

                                <x-form-field label="Confirm Password" type="password" placeholder="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password" />
                                
                                <button type="submit" class="button-red button-reg mb-4 mb-md-2">Register</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="picture-container">
                            <img class="picture img-fluid mw-100" src="../images/login/login-page.jpeg"
                                alt="welcome picture">
                            <div id="register-caller" class="mx-auto">
                                <h1 id="register-caller-text">Welcome!</h1>
                                <a href="login.html" class="no-underline">
                                    <span class="button-custom caller-button-text">Log in</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

</x-layout>