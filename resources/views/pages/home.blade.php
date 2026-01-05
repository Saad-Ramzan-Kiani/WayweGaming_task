@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="bg-primary-custom text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold mb-3">Next-Level Gaming Services</h1>
                <p class="mb-4">
                    We provide high-quality gaming solutions designed to enhance player experience
                    and performance across all platforms.
                </p>
                <button class="btn btn-primary-custom px-4 py-2" onclick="showMessage()">
                    Get Started
                </button>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/450x300" class="img-fluid rounded" alt="Gaming">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-secondary-custom">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Services</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="fw-bold">Game Development</h5>
                    <p>Custom-built gaming experiences using modern technologies.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="fw-bold">Game Testing</h5>
                    <p>Ensuring performance, stability, and bug-free gameplay.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="fw-bold">Live Support</h5>
                    <p>24/7 monitoring and player support services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function showMessage() {
        alert('Service request submitted successfully!');
    }
</script>

@endsection
