@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/careers-page.css') }}">
@endpush

@section('content')

<!-- ==========================================
     CAREERS HERO
=========================================== -->

<section class="careers-hero">

    <div class="hero-overlay"></div>

    <div class="container position-relative">

        <div class="row align-items-center min-vh-75">

            <!-- LEFT -->

            <div class="col-lg-6">

                <span class="section-label">
                    Careers
                </span>

                <h1>

                    Build Your Career

                    <span>With Emmanex IT Consult</span>

                </h1>

                <p>

                    Join a team of innovators, problem-solvers, and technology
                    professionals passionate about creating digital solutions
                    that empower businesses and communities. At Emmanex, you'll
                    work on meaningful projects, grow your expertise, and help
                    shape the future of technology.

                </p>

                <div class="hero-buttons">

                    <a href="#opportunities" class="btn-primary-custom">

                        View Opportunities

                    </a>

                    <a href="#talent-network" class="btn-outline-light-custom">

                        Join Our Talent Network

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-6">

                <div class="careers-image">

                    <img
                        src="{{ asset('assets/images/careers/career.jpg') }}"
                        alt="Careers">

                    <div class="career-card">

                        <i class="bi bi-people-fill"></i>

                        <div>

                            <h5>Grow With Us</h5>

                            <p>

                                Innovation • Learning • Collaboration

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    WHY JOIN EMMANEX
==========================================-->

<section class="why-emmanex">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT CONTENT -->

            <div class="col-lg-5">

                <span class="section-label">
                    Why Join Emmanex
                </span>

                <h2 class="section-title">

                    Build More Than a Career.<br>
                    Build Your Future.

                </h2>

                <p class="section-description">

                    At Emmanex IT Consult, we believe exceptional technology
                    starts with exceptional people. We foster a workplace where
                    innovation, collaboration, and continuous learning are part
                    of everyday life. Whether you're an experienced professional
                    or just starting your journey, you'll find opportunities to
                    grow, contribute, and make a meaningful impact.

                </p>

                <p class="section-description">

                    We invest in our people by providing challenging projects,
                    mentorship, professional development, and an environment
                    where creativity and fresh ideas are encouraged.

                </p>

            </div>

            <!-- RIGHT CONTENT -->

            <div class="col-lg-7">

                <div class="row g-4">

                    <div class="col-md-6">

                        <div class="career-feature">

                            <div class="career-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>

                            <h4>Innovation First</h4>

                            <p>
                                Work on cutting-edge solutions that solve real
                                business challenges across multiple industries.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="career-feature">

                            <div class="career-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>

                            <h4>Continuous Learning</h4>

                            <p>
                                Expand your skills through certifications,
                                mentoring, training, and hands-on experience.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="career-feature">

                            <div class="career-icon">
                                <i class="bi bi-people"></i>
                            </div>

                            <h4>Collaborative Culture</h4>

                            <p>
                                Join a supportive team where knowledge sharing,
                                teamwork, and respect drive success.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="career-feature">

                            <div class="career-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>

                            <h4>Career Growth</h4>

                            <p>
                                Take on meaningful responsibilities, grow your
                                expertise, and advance your career with us.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    LIFE AT EMMANEX
==========================================-->

<section class="life-emmanex">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGE GALLERY -->

            <div class="col-lg-6">

                <div class="life-gallery">

                    <img
                        class="gallery-main"
                        src="{{asset('assets/images/careers/life-01.jpg')}}"
                        alt="Team Collaboration">

                    <img
                        class="gallery-small top"
                        src="{{asset('assets/images/careers/life-02.jpg')}}"
                        alt="Innovation">

                    <img
                        class="gallery-small bottom"
                        src="{{asset('assets/images/careers/life-03.jpg')}}"
                        alt="Learning">

                </div>

            </div>

            <!-- CONTENT -->

            <div class="col-lg-6">

                <span class="section-label">
                    Life at Emmanex
                </span>

                <h2 class="section-title">

                    A Workplace Where Ideas, People & Technology Thrive

                </h2>

                <p class="section-description">

                    At Emmanex IT Consult, every project is an opportunity to
                    learn, innovate, and create lasting value. We encourage our
                    team members to take ownership, explore new technologies,
                    and collaborate across disciplines to deliver outstanding
                    solutions for our clients.

                </p>

                <p class="section-description">

                    We believe that great workplaces are built on trust,
                    continuous learning, mutual respect, and celebrating
                    achievements together. Whether you're developing software,
                    deploying infrastructure, or supporting clients, your work
                    has a direct impact on the success of the organizations we
                    serve.

                </p>

                <div class="culture-highlights">

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Collaborative Teams
                    </div>

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Innovative Projects
                    </div>

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Knowledge Sharing
                    </div>

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Inclusive Workplace
                    </div>

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Professional Mentorship
                    </div>

                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        Continuous Growth
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    EMPLOYEE BENEFITS
==========================================-->

