<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="https://www.creativefabrica.com/wp-content/uploads/2021/11/27/PG-logo-design-vector-Graphics-20833278-1-1-580x386.jpg" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/contact-us')); ?>">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('services')); ?>">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('images')); ?>">Images</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Sign In</a></li>


               
            </ul>
        </div>
    </div>
</nav>





<?php /**PATH C:\xampp\htdocs\PG-Patment-Application\resources\views/partials/header.blade.php ENDPATH**/ ?>