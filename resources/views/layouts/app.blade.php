<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <title>{{ __('visa.HomePageTitle') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="LTC Group VISA UBA" name="description">
        <meta content="{{ __('visa.HomePageTitle') }}" name="keywords">
        <!-- <meta content="{{ __('visa.FormPageTitle') }}" name="keywords"> -->
        <!-- images réseaux -->
        <meta property="og:image" content="https://ltcprepaidcard.com/imports/img/about.png" />
        <meta property="og:title" content="LTC GROUP " />
         <!-- Favicons -->
        <link href="{{ asset('imports/img/logo.png') }}" rel="icon">
        <link href="{{ asset('imports/img/logo.png') }}" rel="apple-touch-icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('imports/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('imports/lib/animate/animate.min.css') }}" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('imports/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{ asset('imports/css/style.css') }}" rel="stylesheet">

       
        
    </head>
    <body>

        @include('partials.topbar')

        @yield('content')

        @include('partials.footer')

        <!-- Vendor JS Files -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('imports/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('imports/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('imports/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('imports/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('imports/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- Template Main JS File -->
        <script src="{{ asset('imports/js/main.js') }}"></script>
            
    </body>
</html>