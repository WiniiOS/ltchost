<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token()}}"/>

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Transferer un domain</title>

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
                            <h1 class="text-white">Transférer votre domaine chez nous</h1>
                            <p class="lead">Hébergement web facile et abordable, choisissez une solution d'hébergement web sur mesure pour des sites web personnels et professionnels réussis.</p>
                            <div class="domain-transfer-wrap mt-4">
                                <form id="domain-transfert" class="domain-transfer-form  position-relative w-75">
                                @csrf
                                    <input type="text" value="" required name="domain" id="domain" class="form-control rounded-pill"  />
                                    <input type="text" required name="authcode" id="authcode" class="form-control rounded-pill" placeholder="code EPP" />
                                    <br>
                                    <button type="submit" class="btn btn-tertiary rounded-pill">
                                         Transferer... 
                                        <span class="spinner-border  spinner-border-sm" role="status" aria-hidden="true"></span>         
                                    </button>

                                    <br>
                                </form>

                                <div class="text-center">
                                    <div class="alert alert-success" role="alert">
                                        Success : Votre domaine a bien ete transferee
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        Echec : La devise comptable ne correspond pas ou le solde n'est pas suffisant.
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap text-lg-end">
                            <img src="assets/img/domain-transfer.svg" alt="domain registration" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
       

        <!--feature section start-->
        <section id="features" class="feature-tab-section ptb-100 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <h2>Contrôlez à 100% vos projets Web - Transférez maintenant</h2>
                            <p class="lead">Une fois que vous avez tout ce qu'il vous faut, suivez ces 4 étapes simples, en établissant des partenariats proactifs avec des produits du monde entier.</p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="me-2 h5">1.</span>Entrez le nom de domaine que vous voulez transférer</li>
                                <li class="py-1"><span class="me-2 h5">2.</span>Procéder à l'achat</li>
                                <li class="py-1"><span class="me-2 h5">3.</span>Saisir le code EPP.</li>
                                <li class="py-1"><span class="me-2 h5">4.</span>Confirmez votre transfert.</li>
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn btn-outline-primary">Commencer maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <img src="assets/img/hero-img.png" alt="hosting" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-5">
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <img src="assets/img/create-website.svg" alt="hosting" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-new-wrap">
                            <h2>Avant de transférer votre domaine, assurez-vous des points suivants</h2>
                            <p class="lead">Mettre au point des technologies frontales de préparation au web face à des technologies de préparation au web robustes et évolutives. </p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="fas fa-check-circle text-success me-2"></span>Il s'est écoulé plus de 60 jours depuis l'enregistrement du domaine ou le dernier transfert.</li>
                                <li class="py-1"><span class="fas fa-check-circle text-success me-2"></span>Le domaine n'est pas n'est pas en attente de suppression ou de rachat.</li>
                                <li class="py-1"><span class="fas fa-check-circle text-success me-2"></span>Le code d'autorisation code d'autorisation qui prouve que vous êtes propriétaire du domaine. </li>
                                <li class="py-1"><span class="fas fa-check-circle text-success me-2"></span>Vous pouvez obtenir le code EPP auprès du fournisseur de domaine actuel.</li>
                                <li class="py-1"><span class="fas fa-check-circle text-success me-2"></span>Protection de la vie privée est désactivée.</li>
                                <li class="py-1"><span
                                class="fas fa-check-circle text-success me-2"></span>Étendre avec enthousiasme les services électroniques à l'échelle mondiale.</li>
                                <li class="py-1"><span
                                class="fas fa-check-circle text-success me-2"></span>Élaborer des solutions holistiques de manière professionnelle.</li>
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn btn-outline-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section end-->

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

    <script>

        const domainToTransfert = sessionStorage.getItem('domainSwitch');
        document.querySelector("#domain").value = domainToTransfert;
        
        const domainInput = document.querySelector("#domain");
        const authCode = document.querySelector("#authcode");

        $('.spinner-border').hide();
        $('.alert-success').hide();
        $('.alert-danger').hide();

        $(document).ready(function(){

            $('#domain-transfert').on('submit', function(e) {                

                e.preventDefault()
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: 'domain-transfer-form',
                    type: "POST",
                    data: { domain : domainInput.value, authcode : authCode.value, _token: token },
                    dataType: "json",
                    beforeSend: function() {
                        $('.spinner-border').show();
                    },
                    success: function(data) {
                        if (data['result'] == 'ERROR') {
                            $('.alert-danger').show();
                        } else {
                            $('.alert-success').show();
                        }
                                               
                        $('.spinner-border').hide();
                    },
                    error: function(error) {
                        $('.alert-danger').hide();
                    }
                });

            });
        });


        


        </script>

</body>

</html>