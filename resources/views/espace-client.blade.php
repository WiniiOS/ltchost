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


    <title>Client Area </title>
    <!-- Styling -->
    <link href="assets/css/all.min.css?v=03d1c3" rel="stylesheet">
    <link href="assets/css/theme.min.css?v=03d1c3" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
    <link href="assets/css/swiper-bundle.min.css?v=03d1c3" rel="stylesheet">
    <link href="assets/css/kohost.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">



    <script>
        var csrfToken = '3b4e23309d50a2ed8b9e7c6a88590912110efa9a',
            markdownGuide = 'Markdown Guide',
            locale = 'en',
            saved = 'saved',
            saving = 'autosaving',
            whmcsBaseUrl = "",
            requiredText = 'Required',
            recaptchaSiteKey = "";
    </script>
    <script src="assets/js/scripts.min.js?v=03d1c3"></script>

    <style>
        .tt-page-header {
            position: relative;
            display: block;
            background: purple !important;
        }
    </style>

</head>

<body class="tt-body-wrapper ">



 <header id="header" class="header tt-header">
    <div class="overlay"></div>

    <div class="navbar navbar-light">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mr-3">
            <img src="assets/img/logo.png" class="logo-img" alt="ThemeTags">
            </a>

            <div class="navbar navbar-expand-xl main-navbar-wrapper tt-main-header offcanvas-collapse">
                <div class="" id="mainNavbar">
                    <form method="post" action="/knowledgebase/search" class="d-xl-none">
                    <input type="hidden" name="token" value="3b4e23309d50a2ed8b9e7c6a88590912110efa9a">
                        <div class="input-group search w-100 mb-2">
                            <div class="input-group-prepend">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <input class="form-control prepended-form-control" type="text" name="search" placeholder="Search our knowledgebase...">
                        </div>
                    </form>
                    <ul id="nav" class="navbar-nav mr-auto w-auto">
                        <li menuitemname="Home" class="d-block no-collapse" id="Primary_Navbar-Home">
                            <a class="pr-4" href="{{ route('home') }}">
                            Accueil
                            </a>
                        </li>

                        <li menuitemname="Services" class="d-block dropdown no-collapse" id="Primary_Navbar-Services">
                            <a class="pr-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                Services
                            </a>
                        <ul class="dropdown-menu">
                            <li menuitemname="My Services" class="dropdown-item" id="Primary_Navbar-Services-My_Services">
                        <a href="/clientarea.php?action=services" class="dropdown-item px-2 py-0">
                            My Services
                        </a>
                       
                       
                    </ul>
            </li>
        <li menuitemname="Domains" class="d-block dropdown no-collapse" id="Primary_Navbar-Domains">
            <a class="pr-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                Domains
            </a>
            <ul class="dropdown-menu">
                <li menuitemname="My Domains" class="dropdown-item" id="Primary_Navbar-Domains-My_Domains">
                    <a href="/clientarea.php?action=domains" class="dropdown-item px-2 py-0">
                    My Domains
                    </a>
                </li>

                <div class="dropdown-divider"></div>

                <li menuitemname="Renew Domains" class="dropdown-item" id="Primary_Navbar-Domains-Renew_Domains">
                    <a href="/cart/domain/renew" class="dropdown-item px-2 py-0">
                    Renew Domains
                    </a>
                </li>
                <li menuitemname="Register a New Domain" class="dropdown-item" id="Primary_Navbar-Domains-Register_a_New_Domain">
                    <a href="/cart.php?a=add&amp;domain=register" class="dropdown-item px-2 py-0">
                    Register a New Domain
                    </a>
                </li>
                <li menuitemname="Transfer a Domain to Us" class="dropdown-item" id="Primary_Navbar-Domains-Transfer_a_Domain_to_Us">
                    <a href="/cart.php?a=add&amp;domain=transfer" class="dropdown-item px-2 py-0">
                    Transfer Domains to Us
                    </a>
                </li>
                
                <div class="dropdown-divider"></div>

                <li menuitemname="Domain Search" class="dropdown-item" id="Primary_Navbar-Domains-Domain_Search">
                    <a href="/domainchecker.php" class="dropdown-item px-2 py-0">Recherche de domaines  </a>
                </li>
            </ul>
        </li>
    </ul>

</div>
</div>

<div class="tt-main-header tt-toolbar-wrap">
<ul class="navbar-nav toolbar tt-toolbar-wrap tt-secondary-list w-auto">
<li class="nav-item dropdown d-none d-lg-none d-xl-block">
    <a href="javascript:void(0)" id="dropdownMenuButton" class="position-relative mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fal fa-search fa-fw"></i>
    </a>
    <form method="post" action="/knowledgebase/search" class="position-absolute form-inline dropdown-menu dropdown-menu-right p-4 bg-gray-light border-0" aria-labelledby="dropdownMenuButton">
        <input type="hidden" name="token" value="3b4e23309d50a2ed8b9e7c6a88590912110efa9a">
        <div class="input-group search d-none d-xl-flex">
            <div class="input-group-prepend">
                <button class="btn-default border-0" type="submit">
                <i class="fal fa-search"></i>
            </button>
        </div>
        <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="Search our knowledgebase...">
        </div>
    </form>
</li>
    <li class="tt-nav-item tt-notification">
        <button type="button" data-toggle="popover" id="accountNotifications" data-placement="bottom" data-original-title="" title="">
            <i class="fal fa-bell"></i>
            <span class="tt-circle"></span>
        </button>

        <div id="accountNotificationsContent" class="w-hidden">
            <ul class="client-alerts">
                    <li>
                        <a href="/cart/domain/renew">
                            <i class="far fa-fw fa-exclamation-circle"></i>
                            <div class="message">You have 1 domain(s) expiring within the next 7 days.</div>
                        </a>
                    </li>

                    <li>
                        <a href="/clientarea.php?action=masspay&amp;all=true">
                            <i class="far fa-fw fa-info-circle"></i>
                        <div class="message">You have 229 unpaid invoice(s). Pay them early for peace of mind.</div>
                    </a>
                </li>
                <li>
                    <a href="/clientarea.php?action=masspay&amp;all=true">
                        <i class="far fa-fw fa-exclamation-triangle"></i>
                        <div class="message">You have 229 overdue invoice(s) with a total balance due of $65,742.18 USD. Pay them now to avoid any interruptions in service.</div>
                    </a>
                </li>
        </ul>
    </div>
    </li>

    <li menuitemname="Account" class="d-block no-collapse dropdown no-collapse account" id="Secondary_Navbar-Account">

        <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="fal fa-user"></i>&nbsp;Bonjour, Franck!
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
            <li menuitemname="Edit Account Details" class="dropdown-item" id="Secondary_Navbar-Account-Edit_Account_Details">
                <a href="/clientarea.php?action=details" class="dropdown-item px-2 py-0">
                    Mes Détails
                </a>
            </li>
            <li menuitemname="User Management" class="dropdown-item" id="Secondary_Navbar-Account-User_Management">
                <a href="/account/users" class="dropdown-item px-2 py-0">
                    Gestion d'utilisateur
                </a>
            </li>

            <div class="dropdown-divider"></div>

            <li menuitemname="Profile" class="dropdown-item" id="Secondary_Navbar-Account-Profile">
                <a href="/user/profile" class="dropdown-item px-2 py-0">Mon Profile </a>
            </li>

            <li menuitemname="Change Password" class="dropdown-item" id="Secondary_Navbar-Account-Change_Password">
                <a href="/user/password" class="dropdown-item px-2 py-0">Changer de mot de passe</a>
            </li>

            <div class="dropdown-divider"></div>

            <li menuitemname="Logout" class="dropdown-item" id="Secondary_Navbar-Account-Logout">
                <a href="/logout.php" class="dropdown-item px-2 py-0">Déconnexion</a>
            </li>

        </ul>
    </li>

    <li class="nav-item">
        <a class="btn nav-link cart-btn" href="cart.php?a=view">
            <i class="fal fa-shopping-bag fa-fw"></i>
            <span id="cartItemCount" class="tt-cart-badge rounded-circle">0</span>
            <span class="sr-only"> Panier </span>
        </a>
    </li>

    <li class="nav-item ml-2 d-xl-none">
    <button class="btn nav-link" type="button" data-toggle="offcanvas">
        <span class="far fa-bars fa-fw"></span>
    </button>
</li>

</ul>

</div>
</div>
</div>
</header>



