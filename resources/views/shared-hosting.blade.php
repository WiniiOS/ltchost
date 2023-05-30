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
    <title>Hebergements partagés</title>

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
    <!--header section end-->

    <div class="main">

        <!--hero section start-->
        <section class="hero-slider-section">
            <div class="owl-carousel owl-theme hero-slider-one custom-dot dot-bottom-center">
                <div class="item">
                    <div class="bg-image hero-equal-height ptb-120" data-overlay="8">
                        <div class="background-image-wraper" style="background: url('assets/img/hero-1.jpg')no-repeat center center / cover; opacity: 1;"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-lg-6">
                                    <div class="hero-content-wrap text-white position-relative z-index">
                                        <span class="text-white h5 font-weight-normal">Un hébergement fiable pour rendre n'importe quel site web</span>
                                        <h1 class="text-white">
                                        Nous proposons un hébergement partagé rapide, sécurisé et facile à gérer.
                                        </h1>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span><strong>Sans Compteur</strong> Sous Domaines, Comptes
                                            </li>
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span><strong>99%</strong> Garantie de disponibilité
                                            </li>
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span><strong>45-Jours</strong> Garantie de remboursement
                                            </li>
                                        </ul>
                                       
                                    </div>
                                </div>

                                <div class="col-lg-5 d-none d-md-none d-lg-block">
                                    <div class="big-price-wrap position-relative">
                                        <div class="price-block d-flex justify-content-center text-white">
                                            <span class="per-value">A PARTIE DE </span>
                                            <div class="price-currency"> 20.000 FCFA</div>
                                            <div class="right-block d-flex">
                                                <span class="per-value">/An</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bg-image hero-equal-height ptb-120" data-overlay="8">
                        <div class="background-image-wraper" style="background: url('assets/img/hero-4.jpg')no-repeat center center / cover; opacity: 1;"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-7">
                                    <div class="hero-content-wrap text-white">
                                        <span class="text-white h5 font-weight-normal">200, 300 propriétaires de sites web nous font confiance</span>
                                        <h1 class="text-white">
                                        Vos sites web méritent un hébergement plus rapide, sécurisé et fiable
                                        </h1>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span>Des performances et une rapidité inégalées dans l'industrie
                                            </li>
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span>Migration gratuite et sans effort
                                            </li>
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span>Certificats SSL gratuits pour tous les sites web
                                            </li>
                                            <li class="py-1">
                                                <span class="fas fa-check-circle text-success me-2"></span>Garantie de disponibilité de 99,9
                                            </li>
                                            
                                        </ul>
                                        <div class="action-btns mt-4">
                                            <a href="#" class="btn btn-tertiary me-3">Commencer Maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--hero section end-->

        <!-- include pricing -->
        @include('partials.pricing')
        <!--include pricing end-->
        
        <!--operating system promo start-->
        <section class="appliction-hosting ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Systèmes d'exploitation disponibles avec vitesse maximale</h2>
                            <p>Notre plateforme d'hébergement web a été entièrement optimisée pour offrir des performances exceptionnelles à vos applications web, avec des vitesses jusqu'à 16 fois plus rapides.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="application-hosting-wrap">
                            <ul class="app-list operating-list">
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-1.png" alt="icon"> <span>CentOS</span></a></li>
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-2.png" alt="icon"> <span>Debian GNU/Linux</span></a></li>
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-3.png" alt="icon"> <span>cPanel</span></a></li>
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-4.png" alt="icon"> <span>Fedora</span></a></li>
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-5.png" alt="icon"> <span>Plesk</span></a></li>
                                <li><a href="#" class="bg-white shadow text-dark"><img src="assets/img/os-img-6.png" alt="icon"> <span>Suse</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--operating system promo end-->

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
    <script>
        
        $('.spinner-border').hide();
        $('#search_domain1').hide();    // Resultats de recherche
        $('#search_domain2').hide();    // Recherche en cours
        $('.ajax-domain-search-result-section').hide();

        $('#SubmitForm').on('submit',function(e){
            e.preventDefault();

            let domain = $('#domain').val();
            let domainType = $('#domainType').val();
            
            $.ajax({
            url: "check-domain-availability",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                domain:domain,
                domainType:domainType,
            },
            beforeSend: function() {
                $('.ajax-domain-search-result-section').show();
                $('.spinner-border').show();
                $('#search_domain2').show();    // Recherche en cours
            },
            success: function(responses) {

                $('#search_domain2').hide();    // Recherche en cours
                $('#search_domain1').show();    // Resultats de recherche

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

                $('.spinner-border').hide();

            },
            error: function(response) {
                $('#search_domain2').hide();    // Recherche en cours
                $('#search_domain1').show();
            },
            });
        });
    </script>
    <!--endbuild-->

</body>

</html>