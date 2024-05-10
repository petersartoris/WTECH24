<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <!--REGISTRATION-FORM-->
        <div class="container container-custom">
            <div class="row border-custom border-radius-custom">
                <div class="col-12 col-md-6 col-lg-8 mb-4 mb-md-0 d-flex justify-content-center">
                    <div class="form-design">
                        <h1 class="text-center white-text mt-3 mb-3">Register</h1>
                        <form action="registrationForm" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="firstname surname" class="form-control" id="name"
                                    name="name" autocomplete="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" placeholder="example@company.com" class="form-control" id="email"
                                    name="email" autocomplete="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone number</label>
                                <input type="text" placeholder="+000 000 000 000" class="form-control" id="phoneNumber"
                                    name="phoneNumber" autocomplete="tel" required>
                            </div>
                            <div class="mb-5 position-relative">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="password" class="form-control" id="password"
                                    name="password" autocomplete="new-password" required>
                            </div>
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
    </main>

</x-layout>