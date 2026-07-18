@extends('layouts.app')

@section('content')

<!-- ===========================
     SERVICES HERO
============================ -->

<section class="services-hero">

    <div class="services-hero-overlay"></div>

    <div class="container position-relative">

        <div class="row align-items-center min-vh-75">

            <!-- Left Content -->
            <div class="col-lg-7">

                <span class="section-label">
                    Our Services
                </span>

                <h1>
                    Innovative IT Services That
                    <span>Drive Business Growth</span>
                </h1>

                <p>
                    At Emmanex IT Consult, we partner with organizations to
                    design, build, secure, and manage technology solutions that
                    improve efficiency, enhance customer experiences, and support
                    long-term business success.
                </p>

                <div class="hero-buttons">

                    <a href="#services-navigation" class="btn-primary-custom">
                        Explore Our Services
                        <i class="bi bi-arrow-down"></i>
                    </a>

                    <a href="#" class="btn-outline-light-custom">
                        Talk To Our Experts
                    </a>

                </div>

            </div>

            <!-- Right Image -->
            <div class="col-lg-5">

                <div class="services-hero-image">

                    <img
                        src="{{ asset('assets/images/services/services-01.jpg') }}"
                        alt="Enterprise IT Services">

                    <!-- Floating Card -->
                    <div class="hero-floating-card">

                        <i class="bi bi-diagram-3-fill"></i>

                        <div>

                            <h5>End-to-End IT Solutions</h5>

                            <p>Software • Cloud • Security • Infrastructure</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================
     SERVICES QUICK NAVIGATION
========================================== -->

<section class="services-nav-wrapper" id="services-navigation">

    <div class="container">

        <div class="services-nav">

            <a href="#software-development" class="service-nav-item active">
                <i class="bi bi-code-slash"></i>
                <span>Software</span>
            </a>

            <a href="#web-development" class="service-nav-item">
                <i class="bi bi-window"></i>
                <span>Web</span>
            </a>

            <a href="#mobile-development" class="service-nav-item">
                <i class="bi bi-phone"></i>
                <span>Mobile</span>
            </a>

            <a href="#cloud-solutions" class="service-nav-item">
                <i class="bi bi-cloud"></i>
                <span>Cloud</span>
            </a>

            <a href="#networking" class="service-nav-item">
                <i class="bi bi-diagram-3"></i>
                <span>Networking</span>
            </a>

            <a href="#cybersecurity" class="service-nav-item">
                <i class="bi bi-shield-lock"></i>
                <span>Security</span>
            </a>

        </div>

    </div>

</section>

<!-- ======================================
     SERVICES INTRODUCTION
======================================= -->

<section class="services-intro">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT -->
            <div class="col-lg-5">

                <span class="section-label">
                    What We Deliver
                </span>

                <h2 class="intro-title">
                    Comprehensive Technology Services Built Around Your Business
                </h2>

                <p class="intro-text">

                    At Emmanex IT Consult, we understand that every organization
                    has unique technology needs. Rather than offering one-size-fits-all
                    solutions, we design and implement IT strategies tailored to your
                    goals, helping you improve efficiency, strengthen security, and
                    accelerate digital transformation.

                </p>

                <p class="intro-text">

                    Whether you're launching a new digital product, modernizing your
                    infrastructure, migrating to the cloud, or protecting critical
                    business assets, our experienced team is committed to delivering
                    reliable, scalable, and future-ready solutions.

                </p>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-7">

                <div class="row g-4">

                    <div class="col-md-6">

                        <div class="capability-card">

                            <div class="capability-icon">
                                <i class="bi bi-code-square"></i>
                            </div>

                            <h4>Software Engineering</h4>

                            <p>
                                Custom enterprise software that automates
                                business processes and improves productivity.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="capability-card">

                            <div class="capability-icon">
                                <i class="bi bi-cloud-arrow-up"></i>
                            </div>

                            <h4>Cloud Services</h4>

                            <p>
                                Modern cloud infrastructure designed for
                                flexibility, security, and business continuity.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="capability-card">

                            <div class="capability-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>

                            <h4>Networking</h4>

                            <p>
                                Reliable network infrastructure that keeps
                                your teams connected and productive.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="capability-card">

                            <div class="capability-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>

                            <h4>Cybersecurity</h4>

                            <p>
                                Protecting your business with proactive
                                security strategies and modern defense solutions.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     SOFTWARE DEVELOPMENT
