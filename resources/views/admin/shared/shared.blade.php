<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lavida | @yield("title")</title>
	
	<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset( 'assets') }}/images/favicon.png" />
    <link href="{{ asset( 'assetsAdmin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset( 'assetsAdmin') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset( 'assetsAdmin') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset( 'assetsAdmin') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
    @yield('scriptstabale')
    <link href="{{ asset( 'assetsAdmin') }}/css/style.css" rel="stylesheet" type="text/css"/>

    @yield('style')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
            Main wrapper start
        ***********************************-->

        <div id="main-wrapper">

            <!--**********************************
                    Nav header start
                ***********************************-->
                <div class="nav-header">
                    <a href="{{route('dashboard')}}" class="brand-logo">
                        <img class="logo-abbr" style="max-width: 105px;
                        margin: auto;
                        " src="{{ asset( 'assets') }}/images/logo.png" alt="">
                    </a>
                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="line"></span><span class="line"></span><span class="line"></span>
                        </div>
                    </div>
                </div>
                <!--**********************************
                        Nav header end
                    ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area d-lg-inline-flex d-none">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href="javascript:void(0)"><i
                                                    class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="../../../www.w3.org/2000/svg.html">
                                        <path d="M2.23779 10.2492L4.66679 11.7064V8.30554L2.23779 10.2492Z"
                                            fill="#67636D" />
                                        <path
                                            d="M1.1665 12.327V23.3334C1.16852 23.8531 1.28817 24.3656 1.5165 24.8325L9.20134 17.15L1.1665 12.327Z"
                                            fill="#67636D" />
                                        <path
                                            d="M26.4832 24.8325C26.7115 24.3656 26.8311 23.8531 26.8332 23.3334V12.327L18.7983 17.15L26.4832 24.8325Z"
                                            fill="#67636D" />
                                        <path d="M23.3335 8.30554V11.7064L25.7625 10.2492L23.3335 8.30554Z"
                                            fill="#67636D" />
                                        <path
                                            d="M21.0492 13.0772C21.024 12.998 21.0076 12.9162 21.0002 12.8334V7.00004C21.0002 6.69062 20.8773 6.39388 20.6585 6.17508C20.4397 5.95629 20.1429 5.83337 19.8335 5.83337H8.16684C7.85742 5.83337 7.56067 5.95629 7.34188 6.17508C7.12309 6.39388 7.00017 6.69062 7.00017 7.00004V12.8334C6.99274 12.9162 6.97631 12.998 6.95117 13.0772L14.0002 17.3064L21.0492 13.0772Z"
                                            fill="#67636D" />
                                        <path
                                            d="M17.3262 3.50003L14.7292 1.4222C14.5222 1.25653 14.2651 1.16626 14 1.16626C13.7349 1.16626 13.4777 1.25653 13.2708 1.4222L10.6738 3.50003H17.3262Z"
                                            fill="#67636D" />
                                        <path
                                            d="M16.7358 18.3855L14.6008 19.6688C14.4194 19.7778 14.2117 19.8354 14 19.8354C13.7883 19.8354 13.5806 19.7778 13.3991 19.6688L11.2641 18.3855L3.16748 26.4833C3.63438 26.7117 4.14691 26.8313 4.66665 26.8333H23.3333C23.853 26.8313 24.3656 26.7117 24.8325 26.4833L16.7358 18.3855Z"
                                            fill="#67636D" />
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">6</span>
                                </a>
                            </li>
                          
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="{{ asset( 'assetsAdmin') }}/images/profile/p9.jpg" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black">Mohamed Sami</span>
                                        <p class="fs-12 mb-0">Team Leader</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
        Sidebar start
    ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('employees')}}">Employees</a></li>
                            <li><a href="{{route('visitor')}}">Visitor</a></li>
                            <li><a href="{{route('older')}}">Older</a></li>
                            <li><a href="{{route('foods')}}">Foods</a></li>
                            <li><a href="{{route('book')}}">Book A Table</a></li>
                        </ul>
                    </li>
                    <li><a class=" ai-icon" href="{{route('create-foods')}}" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Create Foods</span>
                        </a>
                       
                    </li>
                    <li><a class=" ai-icon" href="{{route('create-employees')}}" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Create Employees</span>
                        </a>
                       
                    </li>
                    <li><a class=" ai-icon" href="{{route('create-older') }}" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Create Older</span>
                        </a>
                       
                    </li>
                   
                </ul>
                <a class="add-menu-sidebar d-block" href="javascript:void(0)" data-toggle="modal"
                    data-target="#addOrderModalside">+ New Foods</a>
                <div class="copyright">
                    <p><strong> Team Lavida </strong> © 2023 All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> By Team Lavida</p>
                </div>
            </div>
        </div>
        </div>

        <!--**********************************
        Main wrapper end
    ***********************************-->
        @yield('content')
    



		<!-- Add Order -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Create Meal</h5>
                  <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label class="text-black font-w500">Meal Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Meal Type</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Description</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Additions</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Evaluations</label>
                      <input type="number" min="1" max="10" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Size Meal</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Discount</label>
                      <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="text-black font-w500">Cost</label>
                      <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-primary">CREATE</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>




    <!--**********************************
        Scripts
    ***********************************-->
	<script src="{{ asset( 'assetsAdmin') }}/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/vendor/apexchart/apexchart.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/js/dashboard/dashboard-1.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/js/custom.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/js/dlabnav-init.js" type="text/javascript"></script>

    @yield('scripts')
    
<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by Team Lavida 2023</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->	

</body>

</html>