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
    <title>Recherche de Domaine</title>

    <!--build:css-->
    <link id="theme-style" href="assets/css/main.css" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->

    <style>
        .loader{
            background: url('assets/img/ajax-loader.gif') 50% 50% no-repeat rgba(255, 255, 255, 0.8);
            cursor: wait;
            height: 50%;
            left: 0;
            position: relative;
            top: 0;
            width: 90%;
            z-index: 99;
        }
        .loader h1{
            background: none;
            border: none;
            color: #0d1a55;
            font-size: 22px;
            font-family: "Open Sans",sans-serif;
            font-variant: small-caps;
            font-weight: 700;
            height: 700px;
            line-height: 700px;
            margin: 0 0 10px;
            padding: 60px;
            text-align: center;
        }
    </style>

</head>

<body>
    
    <!--preloader start-->
    {{-- @include('partials.preloader') --}}
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
                            <h1 class="text-white">Recherchez un nom de domaine !</h1>
                            <p class="lead">Nom de domaine offert la premiere annee pour 1 an d'abonnement sur notre offre basique.</p>
                            
                            <form id="domain-search-form" class="domain-transfer-form newsletter-form position-relative mt-3 w-75 d-block mx-auto">
                                @csrf
                                <input type="text" name="domain" id="domain" class="form-control rounded-pill" placeholder="mondomaine.com" />
                                <button type="submit" class="btn btn-tertiary">Recherche</button>
                            </form>

                            <div class="domain-list-wrap text-center mt-4">

                                <div class="bg-success" id="domain-search-result"> </div>

                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/com-w.png" alt="com" width="60" class="img-fluid"> <span>9000 fcfa</span></a></li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/net-w.png" alt="com" width="60" class="img-fluid"> <span>9000 fcfa</span></a></li>
                                    <li class="list-inline-item border rounded"><a href="#"><img src="assets/img/org-w.png" alt="com" width="60" class="img-fluid"> <span>11000 fcfa</span></a></li>
                                    <li class="list-inline-item border rounded"><a href="#">.cm <span>3000 fcfa</span></a></li>
                                    <li class="list-inline-item border rounded"><a href="#">.fr <span>9000 fcfa</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        {{-- code to paste --}}
        <!--domain search result section start-->
        <section class="domain-search-result-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    
                    <div class="col-md-12 col-lg-10">
                        <div class="content-with-sidebar">
                            <!--alert table start-->
                            <!-- <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5">
                                <tbody>
                                    
                                </tbody>
                            </table> -->

                            <!--alert table end-->

                            <h4 class="text-center">Recherche rapide de nom de domaines</h4>
                            
                            <table class="table vps-hosting-pricing-table domain-search-result-table">
                                
                                <tbody>


                                </tbody>

                                <!--preloader start-->
                                <div id="preloader">
                                    <div class="preloader-wrap">
                                        <img src="{{ url('assets/img/logo/blue.png') }}" alt="logo" class="img-fluid" />
                                        <div class="preloader">
                                            <i>.</i>
                                            <i>.</i>
                                            <i>.</i>
                                        </div>
                                    </div>
                                </div>
                                <!--preloader start-->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search result section end-->

    </div>

     <!-- footer  section-->
     @include('partials.footer')
    <!--footer section end-->

    {{-- <div class="theme-setting show">
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
    </div> --}}

    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->

    <!--build:js-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->

    <script>

        const xhr = new XMLHttpRequest();

        const form = document.querySelector("#domain-search-form");

        const mydata = new FormData(form);

        const domainInput = document.querySelector("#domain");

        const table = $('tbody')

        const url = "{{ route('checking') }}";

        $(document).ready(function(){

            $('#preloader').hide();

            $('#domain-search-form').on('submit', function(e) {                

                e.preventDefault()
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: url,
                    type: "POST",
                    data: { domain : domainInput.value, _token: token },
                    dataType: "json",
                    beforeSend: function() {
                        $('#preloader').show();
                        // console.log('En cours de chargement');
                    },
                    success: function(responses) {

                        $('tbody').empty();

                        responses.forEach( data => {

                            if(data['domainAvailability'] == 'available'){

                                $('tbody').append(
                                
                                `<tr class='vps-pricing-row'>
                                    <td data-value=' ${data['domainAvailability']} ' > ${data['domain']} </td>
                                    <td data-value='Price'>
                                        <p>
                                            <span class='rate'> ${data['price']} ${data['currency']} <span>/An</span></span>
                                            <span class='pricing-onsale'>Achetez-le -
                                        <span class="badge bg-warning">1 an Gratuit</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <span class='badge bg-info'> ${ data['domainAvailability'] == 'available' ? 'Disponible' : 'Indisponible'  } </span>
                                        </p>
                                    </td>
                                    <!--preloader start-->
                                    <td>
                                        <form action='/panier/ajouter'>
                                            @csrf
                                            <input type='hidden' name='id' value='${ data['id'] }' >
                                            <input type='hidden' name="title" value='${ data['domain'] }' >
                                            <input type='hidden' name="price" value='${ data['price'] }'>
                                            <button type='submit' class='btn btn-primary btn-block' >Ajouter au panier</button>
                                        </form>
                                    </td>
                                    
                                </tr>`);

                            }else{


                                $('tbody').append(
                                
                                `<tr class='vps-pricing-row'>
                                    <td data-value=' ${data['domainAvailability']} ' > ${data['domain']} </td>
                                    <td data-value='Price'>
                                        <p>
                                            <span class='rate'> ${data['price']} ${data['currency']} <span>/An</span></span>
                                            <span class='pricing-onsale'>Achetez-le -
                                        <span class="badge bg-warning">1 an Gratuit</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <span class='badge bg-info'> ${ data['domainAvailability'] == 'available' ? 'Disponible' : 'Indisponible'  } </span>
                                        </p>
                                    </td>
                                    <td>
                                        <a disabled href='#' class='btn btn-secondary btn-sm disabled'>Reservée</a>
                                    </td>
                                    
                                </tr>`);
                            }
                            
                     
                        });

                    
                        // console.log(responses); 
                        $('#preloader').hide();

                    },
                    error: function(error) {
                        console.log(error);
                        $('#preloader').hide();

                    }
                });

            });
		});

        
    </script>

</body>

</html>