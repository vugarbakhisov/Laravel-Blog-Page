<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('front/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('front/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

   @yield('css')

    <script src="{{asset('front/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="upper-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <p>Black White</p>
                        </div>
                        <div class="col-xs-6 col-md-push-2 text-right">
                            <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                            <p class="btn-apply"><a href="#">İNDI MÜRACIƏT ET</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="{{route('index')}}">Black White</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li><a href="{{route('index')}}"><span>Ana Səyfə</span></a></li>
                            
                                <li class="has-dropdown">
                                    <a href="">Kurslar</a>
                                  
                                    <ul class="dropdown" style="display: none;">
                                        @foreach($AppCompose as $k)
                                            <li><a href="{{route('categories.detail',$k->id)}}">{{$k->category}}</a></li>
                                        @endforeach
                                        <li><a href="{{route('categories')}}">Bütün Kateqoriyalar</a></li>
                                    </ul>
                                        
                                </li>
                                <li><a href="{{route('news')}}">Yeniliklər</a></li>
                               
                                <li><a href="{{route('contact')}}"><span>Əlaqə</span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
       
       @if(Request::is('/'))
<aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                  @foreach($S as $s)
                <li style="background-image: url({{$s->sekil}})">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>{{$s->ad}}</h1>
                                    <p><a href="#" class="btn btn-primary btn-lg btn-learn">İndi qeydiyyatdan keç</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
              
                </ul>
            </div>
        </aside>
    @endif
    


 @yield('index') 


<footer id="colorlib-footer">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>VB BAXSHOV</h4>
                        <p>Bu Səyfə ilkdir...Ugurlarimiz bol olsun...</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-3 colorlib-widget">
                        <h4>Səyfə Haqqinda</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#"><i class="icon-check"></i>Bizim haqqımızda</a></li>
                                <li><a href="#"><i class="icon-check"></i>Təqdimatlar</a></li>
                                <li><a href="#"><i class="icon-check"></i> Kurslar</a></li>
                                <li><a href="#"><i class="icon-check"></i>Hadisələr</a></li>
                                <li><a href="#"><i class="icon-check"></i>Xəbərlər</a></li>
                                <li><a href="#"><i class="icon-check"></i> Əlaqə</a></li>
                            </ul>
                        </p>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>ƏLAQƏ MƏLUMATI</h4>
                        <div class="f-blog">
  <a href="blog.html" class="blog-img" style="background: url({{asset('front/images/blog-1.jpg')}})">
                            </a>
                            <div class="desc">
                                <h2><a href="blog.html">Mobil Proqramlaşdirma</a></h2>
                                <p class="admin"><span>30 April 2019</span></p>
                            </div>
                        </div>
                        
                        <div class="f-blog">
<a href="blog.html" class="blog-img" style="background-image: url({{asset('front/images/blog-3.jpg')}})">
                            </a>
                            <div class="desc">
                                <h2><a href="blog.html">PHP Proqramlama</a></h2>
                                <p class="admin"><span>30 April 2019</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>ƏLAQƏ MƏLUMATI</h4>
                        <ul class="colorlib-footer-links">
                            <li></li>
                            <li><a href=""><i class="icon-phone"></i></a></li>
                            <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i></a></li>
                            <li><a href="http://luxehotel.com"><i class="icon-location4"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
ORGİNAL &copy;<script>document.write(new Date().getFullYear());</script>Bu Seyfe Bir İlkdir....<i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BV</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</small><br> 
                                <small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank"></a>YOUTUBE <a href="http://pexels.com/" target="_blank">BV BLOG</a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('front/js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/magnific-popup-options.js')}}"></script>
    <!-- Counters -->
    <script src="{{asset('front/js/jquery.countTo.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('front/js/main.js')}}"></script>

 @yield('js') 

    </body>
</html>

