<!-- =====================================================
     ABOUT EMMANEX
====================================================== -->

<section class="about-home-section" id="about">

    <div class="container">

        <!--==============================
            About Introduction
        ===============================-->

        <div class="row align-items-center g-5">

            <!-- Left Content -->

            <div class="col-lg-7">

                <span class="section-badge">
                    <i class="bi bi-stars me-2"></i>
                    ABOUT EMMANEX
                </span>

                <h2 class="section-title">
                    Building Technology That Moves Businesses Forward
                </h2>

                <p class="section-description">
                    Emmanex IT Consult helps organizations embrace digital transformation through innovative software, cloud infrastructure, cybersecurity, networking, and managed IT services. We build technology solutions that improve efficiency, strengthen security, and accelerate business growth.
                </p>

                <p class="section-description">
                    Whether you're a startup, SME, educational institution, or enterprise, our experienced team delivers scalable solutions tailored to your goals with reliability, innovation, and long-term support.
                </p>

                <!-- <div class="row feature-list g-3 mt-2">

                    <div class="col-md-6">
                        <div class="feature-item">
                            <i class="bi bi-code-slash"></i>
                            <span>Custom Software Development</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-item">
                            <i class="bi bi-cloud-check"></i>
                            <span>Cloud Infrastructure</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-item">
                            <i class="bi bi-shield-lock"></i>
                            <span>Cybersecurity Solutions</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-item">
                            <i class="bi bi-headset"></i>
                            <span>Managed IT Support</span>
                        </div>
                    </div>

                </div> -->

                <!-- <div class="about-buttons mt-5">

                    <a href="#" class="btn btn-primary btn-lg">
                        Learn More
                    </a>

                    <a href="#" class="btn btn-outline-primary btn-lg ms-2">
                        Free Consultation
                    </a>

                </div> -->

            </div>

            <!-- Right Image -->

            <div class="col-lg-5">

                <div class="about-image-wrapper">

                    <img
                        src="{{ asset('assets/images/hero/about-team.jpg') }}"
                        class="img-fluid about-image"
                        alt="Emmanex IT Consult">

                    <div class="experience-badge">

                        <h3>10+</h3>

                        <span>
                            Years of Delivering
                            Technology Excellence
                        </span>

                    </div>

                </div>

            </div>

        </div>

        <!--=====================================
            Company Highlights
        ======================================-->

        <div class="company-highlights">

            <div class="row g-4 align-items-center">

                <div class="col-lg-8">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="highlight-card">

                                <div class="highlight-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>

                                <div>

                                    <h5>Innovation</h5>

                                    <p>
                                        Modern technology tailored to your business.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="highlight-card">

                                <div class="highlight-icon">
                                    <i class="bi bi-award"></i>
                                </div>

                                <div>

                                    <h5>Enterprise Expertise</h5>

                                    <p>
                                        Experienced professionals delivering quality.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="highlight-card">

                                <div class="highlight-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>

                                <div>

                                    <h5>Security First</h5>

                                    <p>
                                        Reliable infrastructure and cyber protection.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="highlight-card">

                                <div class="highlight-icon">
                                    <i class="bi bi-headset"></i>
                                </div>

                                <div>

                                    <h5>24/7 Support</h5>

                                    <p>
                                        We're always available when you need us.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="stats-panel">

                        <div class="stat-box">
                            <h2>50+</h2>
                            <span>Projects</span>
                        </div>

                        <div class="stat-box">
                            <h2>20+</h2>
                            <span>Clients</span>
                        </div>

                        <div class="stat-box">
                            <h2>99%</h2>
                            <span>Satisfaction</span>
                        </div>

                        <div class="stat-box">
                            <h2>24/7</h2>
                            <span>Support</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--=====================================
        Trusted Clients
        ======================================-->

        <div class="trusted-clients mt-5">

            <div class="trusted-header text-center">

                <span class="section-badge">
                    <i class="bi bi-stars me-2"></i>
                    Trusted by Clients
                </span>

                <h3 class="trusted-heading mt-3">
                    Empowering Organizations Through Technology Excellence
                </h3>

                <p class="trusted-subtitle">
                    From startups to established enterprises, organizations rely on Emmanex IT Consult to deliver secure, scalable, and innovative technology solutions that drive measurable business results.
                </p>

            </div>

            <div class="logo-marquee">

                @php
                    $clients = [
                        '1.png',
                        '2.png',
                        '3.jpeg',
                        '4.png',
                        '5.png',
                        '6.png',
                        '7.png',
                        '8.png',
                        '9.png',
                        '10.png',
                        '11.png',
                    ];
                @endphp

                <div class="logo-track">

                    @for($i = 0; $i < 2; $i++)

                        @foreach($clients as $logo)

                            <div class="logo-item">
                                <img src="{{ asset('assets/images/clients/' . $logo) }}" alt="Client Logo">
                            </div>

                        @endforeach

                    @endfor

                </div>

            </div>

        </div>

    </div>

</section>