=================================================== -->

<section class="service-showcase" id="software-development">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/software.jpg') }}"
                        alt="Software Development">

                    <div class="service-number">

                        01

                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">
                    Software Development
                </span>

                <h2 class="service-title">

                    Custom Software Built Around Your Business

                </h2>

                <p class="service-description">

                    Every organization operates differently. That's why we
                    develop secure, scalable, and user-friendly software
                    solutions tailored to your workflows, operational
                    requirements, and long-term business objectives.

                </p>

                <p class="service-description">

                    From enterprise management platforms to customer portals
                    and industry-specific applications, our development team
                    delivers solutions that improve efficiency, automate
                    repetitive tasks, and support sustainable growth.

                </p>

                <div class="service-features">

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        Enterprise Management Systems

                    </div>

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        Customer Relationship Management (CRM)

                    </div>

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        School & Hospital Management Systems

                    </div>

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        Inventory & POS Applications

                    </div>

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        API Development & Integration

                    </div>

                    <div class="feature">

                        <i class="bi bi-check-circle-fill"></i>

                        Business Process Automation

                    </div>

                </div>

                <div class="technology-stack">

                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>ASP.NET</span>
                    <span>Java</span>
                    <span>MySQL</span>
                    <span>REST API</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Request Consultation

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     WEB DEVELOPMENT
=================================================== -->

<section class="service-showcase service-showcase-alt" id="web-development">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6 order-lg-1 order-2">

                <span class="section-label">
                    Web Development
                </span>

                <h2 class="service-title">

                    Modern Websites & Web Applications That Deliver Results

                </h2>

                <p class="service-description">

                    Your website is often the first interaction customers have
                    with your business. We design and develop responsive,
                    high-performance websites and web applications that provide
                    exceptional user experiences while supporting your business
                    objectives.

                </p>

                <p class="service-description">

                    Whether you need a corporate website, customer portal,
                    eCommerce platform, booking system, or enterprise web
                    application, we build secure, scalable, and future-ready
                    solutions.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Corporate Websites
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        eCommerce Platforms
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Customer Portals
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Booking & Reservation Systems
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        CMS Development
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Progressive Web Applications (PWA)
                    </div>

                </div>

                <div class="technology-stack">

                    <span>Laravel</span>
                    <span>WordPress</span>
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Start Your Project

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6 order-lg-2 order-1">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/web-dev.jpg') }}"
                        alt="Web Development">

                    <div class="service-number">
                        02
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     MOBILE APP DEVELOPMENT
=================================================== -->

<section class="service-showcase" id="mobile-development">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->
            <div class="col-lg-6">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/mobile-app.jpg') }}"
                        alt="Mobile App Development">

                    <div class="service-number">
                        03
                    </div>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">

                <span class="section-label">
                    Mobile App Development
                </span>

                <h2 class="service-title">

                    Powerful Mobile Experiences For Android & iOS

                </h2>

                <p class="service-description">

                    Mobile applications have become essential for customer
                    engagement and workforce productivity. We design and build
                    intuitive, secure, and high-performance mobile applications
                    that help organizations stay connected with customers and
                    employees wherever they are.

                </p>

                <p class="service-description">

                    From business productivity tools and customer-facing apps
                    to enterprise mobility solutions, our applications are
                    engineered for speed, scalability, and seamless user
                    experiences across devices.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Android Applications
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        iOS Applications
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Cross-Platform Apps
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Enterprise Mobile Solutions
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        API Integration
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        App Maintenance & Support
                    </div>

                </div>

                <div class="technology-stack">

                    <span>Flutter</span>
                    <span>React Native</span>
                    <span>Kotlin</span>
                    <span>Swift</span>
                    <span>Firebase</span>
                    <span>REST API</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Build Your Mobile App

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     CLOUD SOLUTIONS
=================================================== -->

