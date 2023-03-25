<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Connexion</title>

    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->

</head>

<body>

    <!--preloader start-->
    @include('partials.preloader')
    <!--preloader end-->

    <section class="page-header-section ptb-100 bg-image full-height" data-overlay="8">
        <div class="background-image-wraper" style="background: url('assets/img/hero-6.jpg'); opacity: 1;"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="login-signup-wrap p-5 gray-light-bg rounded shadow">
                        <div class="login-signup-header text-center">
                            <a href="{{ route('home') }}"><img src="assets/img/logo/blue.png" class="img-fluid mb-3" alt="Logo" /></a>
                            <h5 class="mb-5">Connectez vous à votre compte</h5>
                        </div>

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                            @endforeach
                        @endif

                        <form class="login-signup-form" method="POST" action="{{ route('authentify') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <!-- Label -->
                                <label class="pb-2"> Adresse Email </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="nom@address.com" />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-2"> Mot de passe </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="Entrez votre Mot de passe" />
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button class="btn btn-primary mt-4 mb-3">
                                    Connexion
                                </button>
                            </div>
                        </form>
                        
                        <p class="text-center mt-2">
                            Vous n'avez pas encore de compte ? <a href="{{ route('register') }}">Inscrivez-vous</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <div class="copyright-wrap small-text text-center mt-5 text-white">
                        <p class="mb-0">
                            &copy; LtcHost Hoisting service, All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Configuration du theme -->
    <div class="theme-setting show">
        <a href="javascript:void(0)" id="themeSettingShow" class="theme-setting-link"><i class="fas fa-gear fa-spin"></i></a>
        <div class="theme-setting-body">
            <h6> Themes </h6>
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