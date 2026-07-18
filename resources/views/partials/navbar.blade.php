<!--=====================================
        MAIN HEADER
======================================-->

<header class="main-header-wrapper">


    <div class="main-header">


        <div class="container">


            <div class="row align-items-center">


                <!-- Logo -->

                <div class="col-lg-3 col-8">

                    <a href="{{ route('home') }}" class="logo">

                        <img src="{{ config('company.logo') }}"
                             alt="{{ config('company.name') }}">

                    </a>

                </div>




                <!-- Desktop Menu -->

                <div class="col-lg-7 d-none d-xl-block">


                    <ul class="main-menu">


                        <li>

                            <a class="active"
                               href="{{ route('home') }}">

                                Home

                            </a>

                        </li>



                        <li class="menu-dropdown">


                            <a href="#">

                                Company

                                <i class="bi bi-chevron-down"></i>

                            </a>


                            <div class="dropdown-box">


                                <a href="#">
                                    About Us
                                </a>


                                <a href="#">
                                    Our Team
                                </a>


                                <a href="#">
                                    Our Process
                                </a>


                                <a href="#">
                                    Careers
                                </a>


                            </div>


                        </li>




                        <li class="menu-dropdown mega">


                            <a href="#">

                                Services

                                <i class="bi bi-chevron-down"></i>

                            </a>


                            @include('partials.megamenu.services')


                        </li>




                        <li class="menu-dropdown mega">


                            <a href="#">

                                Solutions

                                <i class="bi bi-chevron-down"></i>

                            </a>


                            @include('partials.megamenu.solutions')


                        </li>



                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                Insights
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                Contact
                            </a>
                        </li>



                    </ul>


                </div>





                <!-- CTA -->

                <div class="col-lg-2 col-4 text-end">


                    <button class="menu-toggle d-xl-none"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#mobileMenu">


                        <i class="bi bi-list"></i>


                    </button>




                    <a href="#"
                       class="btn btn-brand d-none d-xl-inline-flex">


                        Let's Talk


                        <i class="bi bi-arrow-right ms-2"></i>


                    </a>



                </div>



            </div>


        </div>


    </div>


</header>