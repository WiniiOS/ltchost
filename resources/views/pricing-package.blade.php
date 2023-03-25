<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title> Packs de prix</title>

    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->

</head>

<body>
    
    <!--preloader start-->
    @include('partials.preloader')
    <!--preloader end-->

    <!-- header & navbar  -->
    @include('partials.header')
    <!--  -->

    <div class="main">

        <!--page header section start-->
        <section class="ptb-120 gradient-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative">
                            <h1 class="text-white">Pricing Package</h1>
                            <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Managed Our Hosting Price</h2>
                            <p>
                                Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                                core competencies through client-centered
                                core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="switch-wrap text-center mb-2">
                            <label class="form-switch">
                                <span class="beforeinput text-success">
                                    Monthly
                                </span>
                                <input type="checkbox" id="js-contcheckbox">
                                <span class="switch-icon gray-light-bg"></span>
                                <span class="afterinput">
                                    Yearly
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Starter</h5>
                                <p>Medium traffic personal sites</p>
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$19<span>mo</span></div>
                                <div class="price text-center mb-0 yearly-price">$69<span>/yr</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>10</span> Hosted Domains</li>
                                    <li><span>25 GB</span> RAID 10 Storage</li>
                                    <li><span>200 GB</span> Bandwidth</li>
                                    <li><span>1 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Business <span class="badge bg-warning ms-2">Popular</span></h5>
                                <p>High traffic corporate sites</p>
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price text-white">$49<span>/mo</span></div>
                                <div class="price text-center mb-0 yearly-price text-white">$159<span>/yr</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>30</span> Hosted Domains</li>
                                    <li><span>75 GB</span> RAID 10 Storage</li>
                                    <li><span>700 GB</span> Bandwidth</li>
                                    <li><span>3 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Enterprise</h5>
                                <p>Enterprise content management</p>
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$69<span>/mo</span></div>
                                <div class="price text-center mb-0 yearly-price">$259<span>/yr</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>60</span> Hosted Domains</li>
                                    <li><span>175 GB</span> RAID 10 Storage</li>
                                    <li><span>1500 GB</span> Bandwidth</li>
                                    <li><span>6 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta mt-2">
                            <h6 class="mb-1 d-flex align-items-center justify-content-center"><span
                            class="fas fa-rotate-left color-primary me-2 icon-sm"></span>Choose Your <a href="pricing-comparison.html" class="ms-2">Compare Hosting Plans</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--pricing with switch section end-->

        <!--faq new style start-->
        <section id="faq" class="ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="accordion faq-wrap" id="accordionExample">

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">If I have a WordPress site hosted somewhere else, can I move it to Kohost?</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Credibly maximize open-source methodologies via sustainable synergy. Dynamically predominate diverse architectures via user-centric technologies. Credibly enable clicks-and-mortar services whereas extensive services. Proactively integrate orthogonal technologies whereas seamless networks. Dynamically transition intermandated communities via premier mindshare.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What’s the difference between WordPress Hosting and shared Web Hosting?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Energistically conceptualize visionary results and premier best practices. Enthusiastically innovate leveraged testing procedures rather than progressive experiences. Uniquely incubate bricks-and-clicks potentialities and process-centric "outside the box" thinking. Dramatically recaptiualize magnetic services rather than fully tested products. Appropriately productize innovative convergence before superior niches.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I know what WordPress Hosting plan is best for me?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Compellingly utilize go forward portals with go forward manufactured products. Continually evolve clicks-and-mortar web services and just in time quality vectors. Holisticly envisioneer unique technology whereas equity invested networks. Dynamically target reliable services without multifunctional convergence. Seamlessly visualize resource-leveling vortals after prospective partnerships.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Is email included with WordPress Hosting?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Professionally integrate optimal initiatives for progressive "outside the box" thinking. Intrinsicly drive real-time synergy with bleeding-edge growth strategies. Synergistically productize mission-critical portals vis-a-vis interactive customer service. Synergistically predominate B2B outsourcing for magnetic synergy. Energistically optimize synergistic expertise whereas premier results.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--faq new style end-->


    </div>

     <!-- footer  section-->
     @include('partials.footer')
    <!--footer section end-->

    <div class="theme-setting show">
        <a href="javascript:void(0)" id="themeSettingShow" class="theme-setting-link"><i class="fas fa-gear fa-spin"></i></a>
        <div class="theme-setting-body">
            <h6>Theme Option</h6>
            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Default Theme</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center active" id="theme-default">
                    <span class="default-primary"></span>
                    <span class="default-accent"></span>
                    <span class="default-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme One</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-1">
                    <span class="theme-1-primary"></span>
                    <span class="theme-1-accent"></span>
                    <span class="theme-1-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme Two</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-2">
                    <span class="theme-2-primary"></span>
                    <span class="theme-2-accent"></span>
                    <span class="theme-2-tertiary"></span>
                </a>
            </div>

            <div class="customize-color mt-4">
                <span class="heading-font fs-md fw-semibold">Theme Three</span>
                <a href="javascript:void(0)" class="d-block border theme-color d-flex align-items-center" id="theme-3">
                    <span class="theme-3-primary"></span>
                    <span class="theme-3-accent"></span>
                    <span class="theme-3-tertiary"></span>
                </a>
            </div>
        </div>
    </div><!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->

</body>

</html>