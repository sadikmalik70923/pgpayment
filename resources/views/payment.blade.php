@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container my-5">
    <h2 class="text-center mb-4">Choose Your Subscription Plan</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">3 Months</h5>
                    <p class="card-text display-6">$35</p>
                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">6 Months</h5>
                    <p class="card-text display-6">$70</p>
                    <button class="btn btn-success">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">12 Months</h5>
                    <p class="card-text display-6">$140</p>
                    <button class="btn btn-warning">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
