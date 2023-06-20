<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token()}}"/>


    <!--favicon icon-->
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Panier</title>

    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->
    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <style>
        .sdk {
            display: block;
            position: absolute;
            background-position: center;
            text-align: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

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
                                        class="fas fa-long-arrow-alt-left me-2"></i>Retour a l'Accueil</a></h5>
                                <hr>
                
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Mon panier</p>
                                        </div>
                                    </div>

                                    @if( Cart::count() > 0 )

                                        @foreach ( Cart::content() as $product )

                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                    @if($product->id > 3)
                                                    <div>
                                                        <img src="https://facemweb.com/wp-content/uploads/bfi_thumb/nom-de-domaine-344g6pu3qgy6heldk1u0p6.jpg"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    @else
                                                        <img src="assets/img/stockage.png" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                    @endif

                                                    <div class="ms-3">
                                                        <h5>{{ $product->name }} </h5>
                                                        <p class="small mb-0"> Hebergement Annuel </p>
                                                    </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0">{{ $product->qty }}</h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0"> {{ $product->price }} F CFA</h5>
                                                    </div>
                                                    <form action="{{ route('cart.destroy', $product->rowId ) }}" method="post">
                                                        <!-- user data -->
                                                        <input type="hidden" name="id" id="user_id" value="{{ isset($user->id) ? $user->id : '' }}" >
                                                        <input type="hidden" name="email" id="user_email" value="{{ isset($user->email) ? $user->email : '' }}" >
                                                        <input type="hidden" name="name" id="user_name" value="{{ isset($user->name) ? $user->name : '' }}" >
                                                        <input type="hidden" name="telephone" id="user_phone" value="{{ isset($user->telephone) ? $user->telephone : '' }}" >

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class='text-dark'><i class="fas fa-trash-alt"></i></button>
                                                    
                                                    </form>
                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach

                                        <div class="card">
                                            <h5 class="card-header">Information !</h5>
                                            <div class="card-body">
                                                <h5 class="card-title">1 Hebergement = 1 Nom de domaine gratuit la 1ere Annee</h5>
                                                <p class="card-text">Souscrivez a un hebergement annuel et beneficiez d'un nom de domaine gratuit la premiere annee.</p>
                                                <p class="card-text text-info">L'offre concerne les extension : com, fr, biz , info</p>
                                                <a href="{{ route('shared-hosting') }}" class="btn btn-primary">Souscrire</a>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <h5 class="card-header">Information 2 !</h5>
                                            <div class="card-body">
                                                <h5 class="card-title">Verifiez la disponibilite et ajoutez un nom de domaine gratuitement</h5>
                                                <p class="card-text">Si vous souhaitez profiter de notre offre gratuite 1 an, choisissez l'une des extensions ci-dessous :</p>
                                                <p class="card-text text-info">Les extensions : com, fr, biz , info</p>
                                                <a href="{{ route('domain-search-result') }}" class="btn btn-primary">Rechercher un nom de domaine</a>
                                            </div>
                                        </div>

                                    @else
                                        <p class='text-muted'> Votre panier est vide </p>
                                    @endif

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div></div>
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
                                                <p class="mb-2">Total HT</p>
                                                <p class="mb-2" id='amount'>{{ Cart::subtotal() }}</p>
                                            </div>
                        
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Taxes</p>
                                                <p class="mb-2">0 XAF</p>
                                            </div>
                        
                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total TTC</p>
                                                <p class="mb-2">{{ Cart::subtotal() }} XAF</p>
                                            </div>
                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Devise</p>
                                                <p class="mb-2">F CFA</p>
                                            </div>

                    
                                            <button type='button' onclick='payer()' class="btn btn-primary btn-block btn-lg">
                                                <div class="d-flex justify-content-between">                                    
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

        const preamount = document.querySelector('#amount').textContent.split('.')[0].split(',');
        const amount = parseInt(''+preamount[0]+''+ preamount[1]);

        const name = document.querySelector('#user_name').value;
        const telephone = document.querySelector('#user_phone').value;
        const user_id = document.querySelector('#user_id').value;
        const email = document.querySelector('#user_email').value;

        function payer() {

            // on check si l'utilisateur est connectee
            if (email == '' ) {
                window.location.href = "/connexion";
            }
            
            CinetPay.setConfig({
                apikey: "19307168035e47e4a0a20d24.32798184",
                site_id: 948395,
                notify_url: 'http://localhost:8000/notify/',
                return_url: 'http://localhost:8000',
                mode: 'PRODUCTION'
            });

            CinetPay.getCheckout({
                transaction_id: Math.floor(Math.random() * 100000000).toString(),
                amount: amount,
                currency: 'XAF',
                channels: 'ALL',
                description: "Achat d'un Hebergement/ Nom de domaine LTC HOST",
                cpm_designation: "Achat d'un Hebergement ou Nom de domaine LTC HOST",
                alternative_currency: 'XAF',
                customer_surname: name,
                customer_name: name,
                customer_email: email,
                customer_phone_number: telephone,
                customer_address: 'Cameroun, yaounde',
                customer_city: 'YAOUNDE',
                customer_country: 'CM',
                customer_state: 'CM',
                customer_zip_code: '00225',
                "metadata": "user"+''+user_id,

            });

            CinetPay.waitResponse(function(data) {

                if (data.status == "ACCEPTED") {

                    // sessionStorage.setItem('data',data);
                    saveTransaction(data);

                } else if (data.status == "REFUSED") {

                    // sessionStorage.setItem('data',data);
                    // En cas d'echec on enregistre la transaction echoue
                    saveTransaction(data);

                }
            });

            CinetPay.onError(function(data) {
                console.log(data);
            });
        }


        function saveTransaction(data) {

            // console.log('saveTransaction begin');

            $.ajax({
                url: "save-transaction",
                type:"POST",
                data:{
                    _token: "{{ csrf_token() }}",
                    userId:user_id,
                    montant:data.amount,
                    mode:data.payment_method,
                    status:data.status,
                    currency:data.currency,
                    description:data.description
                },
                success: function(responses) {
                    console.log(responses);
                    console.log('L\'enregistrement s\'est bien deroulee');
                },
                error: function(response){
                    console.log(response);
                    console.log('Une erreur est survenue lors de l\'enregistrement de la transaction');
                }
            });

            return false;
        }

        
        function saveFacture() {
            $.ajax({
                url: "save-transaction",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    userId:userId,
                    montant:data.amount,
                    mode:data.payment_method,
                    status:data.status,
                    payment_date:data.payment_date,
                    currency:data.currency,
                    description:data.description
                },
                success: function(responses) {
                    console.log('L\'enregistrement s\'est bien deroulee');
                },
                error: function(response){
                    console.log('Une erreur est survenue lors de l\'enregistrement de la transaction');
                }
            });
        }

        function saveDomain(params) {}

        function saveHebergement(params) {}

    </script>

</body>

</html>