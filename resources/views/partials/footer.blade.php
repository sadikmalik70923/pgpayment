<footer class="bg-light text-dark pt-5 pb-4 mt-5 border-top">
    <div class="container text-md-left">
        <div class="row">

            <!-- About Company -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">About Company</h5>
                <p>
                    We help people find the best PGs and rental homes tailored to their needs. Trusted by 1000+ users.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-dark text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-dark text-decoration-none">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-dark text-decoration-none">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-dark text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">PG Booking</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Room Rentals</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Tenant Support</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Contact Us</h5>
                <p><i class="bi bi-telephone-fill me-2"></i> +91 7017942821 , 7310532440</p>
                <p><i class="bi bi-envelope-fill me-2"></i> sadikmalik70923@gmail.com</p>
                <p><i class="bi bi-geo-alt-fill me-2"></i> H193, Lohia Rd, H Block, Sector 63, Noida, Uttar Pradesh 201301</p>
            </div>
        </div>

        <hr class="my-3">

        <div class="text-center">
            <small>© {{ date('Y') }} Sadik Malik. All rights reserved.</small>
        </div>
    </div>
</footer>
