@php($hideSearch = true)
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Image Gallery</h2>

    <div class="row">
        @forelse($images as $image)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $image }}" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
                </div>
            </div>
        @empty
            <p>No images found in the public/images folder.</p>
        @endforelse
    </div>
</div>
@endsection
