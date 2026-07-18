<footer class="site-footer">


    <div class="container">


        <div class="row gy-5">


            <!-- Company -->

            <div class="col-lg-4 col-md-6">


                <div class="footer-brand">


                    <img src="{{ config('company.logo') }}"
                         alt="{{ config('company.name') }}"
                         class="footer-logo">



                    <p>

                        Emmanex IT Consult delivers innovative technology solutions that help organizations improve efficiency, embrace digital transformation, and build sustainable growth.

                    </p>



                    <div class="footer-social">


                        <a href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>


                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>


                        <a href="#">
                            <i class="bi bi-twitter-x"></i>
                        </a>


                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>


                    </div>


                </div>


            </div>




            <!-- Services -->

            <div class="col-lg-2 col-md-6">


                <h5>
                    Services
                </h5>


                <ul>


                    <li>
                        <a href="#">
                            Software Development
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Digital Transformation
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            IT Infrastructure
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            Business Solutions
                        </a>
                    </li>


                </ul>


            </div>





            <!-- Company Links -->

            <div class="col-lg-2 col-md-6">


                <h5>
                    Company
                </h5>


                <ul>


                    <li>
                        <a href="#">
                            About Us
                        </a>
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





            <!-- Contact -->

            <div class="col-lg-4 col-md-6">


                <h5>
                    Contact Us
                </h5>


                <ul class="footer-contact">


                    <li>

                        <i class="bi bi-telephone-fill"></i>

                        {{ config('company.phone') }}

                    </li>


                    <li>

                        <i class="bi bi-envelope-fill"></i>

                        {{ config('company.email') }}

                    </li>


                    <li>

                        <i class="bi bi-geo-alt-fill"></i>

                        {{ config('company.address') }}

                    </li>


                </ul>


            </div>


        </div>



    </div>



    <!-- Bottom Bar -->

    <div class="footer-bottom">


        <div class="container">


            <div class="d-flex justify-content-between align-items-center flex-wrap">


                <p class="mb-0">

                    © {{date('Y')}} Emmanex IT Consult. All Rights Reserved.

                </p>


                <div>

                    <a href="#">
                        Privacy Policy
                    </a>


                    <a href="#">
                        Terms & Conditions
                    </a>

                </div>


            </div>


        </div>


    </div>



</footer>



<!-- Scroll To Top -->

<button id="scrollTopBtn">

    <i class="bi bi-arrow-up"></i>

</button>