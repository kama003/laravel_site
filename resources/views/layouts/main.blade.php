<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
    <head>
        <!-- Basic Page Needs -->
    
        @stack('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Supreme Animation -  @yield('title') </title>

      
       
        
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <!-- Responsive -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
        
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/style4/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/style4/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/style4/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/style4/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/style4/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/style4/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/style4/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/style4/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/style4/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/style4/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/style4/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/style4/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/style4/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/style4/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('images/style4/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
       
        <style>
            .service_active{
                    color: #8dbe37;
                    border-bottom: 2px solid #8dbe37;
            }
            #typing{
                color : #96cc39;
            }
        </style>
    </head>
    <body>
     <div id="loading-overlay">
        <div class="loader">
            <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div>
        </div>
    </div> <!-- /.loading-overlay -->

    <div class="top style4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="flat-iconbox style4 clearfix">
                      

                        <div class="iconbox iconbox-info-top clearfix">
                            <div class="iconbox-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="iconbox-content">
                                <h6 class="heading">
                                    <a href="#">Contact us</a>
                                </h6>
                                <p>+91 7837722888</p>
                                <p>+1 (804) 292-0055</p>
                                 
                            </div>
                        </div>
                        <!--<div class="iconbox iconbox-info-top clearfix">-->
                        <!--    <div class="iconbox-icon">-->
                        <!--        <span class="fa fa-map-marker"></span>-->
                        <!--    </div>-->
                        <!--    <div class="iconbox-content">-->
                        <!--        <h6 class="heading">-->
                        <!--            <a href="#">Supreme Animation</a>-->
                        <!--        </h6>-->
                        <!--        <p>5501 National Rd E, Richmond Indiana , USA</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="iconbox iconbox-info-top clearfix">
                            <div class="iconbox-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="iconbox-content">
                                <h6 class="heading">
                                    <a href="#">Supreme Animation</a>
                                </h6>
                                <p>India,Chandigarh </p>
                                <p> USA,5501 National Rd E, Richmond Indiana</p>
                            </div>
                        </div>
                    </div> <!-- /.flat-iconbox -->

                    <div id="logo">
                        <a href="/"><img src="https://essitops.sirv.com/supremesite%20images/logo.svg" alt="logo" width="128" height="28" data-retina="https://essitops.sirv.com/supremesite%20images/logo.svg" data-width="128" data-height="26"></a>
                    </div> <!-- /#logo -->
                </div> <!-- /.col-md-12 -->
            </div>
        </div>
    </div> <!-- /.header-top -->

    <header id="header" class="style4" >
        <div class="container container-header">
            <div class="row" >
                <div class="header-wrap style4 clearfix">
                    <div class="mobile-button">
                        <span></span>
                    </div> <!-- /.mobile-button -->

                    

                    

                    <div class="nav-wrap style4 ">
                        <nav id="mainnav" class="mainnav ">
                            <ul class="menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a  href="/" >HOME</a>
                                   
                                </li>
                                <li class="{{ Request::is('about*') ? 'active' : '' }}">
                                    <a  href="/about" >ABOUT US</a>
                                </li>
                                <li>
                                    <a >SERVICE</a>
                                    <ul class="sub-menu">
                                        <li ><a href="/3DRigging-animation" >3D Rigging & Animation</a></li>
                                        <li><a href="/3Dlighting-rendering" >3D Lighting & Rendering</a></li>
                                        <li><a href="/MotionGraphic-vfx" >Motion Graphic & VFX</a></li>
                                        <li><a href="/Explainervideos" >Explainer Videos</a></li>
                                        <li><a href="/Graphicdesigning" >Graphic Designing</a></li>
                                        <li><a href="/3Dmodeling" >3D Modeling</a></li>
                                        <li><a href="/3Darchitecture" >3D Architecture</a></li>
                                        <li><a href="/3Dprinting" >3D Printing</a></li>
                                        <li><a href="/ar-vr" >AR & VR </a></li>
                                       
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="{{ Request::is('portfolio*') ? 'active' : '' }}">
                                    <a  href="/portfolio" >PORTFOLIO</a>
                                   
                                </li>
                                <li class="{{ Request::is('blog*') ? 'active' : '' }}"> 
                                    <a  href="/blog" >BLOG</a>
                                   
                                </li>
                               
                                
                                <li class="{{ Request::is('planner*') ? 'active' : '' }}">
                                    <a  href="/planner">CONTACT</a>
                                </li>
                                  <li class="{{ Request::is('experiments*') ? 'active' : '' }}">
                                    <a  href="/experiments">EXPERIMENTS</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav> <!-- /#mainnav -->
                    </div> <!-- .nav-wrap -->
                </div> <!-- /.header-wrap -->
            </div> <!-- /.row -->
        </div> <!-- container -->
    </header> <!-- /#header -->

    @yield('content')    

    <footer id="footer ">  
   
            <div class="widget-footer  pd-bottom-60">
             <blockquote class="d-flex justify-content-center blockquote_footer pb-4">
	<p>Choose a job you love,and you will never have <br>to work a day in your life.</p>
	  </blockquote ><br>
                <div class="overlay"></div>   
                
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-logo-info">
                                  <h4 class="widget-title text-white">Offices</h4>
                        
                                <div class="widget-text">
                                 
                                  <ul class="list-unstyled info">
          <p>
          <li>
            <h6 class=" text-white data-hover"> USA</h6>
            <p class="data-hover">5501 National Rd E,<br>
                Richmond Indiana , USA<br>
                 +1 (804) 292-0055
            </p>
          </li>
        </p>
        <br>
        <p>
          <li>
            <h6 class=" text-white data-hover">INDIA</h6>
            <p class="data-hover">Supreme Animation <br> Chandigarh Sector-33 , India
            <br> +91 7837722888,+91 9646168597


            </p>
          </li>
        </p>
          </ul>                              
                                </div>
                            </div> <!-- /.widget-logo-info -->
                        </div> <!-- /.col-md-4 -->

                     

                        <div class="col-lg-4 col-md-6 ">
                            <div class="widget widget-quick-link style4 ">
                                <h4 class="widget-title">Quick link</h4>
                                <ul class="text-center">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us </a></li>
                                    <li><a href="portfolio.php">portfolio</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                    <li><a href="experiment.php">Experiments</a></li>
                                </ul>
                            </div> <!-- /.widget-quick-link -->
                        </div> <!-- /.col-md-2 -->

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget-subscribe style4">
                                <h4 class="widget-title">Contact with Us</h4>
                               
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/Supremeanimation/ " title="facebook" class="data-hover">
                                            <i class="fa fa-facebook-square"></i> <a class="mb-3" style="font-size:17px;">Facebook</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/supremeanim" title="twitter" class="data-hover">
                                            <i class="fa fa-twitter-square"> </i> <a class="mb-3" style="font-size:17px;">twitter</a>
                                        </a>
                                    </li>
                                    <br>
                                    <br>
                                    <li>
                                        <a href="https://www.instagram.com/supremeanimationstudio/" title="instagram" class="data-hover">
                                            <i class="fa fa-instagram"></i> <a class="mb-3" style="font-size:17px;">Instagram</a>
                                           
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/supremeanimationstudio/" title="linkedin" class="data-hover">
                                            <i class="fab fa-pinterest-square"> </i> <a class="mb-3" style="font-size:17px;">printest </a>
                                        </a>
                                    </li>
                                   
                                </ul>
                                
                            </div> <!-- /.widget-subscribe -->
                        </div> <!-- /.col-md-3 -->
                    </div>  <!-- /.row -->  
                </div> <!-- /.container -->
            </div> <!-- /.footer-widget -->
        </footer> <!-- /#footer -->

        <div class="bottom style4 pd-top-20 pd-bottom-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                    Supreme Animation All right reserved © 2019 </p>
                    </div>
                </div>
            </div>
        </div> <!-- /.bottom -->

        <!--<a id="scroll-top"></a>  /#scroll-top -->

<!-- /WhatsHelp.io widget -->
      <!-- Javascript -->
        
        <script src="{{ URL::to('js/jquery.min.js') }}" ></script>
        <script src="{{ URL::to('js/owl.carousel.js') }}" ></script> 
        <script src="{{ URL::to('js/plugins.js') }}" ></script>
        <script src="{{ URL::to('js/bootstrap.min.js') }}" ></script>
        <script src="{{ URL::to('js/flex-slider.min.js') }}" ></script>
        <script src="{{ URL::to('js/jquery-countTo.js') }}" ></script>
        <script src="{{ URL::to('js/jquery-fancybox.js') }}" ></script>
        <script src="{{ URL::to('js/equalize.min.js') }}" ></script>
        <script src="{{ URL::to('js/jquery-isotope.js') }}" ></script>
        <script src="{{ URL::to('js/waypoints.min.js') }}" ></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
      
        <script src="{{ URL::to('js/jquery.validate.min.js') }}" ></script> 
        <script src="{{ URL::to('js/main.js') }}" ></script>

        <!-- Slider -->
        <script src="{{ URL::to('js/rev-slider/js/jquery.themepunch.tools.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/jquery.themepunch.revolution.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider.js') }}" ></script>
        
        <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.actions.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.migration.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}" ></script>
        <script src="{{ URL::to('js/rev-slider/js/extensions/revolution.extension.video.min.js') }}" ></script>
        <script>
            var typed = new Typed('#typing', {
             strings: ["3D Character Model", "Print Ready Models","3D Animation", "Motion Graphic Videos","Games"],
             typeSpeed: 30,
             loop: true,
            stringsElement: null,
            // typing speed
            typeSpeed: 50,
            // time before typing starts
            startDelay: 1200,
            // backspacing speed
            backSpeed: 20,
            // time before backspacing
            backDelay: 500,
            });
        </script>
    </body>
</html>