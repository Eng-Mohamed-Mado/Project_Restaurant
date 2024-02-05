<!doctype html>
<html lang="en">
    <head>
            <meta charset="UTF-8" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi"
            />
            <title>@yield("title") | Lavida </title>
            <link rel="icon" type="image/png" href="{{ asset( 'assets') }}/images/favicon.png" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/all.min.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/bootstrap.min.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/slick.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/nice-select.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/custom_spacing.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/venobox.min.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/animate.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/jquery.exzoom.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/style.css" />
            <link rel="stylesheet" href="{{ asset( 'assets') }}/css/responsive.css" />
            @yield('style')
    </head>

    <body>

        
   <!--=============================
        TOPBAR START
    ==============================-->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-md-8">
                    <ul
                        class="topbar_info d-flex flex-wrap d-none d-sm-flex"
                    >
                        <li>
                            <a href="mailto:lavida@gmail.com"
                                ><i class="fas fa-envelope"></i>
                                lavida@gmail.com</a
                            >
                        </li>
                        <li class="d-none d-md-block">
                            <a href="callto:+20011111111"
                                ><i class="fas fa-phone-alt"></i>
                                +20011111111</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6 col-sm-6 col-md-4">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li>
                            <a href="#"
                                ><i class="fab fa-facebook-f"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i class="fab fa-linkedin-in"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->        

    <!--============================= 
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="index-2.html">
                <img
                    src="{{ asset( 'assets') }}/images/logo.png"
                    alt="Oriental"
                    class="img-fluid"
                    style="
                        max-width: 133px !important;
                        max-height: 200px !important;
                    "
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="far fa-bars menu_icon_bar"></i>
                <i class="far fa-times close_icon_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link {{Request::is('/') ? 'active' : ''}}"
                            aria-current="page"
                            href="{{route('home')}}"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Request::is('about')  ? 'active' : ''}}" href="{{route('about')}}">about</a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link {{Request::is('menu') ? 'active' : ''}}" href="{{route('menu')}}">menu</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Request::is('chefs') ? 'active' : ''}}" href="{{route('chefs')}}">chefs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Request::is('pages')? 'active' : ''}}" href="#"
                            >pages <i class="far fa-angle-down"></i
                        ></a>
                        <ul class="droap_menu">
                            <li>
                                <a class="{{Request::is('menu-details') ? 'active' : ''}}" href="{{route('menu-details')}}">menu details</a>
                            </li>
                            <li>
                                <a class="{{Request::is('blog-details') ? 'active' : ''}}"  href="{{route('blog-details')}}">blog details</a>
                            </li>
                            <li><a class="{{Request::is('cart-view') ? 'active' : ''}}" href="{{route('cart-view')}}">cart view</a></li>
                            <li><a  class="{{Request::is('checkout') ? 'active' : ''}}" href="{{route('checkout')}}">checkout</a></li>
                            <li><a  class="{{Request::is('payment') ? 'active' : ''}}" href="{{route('payment')}}">payment</a></li>
                   
                            <li><a href="404.html">404/Error</a></li>
                            <li><a class="{{Request::is('faq') ? 'active' : ''}}" href="{{route('faq')}}">FAQs</a></li>
                            <li><a class="{{Request::is('signin') ? 'active' : ''}}" href="{{route('signin')}}">sign in</a></li>
                            <li><a class="{{Request::is('signup') ? 'active' : ''}}" href="{{route('signup')}}">sign up</a></li>
                            <li>
                                <a href="forgot_password.html"
                                    >forgot password</a
                                >
                            </li>
                            <li>
                                <a class="{{Request::is('privacy-policy') ? 'active' : ''}}" href="{{route('privacy-policy')}}"
                                    >privacy policy</a
                                >
                            </li>
                            <li>
                                <a href="terms_condition.html"
                                    >terms and condition</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('blog')? 'active' : ''}}" href="{{route('blog')}}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact')? 'active' : ''}}" href="{{route('contact')}}">contact</a>
                    </li>
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    @auth
                        <li>
                            <a class="cart_icon " href="{{route('cart-view')}}"
                                ><i class="fas fa-shopping-basket"></i>
                                <span>05</span></a
                            >
                        </li>
                    @endauth
                  
            
                    </div>
                    <li>
                        @auth
                        <a  href="{{route('profile')}}" aria-hidden="true"
                        ><i class="fas fa-user"></i
                        ></a>
                        @endauth
                        @guest
                        <a href="{{route('signup')}}"
                        ><span class="btn btn-primary" style="background-color:#ff7c08; border-color:#ff7c08;">Sign up</span></a>
                        <a href="{{route('signin')}}"
                        ><span class="btn btn-primary" style="background-color:#322d5a; border-color:#322d5a;">Sign in </span></a>
                        @endguest
                      
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=============================
    MENU END
    ==============================-->
    {{-- Start Content --}}
    
    @yield('content')
    {{-- End Content --}}
 <!--=============================
        FOOTER START
    ==============================-->
    <footer style="background: url({{ asset( 'assets') }}/images/footer_bg.jpg);">
        <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_20">
            <div class="container wow fadeInUp" data-wow-duration="1s">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-lg-4 col-sm-9 col-md-7">
                        <div class="footer_content">
                            <a class="footer_logo" href="index-2.html">
                                <img src="{{ asset( 'assets') }}/images/footer_logo.png" alt="Oriental" class="img-fluid w-100">
                            </a>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui
                                placeat inventore consectetur repellendus optio debitis.</span>
                            <ul class="social_link d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-5 col-md-5">
                        <div class="footer_content">
                            <h3>Short Link</h3>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('menu')}}">Our Service</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-6 col-md-5 order-md-4">
                        <div class="footer_content">
                            <h3>Help Link</h3>
                            <ul>
                                <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="{{route('about')}}">About us</a></li>
                                <li><a href="{{route('contact')}}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-9 col-md-7 order-lg-4">
                        <div class="footer_content">
                            <h3>contact us</h3>
                            <p class="info"><i class="fas fa-phone-alt"></i> +20 011 1111 1111</p>
                            <p class="info"><i class="fas fa-envelope"></i> lavidagmail.com</p>
                            <p class="info"><i class="far fa-map-marker-alt"></i> Cairo , El-mokattam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom d-flex flex-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_bottom_text">
                            <p>Copyright ©<b> Team Lavida</b> 2023. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=============================
        FOOTER END
    ==============================-->

      <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
    SCROLL BUTTON END
==============================-->

    <!--jquery library js-->
    <script src="{{ asset( 'assets') }}/js/jquery-3.6.0.min.js"></script>
    <!--bootstrap js-->
    <script src="{{ asset( 'assets') }}/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="{{ asset( 'assets') }}/js/Font-Awesome.js"></script>
    <!-- slick slider -->
    <script src="{{ asset( 'assets') }}/js/slick.min.js"></script>
    <!-- isotop js -->
    <script src="{{ asset( 'assets') }}/js/isotope.pkgd.min.js"></script>
    <!-- counter up js -->
    <script src="{{ asset( 'assets') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset( 'assets') }}/js/jquery.countup.min.js"></script>
    <!-- nice select js -->
    <script src="{{ asset( 'assets') }}/js/jquery.nice-select.min.js"></script>
    <!-- venobox js -->
    <script src="{{ asset( 'assets') }}/js/venobox.min.js"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset( 'assets') }}/js/sticky_sidebar.js"></script>
    <!-- wow js -->
    <script src="{{ asset( 'assets') }}/js/wow.min.js"></script>
    <!-- ex zoom js -->
    <script src="{{ asset( 'assets') }}/js/jquery.exzoom.js"></script>

    <!--main/custom js-->
    <script src="{{ asset( 'assets') }}/js/main.js"></script>
    {{-- Start Script --}}
    @yield('scripts')
    {{-- End Script --}}

 </body>

</html>
