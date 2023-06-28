<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
                            <p class="lead">Hébergement Web facile et abordable, choisissez une solution de services d'hébergement Web adaptée pour des
                                sites Web personnels et professionnels performants.</p>
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
                                        <p> : naoussi talla leo</p>
                                    </div>
                                </div>

                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="nom col-3">
                                        <p>Email </p>
                                    </div>
                                    <div class="col-9">
                                        <p> : naoussileo@gmail.com</p>
                                    </div>
                                </div>

                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="nom col-3">
                                        <p>Adresse </p>
                                    </div>
                                    <div class="col-9">
                                        <p> : yaoundé anguissa</p>
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
                        <form class="domaine">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="id" name="id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="amdp" placeholder=" Entrez ancien mot de passe" name="domaine" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nmdp"   placeholder=" Entrez nouveau mot de passe" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nmdp" name="nmdp"  placeholder="Confirmer nouveau mot de passe" required>
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
    <script type="text/javascript">
        $('.spinner-border').hide();
        $('#search_domain1').hide(); // Resultats de recherche
        $('#search_domain2').hide(); // Recherche en cours
        $('.ajax-domain-search-result-section').hide();


        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();

            let domain = $('#domain').val();
            let domainType = $('#domainType').val();

            $.ajax({
                url: "check-domain-availability",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    domain: domain,
                    domainType: domainType,
                },
                beforeSend: function() {
                    $('.ajax-domain-search-result-section').show();
                    $('.spinner-border').show();
                    $('#search_domain2').show(); // Recherche en cours
                },
                success: function(responses) {

                    $('#search_domain2').hide(); // Recherche en cours
                    $('#search_domain1').show(); // Resultats de recherche

                    $('tbody').empty();

                    responses.forEach(data => {

                        if (data['domainAvailability'] == 'available') {

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

                        } else {


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
                                <a onclick="handleTransfert('${data['domain']}')"  class='btn btn-primary btn-sm'>Transferer</a>
                            </td>
                            
                        </tr>`);
                        }
                    });

                    $('.spinner-border').hide();

                },
                error: function(response) {
                    $('#search_domain2').hide(); // Recherche en cours
                    $('#search_domain1').show();
                },
            });
        });


        function handleTransfert(domain) {

            console.log('Clicked domain', domain);

            // on stocke le domaine en session
            sessionStorage.removeItem('domainSwitch');
            sessionStorage.setItem('domainSwitch', domain);

            // Simulate a mouse click:
            window.location.href = "/domain-transfer";

        }
    </script>


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