<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> {{ CNF_APPNAME }} | {{ $pageTitle}} </title>
<meta name="keywords" content="{{ $pageMetakey }}">
<meta name="description" content="{{ $pageMetadesc }}"/>
<link rel="shortcut icon" href="" type="image/x-icon">	

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="{{ asset('sximo/themes/420/css/normalize.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('sximo/themes/420/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/ionicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/jPushMenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('sximo/themes/420/css/plugin/animate.css') }}" rel="stylesheet" type="text/css" />


<!-- Anthony Search Bar-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="{{ asset('sximo/themes/420/css/style-420.css') }}" rel="stylesheet" type="text/css" />

	<style>
@font-face {
    font-family: 'modern_sansregular';
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot") }}');
    src: url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.eot?#iefix") }}') format('embedded-opentype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff2") }}') format('woff2'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.woff") }}') format('woff'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.ttf") }}') format('truetype'),
         url('{{ asset("sximo/themes/420/fonts/moderne_sans-webfont.svg#modern_sansregular") }}') format('svg');
    font-weight: normal;
    font-style: normal;
}
    </style>
  	</head>



<body class="full-intro background--dark">
@include('layouts/sximone/topbar')
<div style="min-height:400px;">
@include($pages)

</div>
<div class="clr"></div>

        <!-- FOOTER -->
        <footer class="footer pt-80">
            <div class="container">
                <div class="row mb-60">
                    <!-- Logo -->
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-xs-30">
                        <a class="footer-logo" href="home.html">
                            <img src="img/logo-black.png" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Newsletter -->
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-xs-30">
                        <div class="newsletter">
                            <form>
                                <input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
                                <button class="newsletter-btn btn btn-xs btn-white" type="submit" value=""><i class="fa fa-angle-right mr-0"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Newsletter -->

                    <!-- Social -->
                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!--Footer Info -->
                <div class="row footer-info mb-60">
                    <div class="col-md-3 col-sm-12 col-xs-12 mb-sm-30">
                        <p class="mb-xs-0">{{ $pageMetadesc }}</p>
                        <a class="btn-link-a" href="about-1.html">Read More</a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                        <ul class="link">
                            <li><a href="blog-grid-3col.html">Blog</a></li>
                            <li><a href="portfolio-grid-3col.html">Portfolio</a></li>
                            <li><a href="login-register.html">Login & Signup</a></li>
                            <li><a href="faq-1.html">FAQ</a></li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="service-1.html">Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30">
                        <ul class="link">
                            <li><a href="contact-1.html">Contact Us</a></li>
                            <li><a href="shop-checkout.html">Shopping Cart</a></li>
                            <li><a href="404-error-1.html">404 Error</a></li>
                            <li><a href="home.html">Home</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <p>502, DieSachbearbeiter, Schönhauser Allee, 167c10435 Berlin,Germany.</p>
                        <ul class="link-small">
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a></li>
                            <li><a><i class="fa fa-phone left"></i>+40 (0) 012 345 6789</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Footer Info -->
            </div>

            <hr />


        </footer>
        <!-- END FOOTER -->
<div class="modal fade" id="sximo-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-default">
		
			<button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Modal title</h4>
		</div>
		<div class="modal-body" id="sximo-modal-content">
	
		</div>
	</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
	
<script>
	jQuery(document).ready(function() {

		window.prettyPrint && prettyPrint();
	});
</script>	
</body> 
  <script src="{{ asset('sximo/themes/420/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.flexslider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/background-check.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fitvids.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.viewportchecker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.stellar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.colorbox-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jPushMenu.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/jquery.fs.tipper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/plugin/mediaelement-and-player.min.js')}}"></script>
    <script src="{{ asset('sximo/themes/420/js/theme.js')}}" type="text/javascript"></script>
    <script src="{{ asset('sximo/themes/420/js/navigation.js')}}" type="text/javascript"></script>
    <script src="//use.typekit.net/jqj6cmj.js')}}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</html>


