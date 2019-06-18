<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eli Health System| Global Health Care</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="assets/images/favicon.ico">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!-- Google Font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <!-- Start of hsnow Zendesk Widget script -->
{{--    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=18e64e89-bb90-4675-b7d7-52fcc71f0749"> </script>--}}

    <style>
    </style>
    <!-- End of hsnow Zendesk Widget script -->


</head>

<body>



<div id="wrapper" class="wrapper">

    <!-- Header Area -->
    <div class="header">

        <!-- Header Top Area -->
        <div class="header-toparea">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-12">
                        <div class="header-topinfo">
                            <ul>
                                <li><a href="tel://{{ setting('site.phone') }}"><i class="fa fa-phone"></i>
                                        {{ setting('site.phone') }}</a></li>
                                <li><a href="mailto://{{ setting('site.email') }}"><i class="fas fa-envelope"></i>
                                        {{ setting('site.email') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4 col-12">
                        <div class="header-topsocial">
                            <ul>
                                <li><a href="{{ setting('social.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ setting('social.facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ setting('social.skype') }}"><i class="fab fa-skype"></i></a></li>
                                <li><a href="{{ setting('social.pinterest') }}"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header-bottomarea">
            <div class="container">
                <div class="header-bottominner">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ Voyager::image(setting('site.logo')) }}" alt="logo">
                        </a>
                    </div>
                    <nav class="tm-navigation">
                        <ul>
                            {{(menu('site','menus.site'))}}
                            <li class="funds"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UMKPCJA8HC73Y&source=url" >Donate</a></li>
                        </ul>
                    </nav>

</div>

                    <div class="header-mobilemenu clearfix">
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

        </div>


        @yield('content')


        <!-- Footer Area -->
        <footer class="footer" data-bgimage="{{ asset('assets/images/bg/bg-image-1.jpg') }}" data-black-overlay="9">

            <!-- Footer Widgets -->

            <!--// Footer Widgets -->

            <!-- Footer -->
            <div class="footer-bottomarea">
                <div class="container">
                    <p class="footer-copyright">© <?php echo date("Y"); ?>.  Eli Health System | All Rights Reserved<a href="https://www.hsnow.org"> hsnow.org</a></p>
                </div>
            </div>
            <!--// Footer -->

        </footer>
        <!--// Footer Area -->



    </div>

    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!--// Js Files -->
</div>

</body>


</html>
