@extends('layouts.app', ["hideSearch" => true])

@section('content')
<div class="container my-5 content-section">
    <div class="row align-items-center mb-5">
        <!-- Left Column: Contact Info -->
        <div class="col-md-6 info-text">
            <h1>Find Your Perfect Stay — From Cozy PGs to Spacious Rentals</h1>
            <p>
                Welcome to <strong>[PG]</strong>, your one-stop destination for finding affordable and comfortable accommodations. 
                Whether you're a student, working professional, or a family, we make it easy to explore verified PGs and rental properties near you.
                Start your journey today — with trust, transparency, and tailored listings.
            </p>
        </div>

        <!-- Right Column: Image -->
        <div class="col-md-6 text-center">
            <img src="https://img.cofynd.com/images/original/d4dc46fefba7f045c0031cb375cc2957fb6a442d.jpg" 
                 alt="PG and Rental Homes" 
                 class="img-fluid rounded shadow homepage-image">
        </div>
    </div>

    <!-- PG Section -->
    <div class="pg-section mb-5">
        <h2>Affordable PGs for Students & Professionals</h2>
        <p>
            Looking for a hassle-free PG stay? We've got you covered. Discover PG accommodations in prime locations with amenities like meals, Wi-Fi, security, and more.
        </p>
        <ul>
            <li>✅ Verified Listings</li>
            <li>✅ Safe & Secure</li>
            <li>✅ Flexible Rent Options</li>
            <li>✅ Fully Furnished Rooms</li>
        </ul>
        <p><strong>Call to Action:</strong> View Available PGs | Contact for Booking</p>
    </div>

    <!-- Rental Section -->
    <div class="rental-section">
        <h2>Spacious Rental Properties That Feel Like Home</h2>
        <p>
            From 1BHK apartments to family-sized homes, browse a wide range of rental properties that fit your needs and budget. Our listings are updated regularly and verified by our team.
        </p>
        <ul>
            <li>📍 Multiple Locations</li>
            <li>🏠 Direct Owner & Broker Listings</li>
            <li>📊 Filter by Budget, Size, and Location</li>
            <li>🎥 Virtual Tours Available</li>
        </ul>
        <p><strong>Call to Action:</strong> Browse Rental Properties | Schedule a Visit</p>
    </div>
</div>
@endsection

@push('styles')
<style>
    .content-section {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .info-text h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .info-text p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .homepage-image {
        max-width: 100%;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
    }

    .pg-section, .rental-section {
        background-color: #f9f9f9;
        padding: 2rem;
        border-radius: 10px;
    }

    .pg-section h2, .rental-section h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .pg-section ul, .rental-section ul {
        padding-left: 1.2rem;
        margin-bottom: 1rem;
    }

    .pg-section li, .rental-section li {
        margin-bottom: 0.5rem;
        font-size: 1.05rem;
    }

    .pg-section p, .rental-section p {
        font-size: 1rem;
    }
</style>
@endpush