<section class="employee-benefits">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                Benefits & Perks
            </span>

            <h2>

                Supporting Your Growth Every Step Of The Way

            </h2>

            <p>

                We believe our people are our greatest strength. That's why we
                invest in an environment that encourages continuous learning,
                professional development, collaboration, and work-life balance.

            </p>

        </div>

        <div class="row g-4 mt-4">

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <h4>Learning & Development</h4>

                    <p>
                        Continuous technical training, workshops, mentorship,
                        and opportunities to learn emerging technologies.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>

                    <h4>Certification Support</h4>

                    <p>
                        We encourage industry-recognized certifications to help
                        you build expertise and advance your career.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>

                    <h4>Innovative Projects</h4>

                    <p>
                        Work on impactful solutions across software, cloud,
                        networking, and cybersecurity for diverse industries.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h4>Collaborative Culture</h4>

                    <p>
                        Join a supportive team where ideas are welcomed,
                        teamwork is celebrated, and success is shared.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <h4>Career Progression</h4>

                    <p>
                        Take on meaningful responsibilities and explore
                        opportunities for professional growth and leadership.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="benefit-box">

                    <div class="benefit-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>

                    <h4>Work-Life Balance</h4>

                    <p>
                        We value employee well-being and strive to create a
                        positive, healthy, and productive work environment.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    CURRENT OPPORTUNITIES
==========================================-->

<section class="career-opportunities" id="opportunities">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                Career Opportunities
            </span>

            <h2>

                Join Our Growing Team

            </h2>

            <p>

                While we may not always have immediate openings, we're always
                interested in connecting with talented professionals who are
                passionate about technology, innovation, and delivering
                exceptional client experiences.

            </p>

        </div>

        <div class="row g-5 align-items-center mt-3">

            <!-- LEFT -->

            <div class="col-lg-7">

                <div class="vacancy-card">

                    <div class="vacancy-status">

                        <span class="status-badge">

                            <i class="bi bi-info-circle-fill"></i>

                            No Open Positions At The Moment

                        </span>

                    </div>

                    <h3>

                        Opportunities Open Throughout The Year

                    </h3>

                    <p>

                        As our projects and client portfolio continue to grow,
                        new opportunities become available across different
                        technology disciplines. We encourage qualified
                        professionals to submit their profiles for future
                        consideration.

                    </p>

                    <div class="future-roles">

                        <span>Software Developer</span>

                        <span>Web Developer</span>

                        <span>Mobile App Developer</span>

                        <span>Cloud Engineer</span>

                        <span>Network Engineer</span>

                        <span>Cybersecurity Analyst</span>

                        <span>UI / UX Designer</span>

                        <span>IT Support Engineer</span>

                        <span>Project Manager</span>

                        <span>Business Analyst</span>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-5">

                <div class="resume-card">

                    <div class="resume-icon">

                        <i class="bi bi-file-earmark-person-fill"></i>

                    </div>

                    <h3>

                        Join Our Talent Network

                    </h3>

                    <p>

                        Share your resume with us and we'll contact you when
                        opportunities that match your skills and experience
                        become available.

                    </p>

                    <a href="{{ route('contact') }}" class="btn-primary-custom">

                        Submit Your Resume

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection