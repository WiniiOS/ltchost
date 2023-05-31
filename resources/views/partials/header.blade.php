<!--header section start-->
<header id="header" class="header-main">
        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">
                    <!--logo start-->
                    <a class="navbar-brand pt-0" href="{{ route('home') }}">
                        <img sizes="108x25" src="{{ url('assets/img/logo/white.png') }}" alt="logo" />
                    </a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
                        <span id="hamburgerTrigger">
                        <span class="fas fa-bars"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                                <a class="nav-link custom-nav-link " href="{{ route('home') }}" > Accueil </a>
                            </li>
                            <!--home end-->
                            
                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                                <a class="nav-link custom-nav-link " href="{{ route('shared-hosting') }}" > Hébergement Web Mutualisé </a>
                            </li>
                            <!--hosting end-->

                            <!--domain start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                                    Noms de domaine
                                </a>
                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu main-sub-menu" style="width: 660px;" aria-labelledby="domainMegaMenu">
                                    <div class="row g-0">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="menu-item-wrap p-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="{{ route('showDomainResultPage') }}">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-globe me-2 color-primary"></i>
                                                            <span class="u-header__promo-title"> Nom de Domaine Disponible </span>
                                                        </div>
                                                        <small class="u-header__promo-text">Trouvez le nom de domaine parfait</small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->

                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="domain-transfer">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-exchange-alt me-2 color-accent"></i>
                                                            <span class="u-header__promo-title"> Transfert de Nom de Domaine </span>
                                                        </div>
                                                        <small class="u-header__promo-text">
                                                            Vous souhaitez transferer un domaine à LtcHost ?
                                                        </small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                  
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 gray-light-bg custom-radius-right">
                                            <div class="menu-item-wrap p-4">
                                                <h6>Service d'hebergement Web</h6>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1">
                                                        <small>
                                                            <span class="fas fa-check-circle text-success me-2" ></span>
                                                            <strong>Flexible</strong> CPanel facile d'utilisation
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span class="fas fa-check-circle text-success me-2"></span>
                                                            <strong>99%</strong>
                                                            Guarantie Performance
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span class="fas fa-check-circle text-success me-2"></span>
                                                            <strong>45-Jours</strong>
                                                            Guarantie Satisfait ou remboursée
                                                        </small>
                                                    </li>
                                                    <li class="py-1">
                                                        <small>
                                                            <span class="fas fa-check-circle text-success me-2"></span>
                                                            <strong> SSL Gratuit</strong>
                                                            Certificat Inclu
                                                        </small>
                                                    </li>
                                                </ul>
                                                <a class="btn btn-tertiary btn-block mt-3" href="#">
                                                    En savoir plus
                                                    <span class="fas fa-angle-right ms-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--domain end-->


                            <!-- <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="{{ route('blog') }}">
                                    Blog
                                </a>
                            </li> -->

                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="{{ route('about') }}">
                                    A Propos
                                </a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="{{ route('contact') }}">
                                    Contactez-nous
                                </a>
                            </li>

                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="text-muted" href="{{ route('panier') }}" >
                                <span class="fa fa-shopping-cart pe-2"></span> <span class="badge bg-secondary">{{ Cart::count() }}</span>
                                </a>
                            </li>

                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="{{ route('connexion') . '?previous=' . Request::fullUrl() }}">
                                    Connexion
                                </a>
                            </li>
                            

                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="text-muted" href="{{ route('showSpace') }}" >
                                    <span class="fa fa-user pe-2"></span> Espace Client
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->


        
        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1">
            
            <div class="offcanvas-header border-bottom">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('assets/img/logo/white.png') }}" alt="logo" class="img-fluid" />
                </a>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body offcanvas-menu-wrap">
                <!--offcanvas menu list start-->
                <ul class="navbar-nav">

                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                        <a class="nav-link custom-nav-link " href="{{ route('home') }}" > Accueil </a>
                    </li>
                    <!--home end-->
                    
                    <!--hosting start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                        <a class="nav-link custom-nav-link " href="{{ route('shared-hosting') }}" > Hébergement Web Mutualisé </a>
                    </li>
                    <!--hosting end-->

                    <!--domain item start-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Nom de domaine
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0">
                                <div class="">
                                    <div class="menu-item-wrap p-3">
                                        
                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="{{ route('showDomainResultPage') }}">
                                                <div class="d-flex align-items-center pb-1">
                                                    <i class="fas fa-globe me-2 color-primary"></i>
                                                    <span class="u-header__promo-title"> Nom de Domaine Disponible </span>
                                                </div>
                                                <small class="u-header__promo-text">Trouvez le nom de domaine parfait</small>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->

                                        <!--menu title with subtitle and icon item start-->
                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="{{ route('domain-transfer') }}">
                                                <div class="d-flex align-items-center pb-1">
                                                    <i class="fas fa-exchange-alt me-2 color-accent"></i>
                                                    <span class="u-header__promo-title"> Transfert de Nom de Domaine </span>
                                                </div>
                                                <small class="u-header__promo-text">
                                                    Vous souhaitez transferer un domaine à LtcHost ?
                                                </small>
                                            </a>
                                        </div>
                                        <!--menu title with subtitle and icon item end-->
                                                
                                    </div>
                                </div>
                                <div class="gray-light-bg">
                                    
                                    <div class="menu-item-wrap p-4">
                                        <h6>Service d'hebergement Web</h6>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1">
                                                <small>
                                                    <span class="fas fa-check-circle text-success me-2" ></span>
                                                    <strong>Flexible</strong> CPanel facile d'utilisation
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span class="fas fa-check-circle text-success me-2"></span>
                                                    <strong>99%</strong>
                                                    Guarantie Performance
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span class="fas fa-check-circle text-success me-2"></span>
                                                    <strong>45-Jours</strong>
                                                    Guarantie Satisfait ou remboursée
                                                </small>
                                            </li>
                                            <li class="py-1">
                                                <small>
                                                    <span class="fas fa-check-circle text-success me-2"></span>
                                                    <strong> SSL Gratuit</strong>
                                                    Certificat Inclu
                                                </small>
                                            </li>
                                        </ul>
                                        <a class="btn btn-tertiary btn-block mt-3" href="#">
                                            En savoir plus
                                            <span class="fas fa-angle-right ms-2"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <!--domain item end-->

                    <!--blog item start-->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li> -->
                    <!--blog item end-->

                    <!--about item start-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">A propos</a>
                    </li>
                    <!--about item end-->

                    <!--contact item start-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                    </li>
                    <!--contact item end-->

                    <li class="nav-item header-nav-last-item d-flex align-items-center">
                        <a class="text-muted" href="{{ route('panier') }}" >
                            <span class="fa fa-shopping-cart pe-2"></span> <span class="badge bg-secondary">{{ Cart::count() }}</span>
                        </a>
                    </li>

                    <li class="nav-item header-nav-last-item d-flex align-items-center">
                        <a class="text-muted" href="{{ route('showSpace') }}" >
                            <span class="fa fa-user pe-2"></span>
                        </a>
                    </li>

                </ul>
                <!--offcanvas menu list end-->
            </div>
        </div>
        <!--offcanvas menu end-->
    </header>
    <!--header section end-->