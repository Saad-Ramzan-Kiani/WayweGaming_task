@extends('layouts.layout')

@section('title', 'Home')

@section('content')

<style>
    :root {
        --primary-bg: #05A5D8;       /* PDF Requirement [cite: 12] */
        --btn-color: #DB6A9E;        /* PDF Requirement [cite: 13] */
        --secondary-bg: #FFF0F7;     /* PDF Requirement [cite: 14] */
        --text-color: #000000;       /* PDF Requirement [cite: 15] */
    }

    body {
        font-family: 'Poppins', sans-serif; /* Paragraphs [cite: 18] */
        color: var(--text-color);
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif; /* Headings [cite: 17] */
    }

    .bg-custom-primary { background-color: var(--primary-bg); }
    .bg-custom-secondary { background-color: var(--secondary-bg); }
    
    .btn-custom {
        background-color: var(--btn-color);
        color: white;
        border: none;
        transition: opacity 0.3s;
    }
    .btn-custom:hover { opacity: 0.9; color: white; }
</style>

<section class="bg-custom-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold mb-3 display-4">Professional Gaming Services</h1>
                <p class="mb-4 lead">
                    We provide high-quality gaming solutions designed to enhance player experience
                    and performance across all platforms.
                </p>
                <button class="btn btn-custom px-5 py-3 rounded-pill fw-bold" onclick="showMessage()">
                    Get Started
                </button>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="https://placehold.co/600x400/png?text=Gaming+Setup" class="img-fluid rounded shadow-lg" alt="Gaming Setup">
            </div>
        </div>
    </div>
</section>

<section class="py-4" style="background-color: #5D3A74; color: white;">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3">
                <h3 class="fw-bold">50K+</h3>
                <p class="small">Active Players</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold">97%</h3>
                <p class="small">Satisfaction</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold">120+</h3>
                <p class="small">Games Hosted</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold">25+</h3>
                <p class="small">Tournaments</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-custom-secondary">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-primary">Game Development</h5>
                        <p>Custom-built gaming experiences using modern technologies and frameworks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-primary">Game Testing</h5>
                        <p>Ensuring performance, stability, and bug-free gameplay for all users.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="card-body text-center">
                        <h5 class="fw-bold text-primary">Live Support</h5>
                        <p>24/7 monitoring and player support services to keep servers running.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/500x500/png?text=Why+Us" class="img-fluid rounded" alt="Why Choose Us">
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <h2 class="fw-bold mb-4">Why Choose Our Platform?</h2>
                <p>Unlike other providers, we focus on latency-free gaming and community building. Our infrastructure is designed to handle high loads without compromising quality.</p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2">✅ <strong>Low Latency Servers</strong> - Play without lag.</li>
                    <li class="mb-2">✅ <strong>Anti-Cheat Protection</strong> - Fair play guaranteed.</li>
                    <li class="mb-2">✅ <strong>Instant Setup</strong> - Get your server running in minutes.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-custom-secondary">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Recent Projects</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0">
                    <img src="https://placehold.co/600x300/png?text=RPG+Project" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="fw-bold">Fantasy RPG World</h5>
                        <p class="card-text">A massive multiplayer online role-playing game developed for a client.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0">
                    <img src="https://placehold.co/600x300/png?text=FPS+Project" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="fw-bold">Tactical Shooter Arena</h5>
                        <p class="card-text">High-fidelity first-person shooter with competitive ranking systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        How do I start a server?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Simply click "Get Started" in the hero section, choose your plan, and we will deploy it instantly.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        Do you offer DDoS protection?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, all our services come with enterprise-grade DDoS protection included.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        Can I upgrade my plan later?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely. You can scale your resources up or down at any time via the dashboard.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function showMessage() {
        alert('Service request submitted successfully! We will contact you soon.');
    }
</script>

@endsection
