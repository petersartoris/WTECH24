<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/delivery-about-contact.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div id="contact" class="container mt-5">
            <h1 class="text-center text-white border-custom border-radius-custom">Contact Us</h1>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-white">Customer Service</h2>
                    <p class="text-white">For any inquiries or assistance, please contact our customer service team. We
                        are
                        available to help you with any questions, concerns, or feedback you may have. Our team is
                        dedicated to providing you with the best support and ensuring your shopping experience is
                        seamless and enjoyable.</p>
                    <!-- Google Map -->
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.760753873646!2d17.06896947705875!3d48.15341747124529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8bec79f0f3a9%3A0x8b585229fc0ae860!2sFaculty%20of%20Informatics%20and%20Information%20Technologies%20STU!5e0!3m2!1sen!2ssk!4v1715025790379!5m2!1sen!2ssk"
                            class="container-fluid" width="100%" height="300" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>



                <div class="col-lg-6">
                    <h2 class="text-white">Send us a message</h2>
                    <form action="contactForm" method="post">
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
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-text"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="button-red button-custom">
                    </form>
                </div>
            </div>
        </div>

        <div id="delivery" class="container mt-5">
            <h1 class="text-center text-white border-custom border-radius-custom">Delivery Information</h1>
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="text-white">Delivery Services</h2>
                    <p class="text-white">We offer fast and reliable delivery services to ensure you receive your orders
                        promptly. Our delivery team works diligently to process and dispatch your items as quickly as
                        possible. You can track your order status and estimated delivery time through our online
                        platform. If you have any questions or concerns regarding your delivery, please contact our
                        customer service team for assistance.</p>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-white">Delivery Charges</h2>
                    <p class="text-white">Our delivery charges are calculated based on the weight and size of your
                        order, as
                        well as the delivery location. We offer competitive rates to ensure you receive the best value
                        for your money. You can view the delivery charges for your order during the checkout process
                        before making a payment. If you have any questions or need further information, please contact
                        our customer service team.</p>
                </div>

                <div class="col-lg-4">
                    <h2 class="text-white">Delivery Times</h2>
                    <p class="text-white">We aim to deliver your orders within the estimated delivery time provided
                        during
                        checkout. Our delivery times may vary depending on the delivery location and the availability
                        of the items in your order. You can track the status of your delivery through our online
                        platform and receive notifications on the estimated delivery time. If you have any questions or
                        concerns regarding your delivery, please contact our customer service team for assistance.</p>
                </div>
            </div>
        </div>

        <div id="about" class="container mt-5">
            <h1 class="text-center text-white border-custom border-radius-custom">About Us</h1>
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead text-center text-white">We are a team of passionate individuals dedicated to creating
                        the
                        best
                        experiences for our customers.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-white">Our Mission</h2>
                    <p class="text-white">At BombaShop, our mission is to empower tech enthusiasts and professionals by
                        providing a wide
                        range of high-quality PC components and accessories. We strive to offer the best products at
                        competitive prices, backed by exceptional customer service. Our goal is to help our
                        customers
                        build their dream PCs that meet their unique needs and preferences</p>
                </div>

                <div class="col-lg-6">
                    <h2 class="text-white">Our Vision</h2>
                    <p class="text-white">Our vision is to become the go-to online shop for PC components and
                        accessories,
                        recognized for
                        our product variety, quality, and customer satisfaction. We aim to continuously adapt and
                        grow
                        with the ever-evolving tech industry, ensuring we offer the latest and most efficient
                        products.
                        Through our commitment to excellence and innovation, we envision BombaShop as a trusted name
                        in
                        the global PC market.</p>
                </div>
            </div>
        </div>
    </main>
</x-layout>