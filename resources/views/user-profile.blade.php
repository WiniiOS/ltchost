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


    <!--  -->


    

    <h3 class="card-title">{lang key='userProfile.profile'}</h3>
    <div class="card tt-custom-card bg-gray-light mb-4">
        <div class="card-body">
            <form method="post" action="{routePath('user-profile-save')}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputFirstName" class="col-form-label">
                                Franck
                            </label>
                            <input
                                type="text"
                                name="firstname"
                                id="inputFirstName"
                                value="franck"
                                class="form-control"
                                
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputLastName" class="col-form-label">
                                Ndi
                            </label>
                            <input
                                type="text"
                                name="lastname"
                                id="inputLastName"
                                value="Ndi"
                                class="form-control"
                            >
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mr-2" type="submit" name="save" value="save" />
                <input class="btn btn-default" type="reset" value="reset" />
            </form>

        </div>
    </div>

    <h3 class="card-title">Email</h3>
    <div class="card tt-custom-card bg-gray-light">
        <div class="card-body">
            <span>
                    <!-- <span class="label label-default">Utilisateur non verifié</span> -->
                    <span class="label label-success">Verifié</span>
            </span>

            <form method="post" action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail" class="col-form-label">
                                email
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="inputEmail"
                                value="fr@gmail.com"
                                class="form-control"
                            >
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mr-2" type="submit" name="save" value="save" />
                <input class="btn btn-default" type="reset" value="cancel" />
            </form>

        </div>
    </div>



    <!--  -->






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