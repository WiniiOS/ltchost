<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Recherche de Domaine</title>

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
        <section class="hero-equal-height ptb-120 gradient-overlay bg-image" data-overlay="7">
            <div class="background-image-wraper" style="background: url('assets/img/hero-1.jpg')no-repeat center center / cover; opacity: 1;"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="hero-content-left text-white text-center">
                            <h1 class="text-white">Recherchez un nom de domaine unique !</h1>
                            <p class="lead">Nom de domaine offert la premiere annee pour 1 an d'abonnement sur notre offre basique.</p>

                            <form method="POST" action="{{ route('domain-search-result') }}" class="domain-transfer-form newsletter-form position-relative mt-3 w-75 d-block mx-auto">
                                @csrf
                                <input type="text" name="domain" id="domain" class="form-control rounded-pill" placeholder="mondomaine.com" />
                                <button type="submit" class="btn btn-tertiary">Recherche</button>
                            </form>
                            <div class="domain-list-wrap text-center mt-4">
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

        <!--domain search result section start-->
        <section class="domain-search-result-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <div class="domain-extension-filter-wrap p-4 white-bg rounded">
                            <div class="domain-filter-title">
                                <h5 class="mb-0 d-flex">Filter les resultats <span
                                class="fas fa-angle-down ms-auto text-end"></span></h5>
                            </div>
                            <ul class="list-unstyled domain-filter-list mt-3">
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="all">Tout voir
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value=".com">.com
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value=".net">.net
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value=".org">.org
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value=".fr">.fr
                                    </label>
                                </li>
                                <li class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value=".cm">.cm
                                    </label>
                                </li>
                               
                                <button type="submit" class="btn btn-block btn-outline-primary w-100 btn-sm mt-3">Appliquer</button>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-9">
                        <div class="content-with-sidebar">
                            <!--alert table start-->
                            <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5">
                                <tbody>
                                    <tr class="vps-pricing-row">
                                        <td>Le nom de domaine <span class="color-primary"> {{ $searchedDomain['domain'] }} </span> est {{ $searchedDomain['domainAvailability'] == 'AVAILABLE' ? 'Disponible' : 'Indisponible' }}!
                                            <br><small>{{ $searchedDomain['domainAvailability'] == 'AVAILABLE' ? 'Obtenez ce nom de domaine maintenant' : 'Essayez une autre extension' }} </small>
                                        </td>
                                        <td>
                                            <p>
                                                <span class="rate">{{ $searchedDomain['domainAvailability'] == 'AVAILABLE' ? $searchedDomain['price'] : 'Reservée' }}<span>/An</span></span>
                                                
                                                @if ($searchedDomain['domainAvailability'] == 'AVAILABLE')
                                                    <span class='pricing-onsale'>Achetez-le - <span class='badge bg-warning'>1 an Gratuit</span></span>
                                                @else
                                                    <span class='pricing-onsale'>Poussez la recherche</span>
                                                @endif

                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <span class='badge bg-info'>{{ $searchedDomain['domainAvailability'] == 'AVAILABLE' ? 'Disponible' : 'Indisponible' }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            @if ($searchedDomain['domainAvailability'] == 'AVAILABLE')
                                                <a href="#" class="btn btn-primary btn-sm">Ajouter au panier</a>
                                            @else
                                                <a disabled href="#" class="btn btn-secondary btn-sm disabled">Reservée</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--alert table end-->

                            <h4 class="text-center">Plus d'options de domaine</h4>
                            <table class="table vps-hosting-pricing-table domain-search-result-table">
                                <tbody>
                                @foreach ($data as $extension)
                                    <tr class="vps-pricing-row">
                                        <td data-value="{{ $extension['domainAvailability'] }}">{{ $extension['domain'] }} </td>
                                        <td data-value="Price">
                                            <p>
                                                <span class="rate">{{ $extension['price'] }}<span>/An</span></span>
                                                <span class="pricing-onsale">Achetez-le -
                                            <span class="badge bg-warning">1 an Gratuit</span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <span class='badge bg-info'>{{ $extension['domainAvailability'] == 'AVAILABLE' ? 'Disponible' : 'Indisponible' }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            @if ($extension['domainAvailability'] == 'AVAILABLE')
                                                <a href="#" class="btn btn-primary btn-sm">Ajouter au panier</a>
                                            @else
                                                <a disabled href="#" class="btn btn-secondary btn-sm disabled">Reservée</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                             
                                </tbody>
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