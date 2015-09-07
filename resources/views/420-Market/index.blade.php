<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="publishable-key" content="{{Config::get('stripe.publishable-key')}}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
.header{background:blue;}
    </style>
    </head>
<script>
  $(function() {
    var availableTags = [





    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>@include('layouts/sximone/topbar')

<body class="full-intro background--dark">
<!-- Checkout Section -->
 <!-- Intro Section -->
        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background:url('http://i.huffpost.com/gen/1192715/images/o-MARIJUANA-DISPENSARY-facebook.jpg')">
             <div class="container">
                <div class="row title">
                    <h1>420 Windy City Market</h1>

                        <form class="contact-form" id="contact" role="form">


                        </form>


                </div>
            </div>
        </section>
        <!-- End Intro Section -->

        <!-- Shop Item Section -->
        <section id="shop-item" class=" ptb-sm-80">
            <div class="container">
                <!-- Sort List -->
                <div class="row ">
                    <div class="col-md-12">
                        <div class="shop-filter mb-15">
                            <div class="float-right float-none-xs">
                                <p>1–9 of 10 results</p>
                            </div>
                            <div class="float-left float-none-xs">
                                <form>
                                    <label>Sort By</label>
                                    <select class="input-md round">
                                        <option>Default Sorting</option>
                                        <option>Popular</option>
                                        <option>Latest</option>
                                        <option>Average Price</option>
                                        <option>High Price</option>
                                        <option>Low Price</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sort List -->

                <!-- Shop Item -->
                <div class="row container-grid">
                    @if(count($products))
                        @foreach($products as $product)
                                
                            <div class="nf-item col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="{{$product->img}}" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">

                                                    <a class="btn  btn-line-xs btn-white-line" href="420-Market/{{$product->download}}"><i class="fa fa-shopping-cart"></i>View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="420-Market/{{$product->slug}}">
                                            <h6 class="shop-item-name">{{$product->name}}</h6>
                                        </a>
                                        <div class="shop-item-price"><span>{{$product->price}}</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>
                        @endforeach
                    @else <p>No Posts Returned</p>
                    @endif





                


                </div> </div>
                <!-- End Shop Item -->

                <!-- Pagination Nav -->
                <div class="pagination-nav mtb-30">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- End Pagination Nav -->
            </div>
        </section>
        <!-- End Shop Item Section -->







        <!-- End Checkout Section -->
        <!-- END CONTENT -->
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

        <!-- End CONTENT -->
    
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



<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=263498(font-family=Boucherie+Sans)&sid=263503(font-family=Boucherie+Cursive)&sid=263508(font-family=Boucherie+Cursive+Bold)&key=NQdrvX5hL5',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
                <script type="text/javascript" src="{{ asset('sximo/js/billing.js')}}"></script>
</html>
