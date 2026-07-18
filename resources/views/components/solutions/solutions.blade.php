@extends('layouts.app')

@section('content')

<!--=========================================
    HERO SECTION
==========================================-->

<section class="solutions-hero">

    <div class="hero-pattern"></div>

    <div class="container position-relative">

        <div class="row align-items-center min-vh-75">

            <!-- LEFT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Enterprise Solutions

                </span>

                <h1>

                    Smart Digital Solutions

                    <span>Built For Modern Organizations</span>

                </h1>

                <p>

                    Emmanex IT Consult develops secure, scalable, and
                    industry-focused digital solutions that help educational
                    institutions, businesses, and healthcare providers improve
                    efficiency, automate operations, and accelerate digital
                    transformation.

                </p>

                <div class="hero-buttons">

                    <a href="#solutions-overview" class="btn-primary-custom">

                        Explore Solutions

                    </a>

                    <a href="{{ route('contact') }}" class="btn-outline-light-custom">

                        Request Consultation

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-6">

                <div class="solutions-hero-image">

                    <img
                        src="{{asset('assets/images/solutions/s-01.jpg')}}"
                        alt="Enterprise Solutions">

                    <div class="floating-solution-card">

                        <i class="bi bi-grid-1x2-fill"></i>

                        <div>

                            <h5>Industry Solutions</h5>

                            <span>
                                Education • Business • Healthcare
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    SOLUTIONS OVERVIEW
==========================================-->

<section class="solutions-overview" id="solutions-overview">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                Solutions Overview
            </span>

            <h2>

                Technology Solutions Designed For Every Stage Of Your Growth

            </h2>

            <p>

                Whether you're an educational institution looking to modernize
                learning or a business seeking operational efficiency, our
                industry-focused solutions are built to simplify processes,
                improve productivity, and support long-term growth.

            </p>

        </div>

        <div class="row g-4 mt-5">

            <!-- Education -->

            <div class="col-lg-6">

                <div class="solution-category-card">

                    <div class="category-icon">

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                    <h3>

                        Education Solutions

                    </h3>

                    <p>

                        Empower schools, colleges, universities, and training
                        institutions with digital platforms that simplify
                        administration, improve learning experiences, and
                        streamline assessments.

                    </p>

                    <ul>

                        <li>
                            <a href="#school-management">
                                <i class="bi bi-arrow-right"></i>
                                School Management System
                            </a>
                        </li>

                        <li>
                            <a href="#cbt-platform">
                                <i class="bi bi-arrow-right"></i>
                                CBT Platform
                            </a>
                        </li>

                        <li>
                            <a href="#elearning-portal">
                                <i class="bi bi-arrow-right"></i>
                                E-Learning Portal
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Business -->

            <div class="col-lg-6">

                <div class="solution-category-card">

                    <div class="category-icon business">

                        <i class="bi bi-building-fill-gear"></i>

                    </div>

                    <h3>

                        Business Solutions

                    </h3>

                    <p>

                        Transform business operations with integrated systems
                        that automate workflows, improve decision-making, and
                        enhance organizational productivity.

                    </p>

                    <ul>

                        <li>
                            <a href="#pos-inventory">
                                <i class="bi bi-arrow-right"></i>
                                POS & Inventory Management
                            </a>
                        </li>

                        <li>
                            <a href="#erp-solutions">
                                <i class="bi bi-arrow-right"></i>
                                ERP Solutions
                            </a>
                        </li>

                        <li>
                            <a href="#hospital-management">
                                <i class="bi bi-arrow-right"></i>
                                Hospital Management System
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    SCHOOL MANAGEMENT SYSTEM
==========================================-->

<section class="solution-section" id="school-management">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/sm.jpg')}}"
                        alt="School Management System">

                    <div class="solution-badge">

                        <i class="bi bi-mortarboard-fill"></i>

                        Education Solution

                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Education Solutions

                </span>

                <h2 class="solution-title">

                    School Management System

                </h2>

                <p class="solution-description">

                    Simplify school administration with an integrated platform
                    designed to manage academic, financial, and administrative
                    processes from a single dashboard. Our School Management
                    System helps institutions improve efficiency, enhance
                    communication, and deliver a better experience for students,
                    parents, teachers, and administrators.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Student Information Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Online Admissions & Enrollment
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Attendance Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Examination & Result Processing
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Fee & Payment Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Parent & Student Portal
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Staff & Payroll Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Reports & Analytics
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}" class="btn-primary-custom">

                        Request a Demo

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    CBT PLATFORM
==========================================-->

<section class="solution-section bg-light" id="cbt-platform">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Education Solutions

                </span>

                <h2 class="solution-title">

                    Computer-Based Testing (CBT) Platform

                </h2>

                <p class="solution-description">

                    Deliver secure, reliable, and scalable online examinations
                    with our advanced CBT Platform. Designed for schools,
                    universities, professional certification bodies, and
                    corporate training providers, the platform simplifies exam
                    administration while providing a seamless experience for
                    candidates and administrators.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Online Examination Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Randomized Question Bank
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Automatic Result Processing
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Secure Candidate Authentication
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Timer & Auto Submission
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Detailed Analytics & Reports
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Multi-Campus Support
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Role-Based Administration
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}" class="btn-primary-custom">

                        Request a Demo

                    </a>

                </div>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/cbt.jpg')}}"
                        alt="Computer Based Testing Platform">

                    <div class="solution-badge">

                        <i class="bi bi-laptop"></i>

                        Digital Assessment

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    E-LEARNING PORTAL
==========================================-->

<section class="solution-section" id="elearning-portal">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/elearn.jpg')}}"
                        alt="E-Learning Portal">

                    <div class="solution-badge">

                        <i class="bi bi-journal-richtext"></i>

                        Digital Learning

                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Education Solutions

                </span>

                <h2 class="solution-title">

                    E-Learning Portal

                </h2>

                <p class="solution-description">

                    Create engaging digital learning experiences with a modern
                    Learning Management System (LMS) designed for schools,
                    universities, training institutions, and corporate learning
                    environments. Our E-Learning Portal enables organizations
                    to deliver courses anytime, anywhere, while tracking learner
                    progress and improving knowledge retention.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Course Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Video Lessons & Live Classes
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Assignment & Quiz Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Student Progress Tracking
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Learning Analytics Dashboard
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Certificates of Completion
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Mobile-Friendly Learning
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Discussion Forums & Messaging
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}" class="btn-primary-custom">

                        Request a Demo

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    POS & INVENTORY MANAGEMENT
==========================================-->

<section class="solution-section bg-light" id="pos-inventory">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Business Solutions

                </span>

                <h2 class="solution-title">

                    POS & Inventory Management System

                </h2>

                <p class="solution-description">

                    Streamline your retail and inventory operations with an
                    intelligent Point of Sale and Inventory Management solution.
                    Designed for retailers, supermarkets, pharmacies,
                    restaurants, warehouses, and multi-branch businesses, our
                    platform provides real-time visibility into sales, stock
                    levels, customer transactions, and business performance.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Fast Point of Sale (POS)
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Inventory & Stock Control
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Barcode & Label Printing
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Multi-Store Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Customer & Loyalty Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Purchase & Supplier Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Sales Reports & Business Analytics
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Role-Based User Access
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}"
                       class="btn-primary-custom">

                        Schedule a Demo

                    </a>

                </div>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/pos.jpg')}}"
                        alt="POS and Inventory Management">

                    <div class="solution-badge">

                        <i class="bi bi-shop"></i>

                        Retail Technology

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    ERP SOLUTIONS
==========================================-->

<section class="solution-section" id="erp-solutions">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/erp.jpg')}}"
                        alt="ERP Solutions">

                    <div class="solution-badge">

                        <i class="bi bi-diagram-3-fill"></i>

                        Enterprise Platform

                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Business Solutions

                </span>

                <h2 class="solution-title">

                    Enterprise Resource Planning (ERP)

                </h2>

                <p class="solution-description">

                    Integrate every aspect of your business into a single,
                    centralized platform. Our ERP solution connects finance,
                    human resources, procurement, inventory, customer
                    relationships, and operations, providing real-time insights
                    that improve efficiency, collaboration, and strategic
                    decision-making across your organization.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Finance & Accounting
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Human Resource Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Payroll Processing
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Procurement Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Inventory & Warehouse Control
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Customer Relationship Management (CRM)
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Executive Dashboards & Reports
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Multi-Branch & Multi-Company Support
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}"
                       class="btn-primary-custom">

                        Talk to Our ERP Experts

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    HOSPITAL MANAGEMENT SYSTEM
==========================================-->

<section class="solution-section bg-light" id="hospital-management">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">

                    Healthcare Solutions

                </span>

                <h2 class="solution-title">

                    Hospital Management System

                </h2>

                <p class="solution-description">

                    Modernize healthcare delivery with a comprehensive Hospital
                    Management System designed to streamline clinical,
                    administrative, and financial operations. From patient
                    registration to billing and medical records, our solution
                    enables healthcare providers to deliver faster, more
                    efficient, and patient-centered care.

                </p>

                <div class="solution-features">

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Patient Registration & Electronic Medical Records (EMR)
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Appointment Scheduling
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Doctor & Staff Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Pharmacy Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Laboratory & Diagnostic Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Inpatient, Ward & Bed Management
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Billing, Payments & Insurance Processing
                    </div>

                    <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Reports, Analytics & Management Dashboard
                    </div>

                </div>

                <div class="solution-actions mt-4">

                    <a href="{{ route('contact') }}"
                       class="btn-primary-custom">

                        Request a Consultation

                    </a>

                </div>

            </div>

            <!-- IMAGE -->

            <div class="col-lg-6">

                <div class="solution-image">

                    <img
                        src="{{asset('assets/images/solutions/hp.jpg')}}"
                        alt="Hospital Management System">

                    <div class="solution-badge">

                        <i class="bi bi-hospital-fill"></i>

                        Healthcare Technology

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    IMPLEMENTATION JOURNEY
==========================================-->

<section class="implementation-process">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">

                Implementation Journey

            </span>

            <h2>

                A Proven Framework For Successful Digital Transformation

            </h2>

            <p>

                Every solution we deploy follows a structured methodology that
                ensures smooth implementation, user adoption, and long-term
                business success.

            </p>

        </div>

        <div class="journey-wrapper">

            <!-- Step 1 -->

            <div class="journey-step left">

                <div class="journey-card">

                    <span>01</span>

                    <i class="bi bi-search"></i>

                    <h4>Discovery</h4>

                    <p>

                        We assess your current processes, identify challenges,
                        and define measurable project objectives.

                    </p>

                </div>

            </div>

            <!-- Step 2 -->

            <div class="journey-step right">

                <div class="journey-card">

                    <span>02</span>

                    <i class="bi bi-vector-pen"></i>

                    <h4>Solution Design</h4>

                    <p>

                        Our specialists design an architecture tailored to your
                        organization and future growth.

                    </p>

                </div>

            </div>

            <!-- Step 3 -->

            <div class="journey-step left">

                <div class="journey-card">

                    <span>03</span>

                    <i class="bi bi-code-slash"></i>

                    <h4>Development</h4>

                    <p>

                        We build, configure and integrate your solution using
                        modern technologies and industry best practices.

                    </p>

                </div>

            </div>

            <!-- Step 4 -->

            <div class="journey-step right">

                <div class="journey-card">

                    <span>04</span>

                    <i class="bi bi-cloud-upload"></i>

                    <h4>Deployment</h4>

                    <p>

                        After testing and validation, your solution is deployed
                        with minimal disruption to your operations.

                    </p>

                </div>

            </div>

            <!-- Step 5 -->

            <div class="journey-step left">

                <div class="journey-card">

                    <span>05</span>

                    <i class="bi bi-mortarboard"></i>

                    <h4>User Training</h4>

                    <p>

                        We provide hands-on training to ensure your team is
                        confident using the new solution.

                    </p>

                </div>

            </div>

            <!-- Step 6 -->

            <div class="journey-step right">

                <div class="journey-card">

                    <span>06</span>

                    <i class="bi bi-headset"></i>

                    <h4>Continuous Support</h4>

                    <p>

                        Our partnership continues with proactive maintenance,
                        updates and technical support.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    INDUSTRIES WE SERVE
==========================================-->

<section class="industries-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">

                Industries We Serve

            </span>

            <h2>

                Technology Solutions Tailored For Every Industry

            </h2>

            <p>

                Every industry faces unique operational challenges. We build
                secure, scalable, and intelligent digital solutions that help
                organizations streamline processes, improve efficiency, and
                accelerate growth.

            </p>

        </div>

        <div class="row g-4 mt-5">

            <!-- Education -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                    <h4>Education</h4>

                    <p>

                        Digital solutions for schools, colleges,
                        universities, and training institutions.

                    </p>

                </div>

            </div>

            <!-- Healthcare -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-heart-pulse-fill"></i>

                    </div>

                    <h4>Healthcare</h4>

                    <p>

                        Smart healthcare systems that improve patient
                        care and operational efficiency.

                    </p>

                </div>

            </div>

            <!-- Retail -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-shop"></i>

                    </div>

                    <h4>Retail & Commerce</h4>

                    <p>

                        POS, inventory, customer management,
                        and business intelligence solutions.

                    </p>

                </div>

            </div>

            <!-- Government -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-bank"></i>

                    </div>

                    <h4>Government</h4>

                    <p>

                        Secure digital platforms that enhance
                        service delivery and transparency.

                    </p>

                </div>

            </div>

            <!-- Finance -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-cash-stack"></i>

                    </div>

                    <h4>Financial Services</h4>

                    <p>

                        Enterprise applications supporting
                        finance, reporting, compliance,
                        and automation.

                    </p>

                </div>

            </div>

            <!-- Manufacturing -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-gear-wide-connected"></i>

                    </div>

                    <h4>Manufacturing</h4>

                    <p>

                        ERP, inventory, production monitoring,
                        and supply chain optimization.

                    </p>

                </div>

            </div>

            <!-- Hospitality -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-building"></i>

                    </div>

                    <h4>Hospitality</h4>

                    <p>

                        Hotel management, reservations,
                        billing, and guest experience solutions.

                    </p>

                </div>

            </div>

            <!-- NGOs -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-globe2"></i>

                    </div>

                    <h4>NGOs & Non-Profits</h4>

                    <p>

                        Membership, donor management,
                        reporting, and impact tracking systems.

                    </p>

                </div>

            </div>

            <!-- Professional Services -->

            <div class="col-lg-4 col-md-6">

                <div class="industry-card">

                    <div class="industry-icon">

                        <i class="bi bi-briefcase-fill"></i>

                    </div>

                    <h4>Professional Services</h4>

                    <p>

                        Digital platforms that improve
                        collaboration, productivity,
                        and client engagement.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection