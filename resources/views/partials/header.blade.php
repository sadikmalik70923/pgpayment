<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://www.creativefabrica.com/wp-content/uploads/2021/11/27/PG-logo-design-vector-Graphics-20833278-1-1-580x386.jpg" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('images') }}">Images</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign In</a></li>


               
            </ul>
        </div>
    </div>
</nav>



{{-- @if (!$hideSearch)
    <div class="container my-4">
        <form action="{{ url('/search') }}" method="GET">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search here...">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
@endif --}}

