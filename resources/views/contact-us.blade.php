<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Contactez Nous</title>

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
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative">
                            <h1 class="text-white">Contactez Nous</h1>
                            <p class="lead">Hébergement Web facile et abordable, choisissez une solution de services d'hébergement Web adaptée pour des sites Web personnels et professionnels performants.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--our contact promo start-->
        <section class="promo-section pt-100 ">
            <div class="container">
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card text-center p-3 my-3">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-envelope icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Envoyez nous un E-mail</h5>
                                    <p class="mb-0">Dites quelque chose pour démarrer un chat en direct hello@ltchost.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card text-center p-3 my-3">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-headset icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>24/7 Live Chat</h5>
                                    <p class="mb-0">Nous nous efforçons de répondre à toutes les demandes dans les 24 heures les jours ouvrables.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card single-promo-card text-center p-3 my-3">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-map-marker-alt icon-size-lg color-primary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Nous Visiter</h5>
                                    <p class="mb-0">Cameroun ,Yaounde - Mvan </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--our contact promo end-->

        <!--our contact section start-->
        <section class="contact-us-section ptb-100" id="contact">
            <div class="container">
                <div class="row">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                        @endforeach
                    @endif

                    @if (session('success'))
                        <div class="col-12 pb-3 message-box ">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    <div class="col-md-8 col-lg-9">
                        <div class="contact-us-form-wrap gray-light-bg position-relative">
                            <form action="{{ route('sendmail') }}" method="POST" class="contact-us-form">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-9 col-12">
                                        <h5 class="mb-3">Envoyez nous un message</h5>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="mb-4">
                                            <textarea name="message" id="message" class="form-control w-100 h-100" rows="5" cols="25" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary" id="btnContactUs">
                                            Envoyer 
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="contact-us-content primary-bg text-white shadow-lg mt-5 mt-md-0 mt-lg-0">
                                <h3 class="text-white">
                                    Vous cherchez une excellente idée d'entreprise?
                                </h3>
                                <p>Passez nous voir à tout moment, nous nous efforçons de répondre à toutes les demandes dans les 24 heures les jours ouvrables.</p>
                                <ul class="contact-info-list mt-3">
                                    <li class="d-flex py-3">
                                        <div class="contact-icon me-3">
                                            <span class="fas fa-location-arrow text-tertiary"></span>
                                        </div>
                                        <div class="contact-text">
                                            <h6 class="mb-1 text-white font-weight-normal">
                                            Addresse de la société
                                            </h6>
                                            <small> Yaounde, Mvan. Cameroun </small>
                                        </div>
                                    </li>
                                    <li class="d-flex py-3">
                                        <div class="contact-icon me-3">
                                            <span class="fas fa-envelope text-tertiary"></span>
                                        </div>
                                        <div class="contact-text">
                                            <h6 class="mb-1 text-white font-weight-normal">
                                            Addresse E-mail 
                                            </h6>
                                            <small> info@ltchost.com </small>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                                    <li class="list-inline-item">
                                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our contact section end-->

        <!--google map start-->
        <!-- <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450937!2d144.953735315922!3d-37.817323442021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1571030260624!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe>
        </div> -->
        <!--google map end-->

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