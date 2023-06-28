<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token()}}"/>

    <!--favicon icon-->
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="16x16" />
    <!--title-->
    <title>Hebergement & noms de domaine</title>
    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->
    <!-- retouche css -->
    <link rel="stylesheet" href="{{asset('assets/css/retouche.css') }}">
    <!-- retouche css -->

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
        <section class="ptb-120 gradient-bg top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative">
                            <h1 class="text-white">Espace Client</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <div class="container-fluid">
            <div class="row info">
                <div class="col-md-3">
                    <div class="left">
                        <h5> Vos informations</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="nom col-3">
                                        <p>Nom </p>
                                    </div>
                                    <div class="col-9 ">
                                        <p> : {{ $user_data->name }} </p>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="nom col-3">
                                        <p>Email </p>
                                    </div>
                                    <div class="col-9">
                                        <p> : {{ $user_data->email }} </p>
                                    </div>
                                </div>

                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="nom col-3">
                                        <p>Telephone </p>
                                    </div>
                                    <div class="col-9">
                                        <p> : {{ $user_data->telephone }} </p>
                                    </div>
                                </div>

                            </li>


                        </ul>
                    </div>

                    <div class="list col-12">

                        <ul>
                            <li> <a href="{{route('showSpace')}}"><i class="fa fa-arrow-left"></i> Accueil espace client </a></li>
                            <li> <a href="{{route('showSpacedns')}}">Modifier les informations du DNS <i class="fa fa-arrow-right"></i></a></li>
                            
                            <li> <a href="{{route('domain-transfer')}}">Transfert de nom de domaine <i class="fa fa-arrow-right"></i></a></li>

                        </ul>

                    </div>

                </div>
                <div class="col-md-9">

                    <div class="right">
                        <h5>Modifiier votre mot de passse</h5>

                        @if (session('success'))
                            <div class="col-12 pb-3 message-box ">
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="col-12 pb-3 message-box ">
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            </div>
                        @endif

                        <form class="domaine" action="{{ route('changepass') }}" method="POST">
                            @csrf
                            {{-- <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id">
                            </div> --}}
                            <div class="form-group">
                                <input type="password" class="form-control" id="oldpass" placeholder=" Entrez ancien mot de passe" name="oldPass" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="newpass" name="newPass"  placeholder=" Entrez nouveau mot de passe" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="confirmPass" name="confirmPass"  placeholder="Confirmer nouveau mot de passe" required>
                            </div>
                            <button type="submit" class="btn btn-tertiary">Modifier</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>




    </div>
    </div>





    <!-- footer  section-->
    @include('partials.footer')
    <!--footer section end-->

    <!-- Theme plugin -->
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

    <script>
        $(document).ready(function() {
            $('.navbar a').click(function() {
                var targetId = $(this).attr('data-target');
                $('.form-group').hide();
                $('#' + targetId).show();
            });
        });
    </script>
</body>

</html>