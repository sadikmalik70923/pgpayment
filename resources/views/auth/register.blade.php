@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <!-- Your other fields remain the same... -->
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone No:</label>
            <input type="number" name="number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Permanent Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Aadhar No:</label>
            <input type="text" name="addhar_no" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>PAN No:</label>
            <input type="text" name="pan_no" class="form-control" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" title="Enter valid PAN number (e.g. ABCDE1234F)" required>
        </div>

        <div class="mb-3">
            <label>Rent Home Address:</label>
            <input type="text" name="rent_home_address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <!-- Camera Capture Section -->
        {{-- <div class="mb-3">
            <label>Selfie Capture:</label><br>
            <video id="camera" width="320" height="240" autoplay></video><br>
            <button type="button" id="capture" class="btn btn-sm btn-primary mt-2">Capture Selfie</button>
            <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
            <input type="hidden" name="selpi_image" id="selfieInput">
        </div> --}}

        <div class="mb-3">
            <label>Selfie Image:</label>
            <input type="file" name="selpi_image" class="form-control" accept="image/*" capture="user" required>
        </div>


        <button type="submit" class="btn btn-success">Proceed to Payment</button>
    </form>
</div>

<!-- Camera JS -->
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('camera');
        const canvas = document.getElementById('canvas');
        const selfieInput = document.getElementById('selfieInput');
        const captureButton = document.getElementById('capture');

        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => {
                alert("Camera not accessible. Please allow access.");
                console.error(err);
            });

        captureButton.addEventListener('click', () => {
            const context = canvas.getContext('2d');
            canvas.style.display = 'block';
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = canvas.toDataURL('image/png');
            selfieInput.value = imageData;
        });
    });
</script> --}}
@endsection
