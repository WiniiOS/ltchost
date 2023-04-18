<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Panier</title>

    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->
    
</head>

<body>

    <!--preloader start-->
    @include('partials.preloader')
    <!--preloader end-->

    <div class="main">

        <section class="h-100" >
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                
                            <div class="row">
                
                                <div class="col-lg-7">
                                <h5 class="mb-3"><a href="{{ route('home') }}" class="text-body"><i
                                        class="fas fa-long-arrow-alt-left me-2"></i>Retour</a></h5>
                                <hr>
                
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Mon panier</p>
                                        </div>
                                    </div>


                                    @foreach ($cart as $item)

                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src="https://digitiz.fr/wp-content/uploads/2023/01/Hebergement-web-pas-cher-1080x675.png"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5>Pack Hébergement {{ $item['product']['title'] }} </h5>
                                                        <p class="small mb-0"> Abonnement Annuel </p>
                                                    </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">{{ $item['quantity'] }}</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">{{ $item['quantity'] * $item['product']['price'] }} F CFA</h5>
                                                    </div>
                                                    <a href="{{ route('cart.remove',['id' => $item['quantity'] ]) }}" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1"><a href="{{ route('showDomainResultPage') }}"> Souhaitez-vous souscrire à un nom de domaine à votre panier ?</a></p>
                                        </div>
                                    </div>
                
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                
                                                <div>
                                                    <img src="https://facemweb.com/wp-content/uploads/bfi_thumb/nom-de-domaine-344g6pu3qgy6heldk1u0p6.jpg"
                                                    class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>kiroo.com</h5>
                                                    <p class="small mb-0">Abonnement Annuel</p>
                                                </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">Gratuit</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    
                
                                </div>

                                <div class="col-lg-5">
                
                                    <div class="card bg-primary text-white rounded-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <p class="mb-0">Détails du panier</p>
                                            </div>
                        
                                            <hr class="my-4">
                        
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Total </p>
                                                <p class="mb-2">{{ $total }} FCFA</p>
                                            </div>
                        
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Taxes</p>
                                                <p class="mb-2">0 %</p>
                                            </div>
                        
                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total TTC</p>
                                                <p class="mb-2">{{ $total }} FCFA</p>
                                            </div>
                    
                                            <button type='button' onclick='checkout()' class="btn btn-info btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                    
                                                    <span>{{ $total }} FCFA </span> &nbsp;
                                                    <span>  Payer <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                
                                </div>
                
                            </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="d-block">
                        <img src="{{ url('assets/img/logo/white.png') }}" alt="logo" class="img-fluid" />
                    </a>

                    <br />

                    <p>
                        LTC HOST est un service d'hebergement web de l'entreprise LTC GROUP SARL.
                    </p>

                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item">
                            <a class="linkedin" href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Hebergement Web</h6>
                            <ul>
                                <li>
                                    <a href="#">Hebergement web mutualisé</a>
                                </li>
                                <li>
                                    <a href="#">Hebergement d'emails</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Nom de domaine</h6>
                            <ul>
                                <li>
                                    <a href="#">Nom de domaine disponibles</a>
                                </li>
                                <li>
                                    <a href="#">Transferer un domaine</a>
                                </li>
                                <li>
                                    <a href="#">Enregistrer un domaine à vie</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">LTC HOST</h6>
                            <ul>
                                <li>
                                    <a href="#">A propos</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Politique de confidentialité</a>
                                </li>
                                <li>
                                    <a href="#">termes & conditions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="font-weight-normal">Support</h6>
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Prices</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    </div>

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

    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>

    <script>
    
        function checkout() {
            
            CinetPay.setConfig({
                apikey: '19307168035e47e4a0a20d24.32798184',//   YOUR APIKEY
                site_id: '948395',//YOUR_SITE_ID
                notify_url: 'http://localhost:8000/notify/',
                mode: 'SANDBOX'
            });

            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(),
                amount: 100,
                currency: 'XAF',
                channels: 'ALL',
                description: 'Test de Paiement Abonnement LTC HOST',   
                 //Fournir ces variables pour le paiements par carte bancaire
                customer_name:"Joe",//Le nom du client
                customer_surname:"Down",//Le prenom du client
                customer_email: "franckndi5@gmail.com",//l'email du client
                customer_phone_number: "658682586",//l'email du client
                customer_address : "BP 0024",//addresse du client
                customer_city: "Yaoundé",// La ville du client
                customer_country : "CM",// le code ISO du pays
                customer_state : "CM",// le code ISO l'état
                customer_zip_code : "06510", // code postal
            });

            CinetPay.waitResponse(function(data) {
                if (data.status == "REFUSED") {
                    if (alert("Votre paiement a échoué")) {
                        window.location.reload();
                    }
                } else if (data.status == "ACCEPTED") {
                    if (alert("Votre paiement a été effectué avec succès")) {
                        window.location.reload();
                    }
                }
            });

            CinetPay.onError(function(data) {
                console.log(data);
            });

        }

    </script>

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