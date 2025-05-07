@extends('layouts.app',["hideSearch" => true]);

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>

    <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Web development is the process of creating and maintaining websites or web applications that run on the internet. It involves everything from building a simple static page to complex dynamic web apps, e-commerce platforms, and content management systems.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">SEO Optimization</h5>
                    <p class="card-text">SEO Optimization (Search Engine Optimization) is the process of improving your website so that it ranks higher in search engine results (like Google), making it easier for people to find your site organically (without paid ads).</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Graphic Design</h5>
                    <p class="card-text">Graphic design is the art and practice of creating visual content to communicate messages. It combines images, typography, colors, and layout techniques to convey information, build brands, or inspire audiences—both in print and digital formats.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
