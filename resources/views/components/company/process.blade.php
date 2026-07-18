@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/process-page.css') }}">
@endpush

@section('content')

<!-- =====================================
     PROCESS HERO
====================================== -->

<section class="process-hero">

    <div class="process-overlay"></div>

    <div class="container position-relative">

        <div class="row align-items-center min-vh-75">

            <!-- Left Content -->
            <div class="col-lg-7">

                <span class="section-label">
                    Our Process
                </span>

                <h1>
                    A Proven Technology Delivery Process
                    <span>Built Around Your Success</span>
                </h1>

                <p>
                    Every successful technology project begins with a clear
                    strategy and a disciplined execution plan. At Emmanex IT
                    Consult, we follow a collaborative, transparent, and
                    results-driven methodology that transforms ideas into
                    reliable digital solutions while keeping our clients
                    involved every step of the way.
                </p>

                <div class="hero-buttons">

                    <a href="#delivery-process" class="btn-primary-custom">
                        Explore Our Process
                        <i class="bi bi-arrow-down"></i>
                    </a>

                    <a href="{{ route('contact') }}" class="btn-outline-light-custom">
                        Start a Conversation
                    </a>

                </div>

            </div>

            <!-- Right Image -->
            <div class="col-lg-5">

                <div class="process-hero-image">

                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1400&q=80"
                        alt="Technology Strategy Meeting">

                    <div class="floating-process-card">

                        <i class="bi bi-diagram-3-fill"></i>

                        <div>

                            <h5>Structured Delivery</h5>

                            <p>
                                Strategy • Design • Build • Deploy • Support
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    OUR DELIVERY FRAMEWORK
==========================================-->

<section class="delivery-framework" id="delivery-process">

    <div class="container">

        <div class="section-heading text-center mb-5">

            <span class="section-label">
                Our Delivery Framework
            </span>

            <h2>
                A Proven Process For Successful Digital Transformation
            </h2>

            <p>
                Every engagement follows a structured methodology that minimizes
                risk, promotes collaboration, and ensures measurable business
                outcomes from concept to deployment and beyond.
            </p>

        </div>

        <div class="process-grid">

            <!-- 1 -->

            <div class="process-card">

                <span class="process-number">01</span>

                <div class="process-icon">
                    <i class="bi bi-search"></i>
                </div>

                <h4>Discovery</h4>

                <p>
                    We identify business goals, challenges, stakeholders,
                    opportunities, and project requirements.
                </p>

                <ul>
                    <li>Requirements Gathering</li>
                    <li>Business Analysis</li>
                    <li>Stakeholder Meetings</li>
                </ul>

            </div>

            <!-- 2 -->

            <div class="process-card">

                <span class="process-number">02</span>

                <div class="process-icon">
                    <i class="bi bi-map"></i>
                </div>

                <h4>Planning</h4>

                <p>
                    We define project scope, timelines, milestones,
                    architecture, and delivery strategy.
                </p>

                <ul>
                    <li>Roadmap</li>
                    <li>Architecture</li>
                    <li>Project Schedule</li>
                </ul>

            </div>

            <!-- 3 -->

            <div class="process-card">

                <span class="process-number">03</span>

                <div class="process-icon">
                    <i class="bi bi-vector-pen"></i>
                </div>

                <h4>Design</h4>

                <p>
                    User experience, interface design, workflows,
                    prototypes, and technical modelling.
                </p>

                <ul>
                    <li>UI / UX</li>
                    <li>Wireframes</li>
                    <li>Prototype</li>
                </ul>

            </div>

            <!-- 4 -->

            <div class="process-card">

                <span class="process-number">04</span>

                <div class="process-icon">
                    <i class="bi bi-code-slash"></i>
                </div>

                <h4>Development</h4>

                <p>
                    Secure and scalable development using modern
                    technologies and coding standards.
                </p>

                <ul>
                    <li>Backend</li>
                    <li>Frontend</li>
                    <li>API Integration</li>
                </ul>

            </div>

            <!-- 5 -->

            <div class="process-card">

                <span class="process-number">05</span>

                <div class="process-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <h4>Testing & Deployment</h4>

                <p>
                    Functional testing, security validation,
                    optimization, and production deployment.
                </p>

                <ul>
                    <li>QA Testing</li>
                    <li>Performance</li>
                    <li>Deployment</li>
                </ul>

            </div>

            <!-- 6 -->

            <div class="process-card">

                <span class="process-number">06</span>

                <div class="process-icon">
                    <i class="bi bi-headset"></i>
                </div>

                <h4>Support</h4>

                <p>
                    Continuous monitoring, optimization,
                    maintenance, upgrades, and technical support.
                </p>

                <ul>
                    <li>Monitoring</li>
                    <li>Maintenance</li>
                    <li>Continuous Improvement</li>
                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     WHY OUR PROCESS WORKS
=========================================== -->

<section class="process-benefits">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                Why It Works
            </span>

            <h2>
                Built Around Results, Not Assumptions
            </h2>

            <p>
                Our methodology combines technical expertise with business
                strategy, ensuring every project is delivered on time,
                within scope, and aligned with your organizational goals.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>

                    <h4>Transparent Communication</h4>

                    <p>
                        Regular updates, milestone reviews, and clear
                        reporting keep every stakeholder informed.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        <i class="bi bi-award"></i>
                    </div>

                    <h4>Quality Delivery</h4>

                    <p>
                        Every solution is tested for performance,
                        reliability, security, and scalability before launch.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h4>Client Collaboration</h4>

                    <p>
                        We work as an extension of your team throughout the
                        engagement to ensure expectations are exceeded.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <h4>Future-Ready Solutions</h4>

                    <p>
                        Our solutions are designed to scale with your
                        organization as technology and business needs evolve.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     QUALITY ASSURANCE
=========================================== -->

<section class="quality-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                    src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80"
                    class="img-fluid rounded-4 shadow-lg"
                    alt="Quality Assurance">

            </div>

            <div class="col-lg-6">

                <span class="section-label">
                    Beyond Project Delivery
                </span>

                <h2 class="service-title">

                    Quality Assurance & Long-Term Support

                </h2>

                <p class="service-description">

                    Delivering your solution is only the beginning of our
                    partnership. We remain committed to ensuring your systems
                    continue to perform reliably, securely, and efficiently
                    long after deployment.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Comprehensive Quality Assurance
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Security & Performance Testing
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        User Documentation
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Staff Training
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Preventive Maintenance
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Ongoing Technical Support
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection