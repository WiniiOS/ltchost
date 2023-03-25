<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Recherche de Domaine</title>

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

        <!--hero section start-->
        <section class="hero-equal-height ptb-120 gradient-overlay bg-image" data-overlay="7">
            <div class="background-image-wraper" style="background: url('assets/img/hero-1.jpg')no-repeat center center / cover; opacity: 1;"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="hero-content-left text-white text-center">
                            <h1 class="text-white">Search for Find Unique Domains!</h1>
                            <p class="lead">Up to 50% Off domain and hosting, Starting from $2.99/month, free SSL certificate, 24/7/365 support, money back guarantee.</p>

                            <form action="domain-search-result.php" class="domain-transfer-form newsletter-form position-relative mt-3 w-75 d-block mx-auto">
                                <input type="text" name="domain" id="domain" class="form-control rounded-pill" placeholder="yourdomainname.com" />
                                <button type="submit" class="btn btn-tertiary">Search</button>
                            </form>
                            <div class="domain-list-wrap text-center mt-4">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/com-w.png" alt="com" width="60" class="img-fluid"> <span>$8.99</span></a>
                                    </li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/online-w.png" alt="com" width="60" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/net-w.png" alt="com" width="60" class="img-fluid"> <span>$4.99</span></a>
                                    </li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/org-w.png" alt="com" width="60" class="img-fluid"> <span>$2.99</span></a>
                                    </li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/store-w.png" alt="com" width="60" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--hero section end-->

        <!--domain search result section start-->
        <section class="domain-search-result-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <div class="domain-extension-filter-wrap p-4 white-bg rounded">
                            <div class="domain-filter-title">
                                <h5 class="mb-0 d-flex">Filter Results <span
                                class="fas fa-angle-down ms-auto text-end"></span></h5>
                            </div>
                            <ul class="list-unstyled domain-filter-list mt-3">
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Show All
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.com
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.net
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.online
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.org
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.xyz
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.store
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.website
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">.biz
                                    </label>
                                </li>
                                <button type="submit" class="btn btn-block btn-outline-primary w-100 btn-sm mt-3">Apply</button>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9">
                        <div class="content-with-sidebar">
                            <!--alert table start-->
                            <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5">
                                <tbody>
                                    <tr class="vps-pricing-row">
                                        <td>Domain <span class="color-primary">example.com</span> is available!
                                            <br><small>Get this domain now </small>
                                        </td>
                                        <td>
                                            <p>
                                                <span class="rate">$3.95<span>/month</span></span>
                                                <span class="pricing-onsale">On sale -
                                            <span class="badge bg-warning">Save 30%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--alert table end-->
                            <h4 class="text-center">More domain options</h4>
                            <table class="table vps-hosting-pricing-table domain-search-result-table">
                                <tbody>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.com</span></td>
                                        <td data-value="Price">
                                            <p>
                                                <span class="rate">$3.95<span>/month</span></span>
                                                <span class="pricing-onsale">On sale -
                                            <span class="badge bg-warning">Save 30%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.net</span></td>
                                        <td data-value="Price">
                                            <p>
                                                <span class="rate">$8.95<span>/month</span></span>
                                                <span class="pricing-onsale">On sale -
                                            <span class="badge bg-warning">Save 50%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.org</span></td>
                                        <td data-value="Price">
                                            <p>
                                                <span class="rate">$12.95<span>/month</span></span>
                                                <span class="pricing-onsale">On sale -
                                            <span class="badge bg-warning">Save 10%</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.info</span></td>
                                        <td data-value="Price">
                                            <p><span class="rate">$15.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge bg-warning">Save 30%</span></span></p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.store</span></td>
                                        <td data-value="Price">
                                            <p><span class="rate">$23.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge bg-warning">Save 40%</span></span></p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="vps-pricing-row">
                                        <td data-value="Available">hostlar<span class="color-primary">.online</span></td>
                                        <td data-value="Price">
                                            <p><span class="rate">$29.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge bg-warning">Save 10%</span></span></p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search result section end-->

        <!--popular domain list section start-->
        <section class="feature-tab-section ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                        <div class="image-box fadein text-xl-right text-center">
                            <img src="assets/img/network-1.jpg" alt="wp-hosting" class="img-fluid rounded" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 order-xl-first">
                        <h2>Advanced Search to Make your Life Fester and Easier</h2>
                        <p class="lead">Progressively matrix mission-critical core competencies without magnetic
                            paradigms.</p>
                        <div class="row pt-2">
                            <div class="col-12">
                                <h5>Multi-layered security</h5>
                                <p>Continually empower goal-oriented niche markets whereas interoperable outsourcing. Assertively incubate standardized methods of empowerment </p>
                            </div>
                            <div class="col-12">
                                <h5>Green-friendly hosting</h5>
                                <p>Monotonectally negotiate multifunctional applications whereas unique niche markets. Continually recaptiualize open-source catalysts for change whereas adaptive content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mt-5">
                    <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                        <div class="image-box fadein text-xl-right text-center">
                            <img src="assets/img/network-2.jpg" alt="wp-hosting" class="img-fluid rounded" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 order-xl-last">
                        <h2>Fast connectivity & low latency</h2>
                        <p class="lead">Efficiently reintermediate long-term high-impact channels without equity
                            invested technology.</p>
                        <div class="row pt-2">
                            <div class="col-12">
                                <h5>Exclusive Features</h5>
                                <p>Globally seize functional products rather than compelling supply chains capital before frictionless quality vectors. Holisticly envisioneer worldwide niche markets for efficient services.</p>
                            </div>
                            <div class="col-12">
                                <h5>Ultra-Fast Network</h5>
                                <p>Dramatically aggregate granular resources vis-a-vis process-centric process deliver enterprise-wide scenarios improvements. Quickly target compelling e-services after cross functional schemas. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--popular domain list section end-->

        <!--domain name block start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                            <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly architect front-end methods
                                maintain multidisciplinary process proactively streamline mission-critical information via quality imperatives. </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-tertiary"> Get start now </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/cta-new.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain name block end-->

        <!--faq new style start-->
        <section id="faq" class="ptb-100 ">
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