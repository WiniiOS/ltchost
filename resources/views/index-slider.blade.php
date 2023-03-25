<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

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
        <section class="hero-slider-section bg-image hero-equal-height ptb-120 dark-bg" data-overlay="8">
            <div class="background-image-wraper" style="background: url('assets/img/hero-1.jpg')no-repeat center center / cover; opacity: 1;"></div>
            <div class="owl-carousel owl-theme hero-slider-one custom-dot dot-bottom-center">
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                        
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white position-relative z-index">
                                    <span class="text-white h5 mb-3">Hébergement Web jusqu'à -75%</span>
                                    <h1 class="text-white">Hébergement Web conçu pour la vitesse</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fas fa-check-circle text-info me-2"></span><strong>
                                        Nom de domaine gratuit</strong> Sous Domaines, Comptes</li>
                                        <li class="py-1"><span class="fas fa-check-circle text-info me-2"></span><strong>Assistance clientèle 24h/24 et 7j/7 </strong> </li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <p>Obtiens toutes les fonctionnalités essentielles à partie de <strong> 3000 FCFA Seulement</strong></p>
                                        <a href="#" class="btn btn-tertiary mr-3">Commencez maintenant</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="big-price-wrap position-relative">
                                    <div class="price-block d-flex justify-content-center text-white">
                                        <span class="price-currency">$</span>
                                        <div class="offer-price">5</div>
                                        <div class="right-block d-flex">
                                            <span class="cent-value">.99</span>
                                            <span class="per-value">/mo</span>
                                        </div>
                                    </div>
                                    <span class="d-block text-white regular-price text-center">Regular Price <strong>$10.99</strong> *</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">QUALITÉ - VITESSE - FIABILITÉ</span>
                                    <h1 class="text-white">L’hébergeur Web par excellence !</h1>
                                    <p>
                                    Chez Ltchost, nous fournissons le meilleur de l’hébergement ! Nous répondons aux besoins de vos sites web, avec des technologies innovantes et une assistance sans faille 
                                    </p>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn btn-tertiary mr-3">Découvrez Nos Offres</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="image-wrap">
                                    <img src="assets/img/wordpress-icon.svg" alt="wordpress" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">CPanel,Domaines</span>
                                    <h1 class="text-white">Interface cPanel®</h1>
                                    <p>
                                    Bénéficiez d'une puissante interface technique cPanel® qui facilitera votre gestion quotidienne.
                                    </p>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn btn-tertiary mr-3">Commencez maintenant</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="image-wrap">
                                    <img src="assets/img/web-hosting-icon.svg" alt="wordpress" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--hero section end-->

        <!--domain search promo start-->
        <section class="position-relative zindex-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8 col-12">
                        <div class="domain-search-wrap border gray-light-bg">
                            <h4 class="text-center">Recherchez un nom de domaine</h4>
                            <form action="{{ route('domain-search-result') }}" method="POST" class="domain-search-form my-4">
                            @csrf
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="yourdomainname.com" />
                                <div class="select-group">
                                    <select name="domainType" class="form-control">
                                        <option value="com" selected>.com</option>
                                        <option value="net">.net</option>
                                        <option value="io">.org</option>
                                        <option value="info">.cm</option>
                                        <option value="store">.fr</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search pe-1"></i> Search
                                    </button>
                                </div>
                            </form>
                            <div class="domain-list-wrap text-center">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/com.png" alt="com" width="70" class="img-fluid"> <span>9000 XAF</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/net.png" alt="com" width="70" class="img-fluid"> <span>9000 XAF</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/org.png" alt="com" width="70" class="img-fluid"> <span>11000 XAF</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"> .Cm <span>3000 XAF</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#">.Fr <span>9000 XAF</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search promo end-->


        <!--pricing section start-->
        <section id="pricing" class="pricing-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-4">
                            <h2>Choisis Un Plan d'Hébergement Web</h2>
                            <p> Hébergement professionnel à un prix abordable. </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-md-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon"><i class="fas fa-rocket color-secondary"></i></span>
                                <div class="h2 mb-0 text-dark"> 20.000 XAF <span class="price-cycle h5">/An</span></div><br>

                            </div>


                            <div class="pricing-info">
                                <h4>Starter</h4>
                                <div class="h5 mb-0 text-dark">Puis 25.000 XAF <span class="price-cycle h5">/An</span></div>
                                <p class="text-muted"> Haute performance, hebergement moins cher pour un lancement parfait</p>
                            </div>

                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="far fa-hdd me-2"></i>
                                        <p>
                                           1 Noms de domaine offert
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                                            <i class="fas fa-info-circle ms-1"></i> 
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-route me-2"></i>
                                        <p>
                                            Espace Disque <strong>50Go</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-safari me-2"></i>
                                        <p>
                                            Bande Passante illimitée 
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mail-bulk me-2"></i>
                                        <p>
                                        Adresses Email<strong>10</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>

                                    <li>
                                        <i class="fas fa-globe me-2"></i>
                                        <p>
                                            Sous-Domaines <strong>10</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="On annual plans or higher. First year only.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-headset me-2"></i>
                                        <p>
                                            Bases de Donnees illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Comptes FTP illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Espace admin Cpanel
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Certificat Auto SSL Offert
                                        </p>
                                    </li>
                                </ul>
                                <!-- <a href="{{ route('pricing-specifications') }}" class="mb-4 d-block read-more-link"> Spécifications Completes <i class="fas fa-arrow-right ps-2"></i></a> -->
                                <a href="#" class="btn btn-primary btn-block" target="_blank">Commander maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon"><i class="fas fa-space-shuttle color-secondary"></i></span>
                                <div class="h2 mb-0 text-dark"> 25.000 XAF <span class="price-cycle h5">/An</span>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <h5>Business</h5>
                                <div class="h5 mb-0 text-dark">En suite 35.000 XAF <span class="price-cycle h5">/An</span></div>
                                <p class="text-muted"> Bonne performance, hebergement moins chere avec DD pour un projet moyen </p>
                            </div>

                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="far fa-hdd me-2"></i>
                                        <p>
                                            1 Noms de domaine offert
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                                            <i class="fas fa-info-circle ms-1"></i> 
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-route me-2"></i>
                                        <p>
                                            Espace Disque <strong>100Go</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-safari me-2"></i>
                                        <p>
                                            Bande Passante illimitée 
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mail-bulk me-2"></i>
                                        <p>
                                        Adresses Email<strong>30</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>

                                    <li>
                                        <i class="fas fa-globe me-2"></i>
                                        <p>
                                            Sous-Domaines <strong>30</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="On annual plans or higher. First year only.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-headset me-2"></i>
                                        <p>
                                            Bases de Donnees illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Comptes FTP illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Espace admin Cpanel
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Certificat Auto SSL Offert
                                        </p>
                                    </li>
                                </ul>
                                <!-- <a href="{{ route('pricing-specifications') }}" class="mb-4 d-block read-more-link"> Spécifications Completes <i class="fas fa-arrow-right ps-2"></i></a> -->
                                <a href="#" class="btn btn-primary btn-block" target="_blank">Commander maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon"> <i class="fas fa-medal color-secondary"></i></span>
                                <div class="h2 mb-0 text-dark"> 35.000 XAF <span class="price-cycle h5">/An</span>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <h5>Premium</h5>
                                <div class="h5 mb-0 text-dark">En suite 45.000 XAF <span class="price-cycle h5">/An</span></div>
                                <p class="text-muted"> Super performance pour des projets lourd ,à un prix raisonnable. </p>
                            </div>
                            
                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="far fa-hdd me-2"></i>
                                        <p>
                                            Noms de domaine offerts à partir de 6 mois
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                                            <i class="fas fa-info-circle ms-1"></i> 
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-route me-2"></i>
                                        <p>
                                            Espace Disque <strong>150Go</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-safari me-2"></i>
                                        <p>
                                            Bande Passante illimitée 
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-mail-bulk me-2"></i>
                                        <p>
                                        Adresses Email<strong>50</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>

                                    <li>
                                        <i class="fas fa-globe me-2"></i>
                                        <p>
                                            Sous-Domaines <strong>50</strong>
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-title="On annual plans or higher. First year only.">
                                            <i class="fas fa-info-circle ms-1"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-headset me-2"></i>
                                        <p>
                                            Bases de Donnees illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Comptes FTP illimitée
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Espace admin Cpanel
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fas fa-upload me-2"></i>
                                        <p>
                                        Certificat Auto SSL Offert
                                        </p>
                                    </li>
                                </ul>
                                <!-- <a href="{{ route('pricing-specifications') }}" class="mb-4 d-block read-more-link"> Spécifications Completes <i class="fas fa-arrow-right ps-2"></i></a> -->
                                <a href="#" class="btn btn-primary btn-block" target="_blank">Commander maintenant</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <a href="{{ route('pricing-comparaison') }}" target="_blank">
                                <h5 class="mb-1">
                                    <span class="fas fa-rotate-left color-primary me-2"></span>Comparer les plans d'Hébergement Web
                                </h5>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section><!--pricing section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                            <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly architect front-end methods
                                maintain multidisciplinary process proactively streamline mission-critical information via quality imperatives. </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-tertiary"> Get start now </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/cta-new.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">
                                24/7 Expert Hosting Support Our Customers Love
                            </h2>
                            <p>
                                Objectively innovate high compellingly maintain progressively pursue
                                mission-critical information quality imperatives.
                            </p>
                        </div>
                        <div class="support-action d-inline-flex flex-wrap">
                            <a href="mailto:support@yourdomain.com" class="me-3 text-info"><i class="fas fa-comment me-1 text-tertiary"></i>
                                <span>support@yourdomain.com</span></a>
                            <a href="tel:+00123456789" class="mb-0 text-info"><i class="fas fa-phone-alt me-1 text-tertiary"></i>
                                <span>+00123456789</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--our team section start-->
        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Lots of Customer Love Us</h2>
                            <p>
                                Rapidiously morph transparent internal or sources whereas resource sucking e-business. Conveniently innovate formulate manufactured products compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our team section end-->

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

</body>

</html>