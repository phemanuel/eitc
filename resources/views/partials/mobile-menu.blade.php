<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="mobileMenu">

    <div class="offcanvas-header">

        <img src="{{ config('company.logo') }}"
             style="height:55px;">

        <button class="btn-close"
                data-bs-dismiss="offcanvas"></button>

    </div>

    <div class="offcanvas-body">

        <div class="accordion mobile-nav" id="mobileNav">

    <!-- HOME -->

    <div class="mobile-link">
        <a href="{{ route('home') }}">
            <i class="bi bi-house-door"></i>
            Home
        </a>
    </div>

    <!-- COMPANY -->

    <div class="accordion-item">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#companyMenu">

                <i class="bi bi-building me-2"></i>

                Company

            </button>

        </h2>

        <div id="companyMenu"
             class="accordion-collapse collapse"
             data-bs-parent="#mobileNav">

            <div class="accordion-body">

                <a href="{{ route('about') }}">About Us</a>

                <a href="{{ route('process') }}">Our Process</a>

                <a href="{{ route('career') }}">Careers</a>

            </div>

        </div>

    </div>

    <!-- SERVICES -->

    <div class="accordion-item">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#servicesMenu">

                <i class="bi bi-grid me-2"></i>

                Services

            </button>

        </h2>

        <div id="servicesMenu"
             class="accordion-collapse collapse"
             data-bs-parent="#mobileNav">

            <div class="accordion-body">

                <a href="{{ route('services') }}#software-development">Software Development</a>

                <a href="{{ route('services') }}#web-development">Web Development</a>

                <a href="{{ route('services') }}#mobile-development">Mobile App Development</a>

                <a href="{{ route('services') }}#cloud-solutions">Cloud Solutions</a>

                <a href="{{ route('services') }}#networking">Networking</a>

                <a href="{{ route('services') }}#cybersecurity">Cybersecurity</a>

            </div>

        </div>

    </div>

    <!-- SOLUTIONS -->

    <div class="accordion-item">

        <h2 class="accordion-header">

            <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#solutionsMenu">

                <i class="bi bi-layers me-2"></i>

                Solutions

            </button>

        </h2>

        <div id="solutionsMenu"
             class="accordion-collapse collapse"
             data-bs-parent="#mobileNav">

            <div class="accordion-body">

                <strong>Education</strong>

                <a href="{{ route('solutions') }}#school-management">School Management</a>

                <a href="{{ route('solutions') }}#cbt-platform">CBT Platform</a>

                <a href="{{ route('solutions') }}#elearning-portal">E-Learning Portal</a>

                <hr>

                <strong>Business</strong>

                <a href="{{ route('solutions') }}#pos-inventory">POS & Inventory</a>

                <a href="{{ route('solutions') }}#erp-solutions">ERP Solutions</a>

                <a href="{{ route('solutions') }}#hospital-management">Hospital Management</a>

            </div>

        </div>

    </div>

    <!-- INSIGHTS -->

    <!-- <div class="mobile-link">

        <a href="{{ route('insights') }}">

            <i class="bi bi-newspaper"></i>

            Insights

        </a>

    </div> -->

    <!-- CONTACT -->

    <div class="mobile-link">

        <a href="{{ route('contact') }}">

            <i class="bi bi-envelope"></i>

            Contact

        </a>

    </div>

</div>

        <div class="mt-4">

            <a href="#"
               class="btn btn-consult w-100">

                Free Consultation

            </a>

        </div>

    </div>

</div>