<section class="tt-page-header py-5 bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tt-page-header-info">
                    <h1 class="text-white mb-0 h3">Mon Dashboard </h1>
                    
                    <div class="tt-breadcrumb">
                        <span class="tt-triangle-right"></span>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index.php">    Portail d'Accueil </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Client Area </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section id="main-body" class=" ">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="sidebar">
                <div menuitemname="Client Details" class="mb-3 card card-sidebar">
                <div class="card-header">
                    <h3 class="card-title m-0">
                    <i class="fas fa-user"></i>&nbsp;                Vos Informations
                    <i class="fas fa-chevron-up card-minimise float-right"></i>
                    </h3>
                </div>
                <div class="collapsable-card-body">
                    <div class="card-body">
                        <strong>ThemeTags</strong><br><em>asd Hex</em><br>121 King Street, Melbourne<br>Melbourne, 3000<br>Israel
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="clientarea.php?action=details" class="btn btn-success btn-sm btn-block">
                    <i class="fas fa-pencil-alt"></i> Update
                    </a>
                </div>
            </div>
    
    


            <div menuitemname="Client Shortcuts" class="mb-3 card card-sidebar">
                <div class="card-header">
                    <h3 class="card-title m-0">
                    <i class="fas fa-bookmark"></i>&nbsp;                Raccourçis
                    <i class="fas fa-chevron-up card-minimise float-right"></i>
                    </h3>
                </div>

                <div class="collapsable-card-body">
                    <div class="list-group list-group-flush d-md-flex" role="tablist">
                        <a menuitemname="Order New Services" href="/cart.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Shortcuts-Order_New_Services">
                        <i class="fas fa-shopping-cart fa-fw"></i>&nbsp;                                Acheter Un Service
                        </a>
                        
                        <a menuitemname="Logout" href="/logout.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Shortcuts-Logout">
                        <i class="fas fa-arrow-left fa-fw"></i>&nbsp;                                Deconnexion
                        </a>
                    </div>
                </div>
            </div>

            </div>
        </div>
        
        <div class="col-lg-8 col-xl-9 primary-content">
                

            <div class="tiles mb-4">
                <div class="row">
                    <div class="col-6 col-xl-3">
                        <a href="clientarea.php?action=services" class="tile tt-custom-radius tt-single-box">
                            <i class="fad fa-server"></i>
                            <div class="tt-box-info">
                                <div class="stat">3</div>
                                <div class="title">Services</div>
                            </div>
                        </a>
                        </div>
                            <div class="col-6 col-xl-3">
                            <a href="clientarea.php?action=domains" class="tile tt-custom-radius tt-single-box">
                                <i class="fad fa-globe-americas"></i>
                                <div class="tt-box-info">
                                    <div class="stat">1</div>
                                    <div class="title">Domains</div>
                                </div>
                                </a>
                        </div>
                            <div class="col-6 col-xl-3">
                        <a href="supporttickets.php" class="tile tt-custom-radius tt-single-box">
                            <i class="fad fa-ticket-alt"></i>
                            <div class="tt-box-info">
                                <div class="stat">1</div>
                                <div class="title">Tickets</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a href="clientarea.php?action=invoices" class="tile tt-custom-radius tt-single-box">
                            <i class="fad fa-credit-card"></i>
                            <div class="tt-box-info">
                                <div class="stat">229</div>
                                <div class="title">Invoices</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="client-home-cards tt-client-home-cards">
                <div class="row">
                    <div class="col-12">
                                                                                                                                                                            
                    <div menuitemname="Active Products/Services" class="card card-accent-gold" id="servicesPanel">
                        <div class="card-header">
                            <h3 class="card-title m-0">
                                <div class="float-right">
                                    <a href="clientarea.php?action=services" class="btn btn-default bg-color-gold btn-xs">
                                        <i class="fas fa-arrow-right"></i>           Mes Services
                                    </a>
                                </div>
                                <i class="fas fa-cube"></i>&nbsp; Vos Services Actifs                                                </h3>
                        </div>
                            <div class="list-group">
                                <div menuitemname="0" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Active_Products_Services-0">
                            <div class="div-service-item" data-href="clientarea.php?action=productdetails&amp;id=9">
                            <div class="div-service-status" style="width: 71px;">
                            <span class="label label-placeholder">
                            Suspended
                            </span>
                        <span class="label label-success" title="Active">
                            Active
                        </span>
                    </div>

                <div class="div-service-name">
                    <span class="font-weight-bold">
                        Weebly Website Builder - Free
                    </span>
                    <span class="text-domain">asdasdadasdas.cc</span>
                </div>
                <div class="div-service-buttons">
                            <button class="btn btn-default btn-sm btn-view-details">
                        <i aria-hidden="true" class="far fa-info-circle" title="View Details"></i>
                            <span class="sr-only">View Details</span>
                        <span>View Details</span>
                    </button>
                </div>
            </div>
        </div>
        <div menuitemname="1" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Active_Products_Services-1">
            <div class="div-service-item" data-href="clientarea.php?action=productdetails&amp;id=3">
                <div class="div-service-status" style="width: 71px;">
                <span class="label label-placeholder">
                    Suspended
                </span>
                <span class="label label-success" title="Active">
                    Active
                </span>
            </div>
            <div class="div-service-name">
            <span class="font-weight-bold">
                Web Hosting - Ultimate
            </span>
            <span class="text-domain">themetags.info</span>
        </div>
        <div class="div-service-buttons">
            <div class="btn-group btn-group-sm btn-group-primary" role="group">
                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item btn-custom-action" data-serviceid="3" data-identifier="cpanel" data-active="1">
                        <span class="loading hidden w-hidden">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                        Log in to cPanel
                    </li>
                    <li class="dropdown-item btn-custom-action" data-serviceid="3" data-identifier="webmail" data-active="1">
                    <span class="loading hidden w-hidden">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    Log in to Webmail
                    </li>
                </ul>
            </div>
            <div class="btn-group btn-group-sm btn-group-secondary" role="group">
                <button class="btn btn-default btn-sm btn-custom-action" data-serviceid="3" data-identifier="cpanel" data-active="1">
                    <span class="loading hidden w-hidden">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    Log in to cPanel
                    </button>
                        <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item btn-custom-action" data-serviceid="3" data-identifier="webmail" data-active="1">
                                    <span class="loading hidden w-hidden">
                                        <i class="fas fa-spinner fa-spin"></i>
                                    </span>
                                    Log in to Webmail
                                </li>
                            </ul>
                        </div>
                            </div>
                        <button class="btn btn-default btn-sm btn-view-details">
                            <i aria-hidden="true" class="far fa-info-circle" title="View Details"></i>
                            <span class="sr-only">View Details</span>
                            <span>View Details</span>
                        </button>
                        </div>
                    </div>
                </div>
        <div menuitemname="2" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Active_Products_Services-2" style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221);">
        
        <div class="div-service-item" data-href="clientarea.php?action=productdetails&amp;id=1">
            <div class="div-service-status" style="width: 71px;">
            <span class="label label-placeholder">
                Suspended
            </span>
            <span class="label label-success" title="Active">Active</span>
        </div>
        <div class="div-service-name">
            <span class="font-weight-bold">
                Web Hosting - Premium
            </span>
            <span class="text-domain">themetags.org</span>
            </div>
                <div class="div-service-buttons">
                    <button class="btn btn-default btn-sm btn-view-details">
                        <i aria-hidden="true" class="far fa-info-circle" title="View Details"></i>
                        <span class="sr-only">Voir les details</span>                        <span>Voir les details</span>
                    </button>
                </div>
            </div>
            </div>
            </div>
            <div class="card-footer">
                    <a href="#" class="btn-view-more pull-right float-right disabled" aria-disabled="true">View More...</a><div class="clearfix"></div>
                </div>
            </div>  
        </div>


    <div class="col-md-6 col-lg-12 col-xl-6">                            
        
        <div menuitemname="SitelockLogin" class="card card-accent-pomegranate">
            <div class="card-header">
                <h3 class="card-title m-0">
                    <i class="fas fa-bug"></i>&nbsp;Gérez votre Securité
                </h3>
                
            </div>
            <div class="card-body">
                <div class="panel-mc-sso" id="SitelockLogin">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="assets/img/marketconnect/sitelock/logo-sml.png">
                        </div>
                        <div class="col-sm-6">
                            <form action="/upgrade" method="post">
                                <input type="hidden" name="token" value="3b4e23309d50a2ed8b9e7c6a88590912110efa9a">
                                <input type="hidden" name="action" value="manage-service">

                                Choose Domain:<select name="service-id" class="form-control"><option value="a1">themetags.org</option>
                                <option value="a7">themetags.info</option></select>
                                <button class="btn btn-default btn-service-sso">
                                <span class="loading hidden w-hidden">
                                <i class="fas fa-spinner fa-spin"></i>
                                </span>
                                <span class="text">Manage</span>
                                </button>
                                <div class="login-feedback"></div>
                            </form>
                            <small>Powered by: LTC HOST</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


             
    </div>

        <div class="col-md-6 col-lg-12 col-xl-6">                                                         
            <div menuitemname="WeeblyLogin" class="card card-accent-blue">
                <div class="card-header">
                    <h3 class="card-title m-0">
                        <i class="fas fa-desktop"></i>&nbsp;Build Your Website
                    </h3>
                </div>
                <div class="card-body">
                <div class="panel-mc-sso" id="WeeblyLogin">

                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="assets/img/dragdropeditor.png">
                        </div>
                    <div class="col-sm-6">
                    <form action="/upgrade" method="post">
                        <input type="hidden" name="token" value="3b4e23309d50a2ed8b9e7c6a88590912110efa9a">
                        <input type="hidden" name="action" value="manage-service">Choose Domain:
                        <select name="service-id" class="form-control">
                            <option value="a2">themetags.org</option>
                            <option value="a44">themetags.org</option>
                            <option value="a100">themetags.org</option>
                            <option value="a109">themetags.org</option>
                            <option value="a120">themetags.org</option>
                            <option value="a129">themetags.org</option>
                            <option value="a130">themetags.org</option>
                            <option value="a162">themetags.org</option>
                            <option value="a178">themetags.org</option>
                            <option value="a179">themetags.org</option>
                            <button class="btn btn-default btn-service-sso">
                                <span class="loading hidden w-hidden"><i class="fas fa-spinner fa-spin"></i> </span>
                                <span class="text">Manage</span>
                            </button>
                            <div class="login-feedback"></div>
                    </form>

                    <small>Powered by: LTC HOST</small>
                    </div>
                </div>
            </div>
            </div>
        </div>


        <div menuitemname="Domains Expiring Soon" class="card card-accent-midnight-blue" id="expiringDomainsPanel">
            <div class="card-header">
                <h3 class="card-title m-0">
                <div class="float-right">
                    <a href="/cart/domain/renew" class="btn btn-default bg-color-midnight-blue btn-xs">
                    <i class="fas fa-sync"></i>Renew Now
                    </a>
                </div>
                <i class="fas fa-globe"></i>&nbsp; Domains Expiring Soon
                </h3>
            </div>
            <div class="card-body">
                <p>Vous avez 1 domaine(s) qui expire dans expire dans les 45 prochains jours. Renouvellez le pour avoir l'esprit tranquille.</p>
            </div>
        </div>


        <div menuitemname="Register a New Domain" class="card card-accent-emerald" id="registerDomainPanel">
            <div class="card-header">
                <h3 class="card-title m-0">
                <i class="fas fa-globe"></i>&nbsp;Enregistrer un nouveau nom de domaine
            </h3>
            </div>
            <div class="card-body">
                <form method="post" action="domainchecker.php">
                <input type="hidden" name="token" value="3b4e23309d50a2ed8b9e7c6a88590912110efa9a">
                    <div class="input-group margin-10 m-0 px-2 pb-2">
                        <input type="text" name="domain" class="form-control">
                        <div class="input-group-btn input-group-append">
                            <input type="submit" value="Register" class="btn btn-success">
                            <input type="submit" name="transfer" value="Transfer" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
        </div>

                        
        <div menuitemname="Recent News" class="card card-accent-asbestos" id="announcementsPanel">
            <div class="card-header">
                <h3 class="card-title m-0">
                    <div class="float-right">
                        <a href="/announcements" class="btn btn-default bg-color-asbestos btn-xs">
                        <i class="fas fa-arrow-right"></i>                                        View All
                        </a>
                    </div>
                    <i class="far fa-newspaper"></i>&nbsp;                            Recent News
                </h3>
            </div>
            <div class="list-group">
                <a menuitemname="0" href="/announcements/5/How-To-Offering-WordPress-Hosting-with-WHMCS.html" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Recent_News-0">
                How-To: Offering WordPress Hosting with WHMCS<br><span class="text-last-updated">Tuesday, December 28th, 2021</span>
                </a>
                <a menuitemname="1" href="/announcements/4/How-To-Using-Validation.com-to-automate-fraud-order-management.html" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Recent_News-1">
                How-To: Using Validation.com to automate fraud order management<br><span class="text-last-updated">Tuesday, December 28th, 2021</span>
                </a>
                <a menuitemname="2" href="/announcements/3/WHMCS-Version-8.3.2-Released.html" class="list-group-item list-group-item-action" id="ClientAreaHomePagePanels-Recent_News-2">
                WHMCS Version 8.3.2 Released<br><span class="text-last-updated">Tuesday, December 28th, 2021</span>
                </a>
            </div>
        </div>
            
                            
        </div>
    </div>
</div>


    </div>

    </div>
    <div class="d-lg-none sidebar sidebar-secondary">
    <div menuitemname="Client Contacts" class="mb-3 card card-sidebar">
    <div class="card-header">
    <h3 class="card-title m-0">
    <i class="far fa-folder"></i>&nbsp;                Contacts
    <i class="fas fa-chevron-up card-minimise float-right"></i>
    </h3>
    </div>
    <div class="collapsable-card-body">
    <div class="list-group list-group-flush d-md-flex" role="tablist">
    <div menuitemname="No Contacts" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Contacts-No_Contacts">
                    No Contacts Found
    </div>
    </div>
    </div>
    <div class="card-footer clearfix">
    <a href="clientarea.php?action=addcontact" class="btn btn-default btn-sm btn-block">
    <i class="fas fa-plus"></i> New Contact...
    </a>
    </div>
    </div>
    <div menuitemname="Client Shortcuts" class="mb-3 card card-sidebar">
    <div class="card-header">
    <h3 class="card-title m-0">
    <i class="fas fa-bookmark"></i>&nbsp;                Shortcuts
    <i class="fas fa-chevron-up card-minimise float-right"></i>
    </h3>
    </div>
    <div class="collapsable-card-body">
    <div class="list-group list-group-flush d-md-flex" role="tablist">
    <a menuitemname="Order New Services" href="/cart.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Shortcuts-Order_New_Services">
                    <i class="fas fa-shopping-cart fa-fw"></i>&nbsp;                                Order New Services
    </a>
                    <a menuitemname="Register New Domain" href="/domainchecker.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Shortcuts-Register_New_Domain">
                    <i class="fas fa-globe fa-fw"></i>&nbsp;                                Register a New Domain
    </a>
                    <a menuitemname="Logout" href="/logout.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Client_Shortcuts-Logout">
                    <i class="fas fa-arrow-left fa-fw"></i>&nbsp;                                Logout
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>

    </section>



    <footer id="footer" class="footer py-0 bg-dark tt-footer">
        
    </footer>

    <div id="fullpage-overlay" class="w-hidden" style="display: none;">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="/assets/img/overlay-spinner.svg" alt="">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>

    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <div class="float-left loader">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        Loading...
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

  

    
        <form action="#" id="frmGeneratePassword">
        <div class="modal fade" id="modalGeneratePassword">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gray-light text-white">
                        <h5 class="modal-title">
                            Generate Password
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger w-hidden" id="generatePwLengthError">
                            Please enter a number between 8 and 64 for the password length
                        </div>
                        <div class="form-group">
                            <label for="generatePwLength" class="col-form-label">Password Length</label>
                            <input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline" id="inputGeneratePasswordLength">
                        </div>
                        <div class="form-group">
                            <label for="generatePwOutput" class="col-form-label">Generated Password</label>
                            <input type="text" class="form-control" id="inputGeneratePasswordOutput">

                            <div class="mt-3">
                                <button type="submit" class="btn btn-default btn-sm">
                                    <i class="fad fa-key fa-fw"></i>
                                    Generate new password
                                </button>
                                <button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
                                    <i class="fad fa-copy mr-2"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
                            Copy to clipboard &amp; Insert
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js?v=03d1c3"></script>

    <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer">
            <div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav">
                <a class="lb-prev" href=""></a>
                <a class="lb-next" href=""></a>
            </div>
                <div class="lb-loader">
                    <a class="lb-cancel"></a>
                </div>
            </div>
        </div>
        <div class="lb-dataContainer">
            <div class="lb-data">
                <div class="lb-details">
                    <span class="lb-caption"></span>
                    <span class="lb-number"></span>
                </div>
                <div class="lb-closeContainer"><a class="lb-close"></a></div>
            </div>
        </div>
    </div>

</body>
</html>