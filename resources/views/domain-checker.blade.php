<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Domain Checker </title>

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
        <section class="ptb-120 gradient-bg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-content-wrap text-white position-relative">
                            <h1 class="text-white">Find Best Unique Domains Use Domain Checker!</h1>
                            <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                            <div class="domain-checker-wrap">
                                <form action="domain-search-result.php" class="domain-transfer-form newsletter-form position-relative w-75">
                                    <input type="text" name="domain" id="domain" class="form-control rounded-pill" placeholder="yourdomainname.com" />
                                    <button type="submit" class="btn btn-tertiary">Check now</button>
                                </form>
                                <div class="domain-list-wrap mt-4">
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
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap text-lg-end">
                            <img src="assets/img/domain-checker.svg" alt="domain registration" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--popular domain block start-->
        <section class="popular-domain-list ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-2">
                            <h2>Popular Top Level Domains Fit For You</h2>
                            <p>Assertively benchmark bricks-and-clicks opportunities and process-centric supply
                                chains vortals whereas cross-unit innovation. Credibly deliver extensible growth strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/com.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <span class="position-absolute badge bg-warning">Most Popular</span>
                                <p>Holisticly parallel task team building results and bleeding-edge.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$8.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/online.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Uniquely synergize cost effective it is technologies after performance.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$12.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$0.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/club.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Competently fabricate leveraged methods of empowerment vis-a-vis.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$16.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$6.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/net.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Dynamically network front results for compaile methods empowerment. </p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$15.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$4.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/pro.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Synergistically create visionary for our multifunctional schemas. </p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$0.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="single-popular-domain position-relative bg-white rounded p-4 mt-sm-4 mt-md-5 mt-lg-4">
                            <img src="assets/img/org.png" alt="domain" class="img-fluid" />
                            <div class="domain-info-wrap">
                                <p>Quickly promote B2B markets rather than impactful results.</p>
                                <ul class="list-inline domain-price-list">
                                    <li class="list-inline-item domain-old-price">
                                        <del>$10.99</del>
                                    </li>
                                    <li class="list-inline-item domain-new-price">$8.99</li>
                                </ul>
                            </div>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-primary btn-sm me-2">Register</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--popular domain block end-->

        <!--domain price list start-->
        <section class="domain-pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Top Level Domains Price List</h2>
                            <p>Completely negotiate focused applications with optimal functionalities. Conveniently impact state of the art technologies vis-a-vis innovative internal backward-compatible deliverables</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive-lg">
                            <table class="table table-bordered domain-price-table">
                                <thead>
                                    <tr>
                                        <td class="dp-title">Extensions (TLD)</td>
                                        <td class="dp-title">Register</td>
                                        <td class="dp-title">Renew</td>
                                        <td class="dp-title">Transfer</td>
                                    </tr>
                                </thead>
                                <tbody class="domain-price-body">
                                    <tr>
                                        <td><span class="domain-extension">.com</span> <span class="badge bg-success"> popular
                                    </span></td>
                                        <td>$12.00</td>
                                        <td>$14.90</td>
                                        <td>$14.90</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.info</span>
                                            <span class="badge bg-danger">sale</span>
                                        </td>
                                        <td><del>$11.90</del> <b class="color-accent">$7.99</b></td>
                                        <td>$11.90</td>
                                        <td>$14.00</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.org</span></td>
                                        <td>$8.00</td>
                                        <td>$10.90</td>
                                        <td>$10.90</td>
                                    </tr>
                                    <tr>
                                        <td> <span class="domain-extension">.co.uk</span></td>
                                        <td>$25.00</td>
                                        <td>$30.90</td>
                                        <td>$30.90</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.gov</span></td>
                                        <td>$45.24</td>
                                        <td>$50.24</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.store</span></td>
                                        <td>$32.00</td>
                                        <td>$35.90</td>
                                        <td>$35.90</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.blog</span> <span class="badge bg-danger">sale
                                    </span></td>
                                        <td><del>$45.10</del> <b class="color-accent">$26.00</b></td>
                                        <td>$55.10</td>
                                        <td>$55.10</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.online</span></td>
                                        <td>$22.00</td>
                                        <td>$46.90</td>
                                        <td>$46.90</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.eu</span></td>
                                        <td>$3.80</td>
                                        <td>$5.80</td>
                                        <td>$6.00</td>
                                    </tr>
                                    <tr>
                                        <td><span class="domain-extension">.pt</span></td>
                                        <td>$10.00</td>
                                        <td>$12.00</td>
                                        <td>$15.90</td>
                                    </tr>
                                    <tr>
                                        <td> <span class="domain-extension">.company</span>
                                            <span class="badge bg-warning">new</span>
                                        </td>
                                        <td>$13.00</td>
                                        <td>$13.00</td>
                                        <td>$19.90</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--domain price list end-->


        <!--call to action section start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">
                                24/7 Expert Hosting Support Our Customers Love
                            </h2>
                            <p>
                                Objectively innovate high compellingly maintain progressively pursue
                                mission-critical information quality imperatives.
                            </p>
                        </div>
                        <div class="support-action d-inline-flex flex-wrap">
                            <a href="mailto:support@yourdomain.com" class="me-3 text-info"><i class="fas fa-comment me-1 text-tertiary"></i>
                                <span>support@yourdomain.com</span></a>
                            <a href="tel:+00123456789" class="mb-0 text-info"><i class="fas fa-phone-alt me-1 text-tertiary"></i>
                                <span>+00123456789</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>Best Hosting Features For You</h2>
                            <p>These features come standard in all of our hosting plans. Dynamically extend
                                imperatives through open-source quickly niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-gauge icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Custom Control Panel</h5>
                                <p>Our intuitive control panel gives you admin access to all of your DreamHost products
                                    easily.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-thumbs-up icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Real-Life Human Beings</h5>
                                <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience whether.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-mouse icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>1-Click Installer</h5>
                                <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                    Joomla!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-stopwatch icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>100% Uptime Guarantee</h5>
                                <p>With multiple datacenter locations, redundant cooling, emergency generators and
                                    monitoring.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-hard-drive icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Solid State Drives (SSD)</h5>
                                <p>With SSDs, your website, caching, and database queries are faster by our calculations. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="features-box p-5 bg-white">
                            <div class="features-box-icon mb-3">
                                <span class="fas fa-trophy icon-size-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Award-Winning Support</h5>
                                <p>No question is too simple, or too complex for our team of experts. Synergistically
                                    synergize.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feature section end-->

        <!--faq section start-->
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
        </section> <!--faq section end-->

        <!--testimonial and review section start-->
        <section class="review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="section-heading">
                            <h2>Trusted By Clients And Industry Experts</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                            <a href="#" class="read-more-link"> Write about us <i class="fas fa-face-grin-stars ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="owl-carousel owl-theme client-testimonial-2 dot-bottom-center custom-dot">
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Amazing template</h5>
                                        <p>Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Objectively implement strategic niches through.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Best template for app</h5>
                                        <p>Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Tony Roy</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Efficiently innovate app</h5>
                                        <p>Continually redefine sticky channels whereas extensive "outside the box" thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-4.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-1.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Holisticly reintermediate</h5>
                                        <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-2.jpg" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--testimonial and review section end-->

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