<section class="service-showcase service-showcase-alt" id="cloud-solutions">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6 order-lg-1 order-2">

                <span class="section-label">
                    Cloud Solutions
                </span>

                <h2 class="service-title">

                    Modern Cloud Infrastructure That Enables Growth

                </h2>

                <p class="service-description">

                    Cloud technology empowers organizations to become more agile,
                    collaborative, and resilient. We help businesses migrate,
                    optimize, and manage cloud environments that reduce
                    infrastructure costs while improving security, scalability,
                    and operational efficiency.

                </p>

                <p class="service-description">

                    Whether you're adopting Microsoft 365, migrating workloads,
                    implementing backup strategies, or building a hybrid cloud
                    environment, Emmanex IT Consult provides expert guidance from
                    planning through deployment and ongoing support.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Cloud Migration
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Microsoft 365 Deployment
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Google Workspace Setup
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Hybrid Cloud Infrastructure
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Backup & Disaster Recovery
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Cloud Monitoring & Optimization
                    </div>

                </div>

                <div class="technology-stack">

                    <span>Microsoft Azure</span>
                    <span>AWS</span>
                    <span>Google Cloud</span>
                    <span>Microsoft 365</span>
                    <span>Google Workspace</span>
                    <span>VMware</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Move To The Cloud

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6 order-lg-2 order-1">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/cloud-dev.jpg') }}"
                        alt="Cloud Solutions">

                    <div class="service-number">
                        04
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     NETWORKING
=================================================== -->

<section class="service-showcase" id="networking">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/networking.jpg') }}"
                        alt="Networking">

                    <div class="service-number">
                        05
                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">
                    Networking
                </span>

                <h2 class="service-title">

                    Reliable Network Infrastructure That Keeps Your Business Connected

                </h2>

                <p class="service-description">

                    A robust network is the backbone of every modern organization.
                    We design, deploy, and support secure network infrastructures
                    that provide high availability, optimal performance, and room
                    for future expansion.

                </p>

                <p class="service-description">

                    From office networks to multi-site connectivity, wireless
                    deployments, structured cabling, and VPN solutions, we ensure
                    your people and systems stay connected securely and efficiently.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        LAN & WAN Design
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Structured Cabling
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Wireless Network Deployment
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        VPN Configuration
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Network Monitoring
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Enterprise Infrastructure Support
                    </div>

                </div>

                <div class="technology-stack">

                    <span>Cisco</span>
                    <span>MikroTik</span>
                    <span>Ubiquiti</span>
                    <span>Fortinet</span>
                    <span>TP-Link Omada</span>
                    <span>VPN</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Upgrade Your Network

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==================================================
     CYBERSECURITY
=================================================== -->

<section class="service-showcase service-showcase-alt" id="cybersecurity">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6 order-lg-1 order-2">

                <span class="section-label">
                    Cybersecurity
                </span>

                <h2 class="service-title">

                    Protecting Your Business Against Evolving Cyber Threats

                </h2>

                <p class="service-description">

                    Cyber threats continue to evolve, making proactive security
                    essential for every organization. We implement layered
                    security strategies that safeguard your systems, data,
                    employees, and customers.

                </p>

                <p class="service-description">

                    Our cybersecurity services combine technology, processes,
                    and user awareness to reduce risk, strengthen compliance,
                    and improve resilience against modern cyber attacks.

                </p>

                <div class="service-features">

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Firewall Deployment
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Endpoint Protection
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Vulnerability Assessments
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Email Security
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Security Awareness Training
                    </div>

                    <div class="feature">
                        <i class="bi bi-check-circle-fill"></i>
                        Incident Response Planning
                    </div>

                </div>

                <div class="technology-stack">

                    <span>Fortinet</span>
                    <span>Microsoft Defender</span>
                    <span>CrowdStrike</span>
                    <span>Bitdefender</span>
                    <span>Cloudflare</span>
                    <span>Zero Trust</span>

                </div>

                <a href="{{ route('contact') }}" class="btn-primary-custom">

                    Strengthen Your Security

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6 order-lg-2 order-1">

                <div class="service-image">

                    <img
                        src="{{ asset('assets/images/services/cyber-security.jpg') }}"
                        alt="Cybersecurity">

                    <div class="service-number">
                        06
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection