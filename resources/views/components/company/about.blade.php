@extends('layouts.app')

@section('content')


<!-- ABOUT HERO SECTION -->
<section class="about-hero">

    <div class="about-hero-overlay"></div>

    <div class="container position-relative">

        <div class="row align-items-center min-vh-75">

            <!-- CONTENT -->
            <div class="col-lg-7">

                <div class="about-hero-content">

                    <span class="about-badge">
                        About Emmanex IT Consult
                    </span>


                    <h1>
                        Empowering Businesses Through 
                        <span>Innovative Technology Solutions</span>
                    </h1>


                    <p>
                        We help organizations leverage technology to improve 
                        operations, enhance customer experiences, and build 
                        scalable digital platforms that drive sustainable growth.
                    </p>


                    <div class="about-hero-buttons">

                        <a href="#company-overview" class="btn btn-primary-custom">
                            Discover More
                            <i class="bi bi-arrow-right"></i>
                        </a>


                        <a href="{{ url('/contact') }}" class="btn btn-outline-light-custom">
                            Talk To Our Experts
                        </a>

                    </div>


                </div>

            </div>


            <!-- IMAGE -->
            <div class="col-lg-5">

                <div class="about-hero-image-wrapper">

                    <img 
                        src="{{asset('assets/images/about/about-01.jpg')}}"
                        alt="IT professionals collaborating"
                        class="about-hero-image"
                    >


                    <div class="floating-card">

                        <div class="icon">
                            <i class="bi bi-cpu"></i>
                        </div>

                        <div>
                            <h5>
                                Digital Innovation
                            </h5>

                            <p>
                                Building smarter technology solutions
                            </p>
                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>

</section>

<!-- COMPANY OVERVIEW SECTION -->
<section class="company-overview" id="company-overview">

    <div class="container">

        <div class="row align-items-center g-5">


            <!-- IMAGE -->
            <div class="col-lg-6">

                <div class="overview-image-wrapper">

                    <img 
                    src="{{asset('assets/images/about/about-02.jpg')}}"
                    alt="Technology consulting team"
                    class="overview-image">


                    <div class="experience-box">

                        <h2>
                            10+
                        </h2>

                        <p>
                            Years of Technology Excellence
                        </p>

                    </div>


                </div>

            </div>



            <!-- CONTENT -->
            <div class="col-lg-6">


                <span class="section-label">
                    Who We Are
                </span>


                <h2 class="section-title">

                    Building Digital Solutions That Move Businesses Forward

                </h2>


                <p class="overview-text">

                    Emmanex IT Consult is a technology solutions company 
                    focused on helping businesses, institutions, and 
                    organizations maximize the power of digital innovation.

                </p>


                <p class="overview-text">

                    We specialize in software development, cloud solutions,
                    IT infrastructure, cybersecurity, and business automation.
                    Our team combines technical expertise with business
                    understanding to deliver reliable solutions that solve
                    real-world challenges.

                </p>



                <div class="overview-features">


                    <div class="feature-item">

                        <i class="bi bi-code-slash"></i>

                        <div>

                            <h5>
                                Software Engineering
                            </h5>

                            <p>
                                Scalable web and enterprise applications
                                designed around business needs.
                            </p>

                        </div>

                    </div>



                    <div class="feature-item">

                        <i class="bi bi-cloud-check"></i>

                        <div>

                            <h5>
                                Cloud & Infrastructure
                            </h5>

                            <p>
                                Secure, reliable, and optimized IT
                                environments for modern businesses.
                            </p>

                        </div>

                    </div>



                    <div class="feature-item">

                        <i class="bi bi-shield-check"></i>

                        <div>

                            <h5>
                                Technology Security
                            </h5>

                            <p>
                                Protecting business systems with
                                modern security practices.
                            </p>

                        </div>

                    </div>


                </div>


            </div>


        </div>


    </div>


</section>


<!-- MISSION VISION VALUES SECTION -->
<section class="mission-values">

    <div class="container">


        <!-- HEADER -->

        <div class="section-heading text-center">


            <span class="section-label">
                Our Foundation
            </span>


            <h2>
                Driven By Purpose, Innovation, And Excellence
            </h2>


            <p>
                Our approach is built around understanding business challenges,
                delivering meaningful technology solutions, and creating long-term
                value for our clients.
            </p>


        </div>



        <div class="row g-4 mt-5">



            <!-- MISSION -->

            <div class="col-lg-4 col-md-6">


                <div class="mv-card">


                    <div class="mv-icon">

                        <i class="bi bi-bullseye"></i>

                    </div>


                    <h4>
                        Our Mission
                    </h4>


                    <p>
                        To empower organizations with innovative technology
                        solutions that improve efficiency, productivity,
                        and business growth.
                    </p>


                </div>


            </div>




            <!-- VISION -->

            <div class="col-lg-4 col-md-6">


                <div class="mv-card featured">


                    <div class="mv-icon">

                        <i class="bi bi-eye"></i>

                    </div>


                    <h4>
                        Our Vision
                    </h4>


                    <p>
                        To become a trusted technology partner recognized for
                        delivering reliable, scalable, and transformative
                        digital solutions.
                    </p>


                </div>


            </div>




            <!-- VALUES -->

            <div class="col-lg-4 col-md-12">


                <div class="mv-card">


                    <div class="mv-icon">

                        <i class="bi bi-stars"></i>

                    </div>


                    <h4>
                        Our Values
                    </h4>


                    <p>
                        Innovation, integrity, collaboration, and excellence
                        guide every solution we design and every partnership
                        we build.
                    </p>


                </div>


            </div>



        </div>




        <!-- VALUE LIST -->


        <div class="values-list">


            <div class="value-item">

                <i class="bi bi-lightbulb"></i>

                <span>
                    Innovation
                </span>

            </div>


            <div class="value-item">

                <i class="bi bi-people"></i>

                <span>
                    Collaboration
                </span>

            </div>



            <div class="value-item">

                <i class="bi bi-lock"></i>

                <span>
                    Trust & Security
                </span>

            </div>



            <div class="value-item">

                <i class="bi bi-award"></i>

                <span>
                    Excellence
                </span>

            </div>


        </div>



    </div>


</section>

<!-- LEADERSHIP TEAM SECTION -->
<section class="leadership-section">

    <div class="container">


        <!-- HEADER -->

        <div class="section-heading text-center">


            <span class="section-label">
                Our Team
            </span>


            <h2>
                Experienced Professionals Driving Digital Transformation
            </h2>


            <p>
                Our team combines technical expertise, industry knowledge,
                and a passion for innovation to deliver technology solutions
                that create measurable business impact.
            </p>


        </div>



        <div class="row g-4 mt-5">



            <!-- TEAM MEMBER 1 -->

            <div class="col-lg-4 col-md-6">


                <div class="team-card">


                    <div class="team-image">


                        <img 
                        src="{{asset('assets/images/about/team-1.jpg')}}"
                        alt="Technology executive">


                    </div>



                    <div class="team-content">


                        <h4>
                            Femi Akinyooye
                        </h4>


                        <span>
                            Chief Technology Officer
                        </span>


                        <p>
                            Leading technical strategy, innovation,
                            and development of scalable digital solutions.
                        </p>


                        <div class="team-social">


                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>


                            <a href="#">
                                <i class="bi bi-twitter-x"></i>
                            </a>


                        </div>


                    </div>


                </div>


            </div>





            <!-- TEAM MEMBER 2 -->

            <div class="col-lg-4 col-md-6">


                <div class="team-card">


                    <div class="team-image">


                        <img 
                        src="{{asset('assets/images/about/team-2.jpg')}}"
                        alt="Business consultant">


                    </div>



                    <div class="team-content">


                        <h4>
                            Miracle Peter
                        </h4>


                        <span>
                            Operations Director
                        </span>


                        <p>
                            Connecting technology solutions with
                            business objectives and customer needs.
                        </p>


                        <div class="team-social">


                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>


                            <a href="#">
                                <i class="bi bi-twitter-x"></i>
                            </a>


                        </div>


                    </div>


                </div>


            </div>





            <!-- TEAM MEMBER 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="team-card">


                    <div class="team-image">


                        <img 
                        src="{{asset('assets/images/about/team-3.jpg')}}"
                        alt="Finance professional">


                    </div>



                    <div class="team-content">


                        <h4>
                            Temiloluwa Adeyinka
                        </h4>


                        <span>
                            Finance Director
                        </span>


                        <p>
                            Ensuring financial sustainability, operational
                            efficiency, and responsible resource management
                            across the organization.
                        </p>


                        <div class="team-social">


                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>


                            <a href="#">
                                <i class="bi bi-envelope"></i>
                            </a>


                        </div>


                    </div>


                </div>


            </div>



        </div>



    </div>


</section>

<!-- WHY PARTNER SECTION -->
<section class="partner-section">


    <div class="container">


        <div class="row align-items-center g-5">


            <!-- LEFT CONTENT -->

            <div class="col-lg-5">


                <span class="section-label">
                    Why Choose Us
                </span>


                <h2 class="partner-title">

                    A Technology Partner Focused On Your Success

                </h2>


                <p class="partner-description">

                    At Emmanex IT Consult, we do more than deliver technology.
                    We work closely with organizations to understand their
                    challenges, design effective solutions, and create
                    technology platforms that support long-term growth.

                </p>


                <a href="{{ url('/contact') }}" 
                   class="partner-btn">

                    Partner With Us

                    <i class="bi bi-arrow-right"></i>

                </a>


            </div>




            <!-- RIGHT BENEFITS -->

            <div class="col-lg-7">


                <div class="row g-4">



                    <!-- ITEM -->

                    <div class="col-md-6">


                        <div class="partner-card">


                            <div class="partner-icon">

                                <i class="bi bi-gear-wide-connected"></i>

                            </div>


                            <h4>
                                Tailored Solutions
                            </h4>


                            <p>
                                We create technology solutions designed
                                around your unique business requirements.
                            </p>


                        </div>


                    </div>





                    <div class="col-md-6">


                        <div class="partner-card">


                            <div class="partner-icon">

                                <i class="bi bi-lightning-charge"></i>

                            </div>


                            <h4>
                                Innovation Driven
                            </h4>


                            <p>
                                We adopt modern technologies to help
                                businesses remain competitive.
                            </p>


                        </div>


                    </div>





                    <div class="col-md-6">


                        <div class="partner-card">


                            <div class="partner-icon">

                                <i class="bi bi-shield-lock"></i>

                            </div>


                            <h4>
                                Secure Infrastructure
                            </h4>


                            <p>
                                Security is integrated into every solution
                                we design and deploy.
                            </p>


                        </div>


                    </div>





                    <div class="col-md-6">


                        <div class="partner-card">


                            <div class="partner-icon">

                                <i class="bi bi-headset"></i>

                            </div>


                            <h4>
                                Reliable Support
                            </h4>


                            <p>
                                We provide continuous support to keep
                                business operations running smoothly.
                            </p>


                        </div>


                    </div>



                </div>


            </div>


        </div>


    </div>


</section>

<!-- COMPANY STATISTICS SECTION -->
<section class="company-stats">


    <div class="container">


        <div class="stats-wrapper">


            <div class="row g-4">



                <!-- STAT 1 -->

                <div class="col-lg-3 col-md-6">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-calendar-check"></i>

                        </div>


                        <h2 class="counter"
                            data-count="10">
                            0
                        </h2>


                        <p>
                            Years Of Experience
                        </p>


                    </div>


                </div>





                <!-- STAT 2 -->

                <div class="col-lg-3 col-md-6">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-kanban"></i>

                        </div>


                        <h2 class="counter"
                            data-count="150">
                            0
                        </h2>


                        <p>
                            Projects Delivered
                        </p>


                    </div>


                </div>





                <!-- STAT 3 -->

                <div class="col-lg-3 col-md-6">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-building-check"></i>

                        </div>


                        <h2 class="counter"
                            data-count="80">
                            0
                        </h2>


                        <p>
                            Businesses Supported
                        </p>


                    </div>


                </div>





                <!-- STAT 4 -->

                <div class="col-lg-3 col-md-6">


                    <div class="stat-item">


                        <div class="stat-icon">

                            <i class="bi bi-people"></i>

                        </div>


                        <h2 class="counter"
                            data-count="10">
                            0
                        </h2>


                        <p>
                            Technology Specialists
                        </p>


                    </div>


                </div>



            </div>


        </div>


    </div>


</section>

@endsection