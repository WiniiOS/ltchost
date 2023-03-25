<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title> Creer un compte LtcHost</title>

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
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="login-signup-wrap p-5 gray-light-bg rounded shadow">
                        <div class="login-signup-header text-center">
                            <a href="{{ route('home') }}"><img src="assets/img/logo/blue.png" class="img-fluid mb-3" alt="Logo"></a>
                            <h5 class="mb-5">Créer un compte LtcHost</h5>
                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert"> {{ $error }} </div>
                            @endforeach
                        @endif

                        <form method="POST" action="{{ route('save') }}" class="login-signup-form">
                            @csrf

                            

                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Votre Nom Complet
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-user"></span>
                                    </div>
                                    <input required name="name" type="text" class="form-control" placeholder="Entrez votre nom">
                                </div>

                            </div>
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Addresse Email
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <input required name="email" type="email" class="form-control" placeholder="nom@address.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Telephone
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <input required name="telephone" type="number" class="form-control" placeholder="600 000 000">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Password -->
                                <div class="form-group col-6">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    Mot de passe
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <input required name="password" type="password" class="form-control" placeholder="Mot de passe">
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group col-6">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Confirmer votre Mot de passe
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                        <input name="confirmPassword" type="password" class="form-control" required placeholder="Mot de passe">
                                    </div>
                                </div>
                            </div>
                            

                            <div class="my-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input name="acceptedPrivacy" type="checkbox" class="custom-control-input" id="check-terms">
                                    <label class="custom-control-label small-text" for="check-terms">J'accepte les <a href="{{ route('terms') }}">Termes &amp; Conditions</a></label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary mt-4 mb-3 w-100">
                                Inscription
                            </button>
                        </form>
                       
                        <p class="text-center mt-2">J'ai déjà un compte <a href="{{ route('connexion') }}">Connexion</a></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="copyright-wrap small-text text-center mt-5 text-white">
                        <p class="mb-0">&copy; LtcHost Hoisting service, All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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