
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vugar Baxshov| Blog Page | 2019</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css')}}">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Form step -->
    <link href="{{asset('backend/assets/plugins/jquery-steps/css/jquery.steps.css')}}" rel="stylesheet">
    <!-- Dropify -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/dropify/dist/css/dropify.min.css')}}">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
    <!-- Switchery -->
    <link href="{{asset('backend/assets/plugins/innoto-switchery/dist/switchery.min.css')}}" rel="stylesheet"/>
    <!-- Select 2 -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}">
    <!-- Touchspinner -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}">
    <!-- Input mask -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}">
    <!-- x-editable -->
    <link href="{{asset('backend/assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{asset('backend/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="{{asset('backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{asset('backend/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{asset('backend/assets/plugins/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/pickadate/themes/default.date.css')}}">

      @yield('css') 

</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="spinner">
                <div class="spinner-a"></div>
                <div class="spinner-b"></div>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->
 <div></div>

    <!--**********************************
        Main wrapper start
        ***********************************-->
     

        <!--**********************************
            Nav header start
            ***********************************-->
           



               <div id="main-wrapper">
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="#">
                        <b class="logo-abbr">BV</b>
                        <span class="brand-title" style="font-size: 1.1em;">Vugar Baxshov</span>
                    </a>
                </div>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="fas fa-bars"></i></span>
                    </div>
                </div>
            </div>
            <div class="nk-sidebar">           
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Navigation</li>
                

                <li><a href="{{route('nizam.edit')}}" class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-cogs"></i><span class="nav-text">Nizamlamalar</span></a>
            
                </li>
                <li>
                    <a href="{{route('haqqinda.edit')}}" aria-expanded="false">
                        <i class="mdi mdi-information-outline"></i><span class="nav-text">Haqqında</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('slider')}}" aria-expanded="false">
                        <i class="fas fa-image"></i><span class="nav-text">Slider</span>
                    </a>
                </li>
            
                 <li>
                    <a href="{{route('meqale')}}" aria-expanded="false">
                        <i class="mdi mdi-library-books"></i><span class="nav-text">Meqalələr</span>
                    </a>
                </li>

                   <li>
                    <a href="{{route('reyler')}}" aria-expanded="false">
                      <i class="mdi mdi-comment-account-outline" aria-hidden="true"></i><span class="nav-text">Rəylər</span>
                    </a>
                </li>
                  <li>
                    <a href="{{route('teacher')}}" aria-expanded="false">
                     <i class="fa fa-user-circle" aria-hidden="true"></i><span class="nav-text">Teacher</span>
                    </a>
                </li>
                 <li>
                    <a href="{{route('courses.index')}}" aria-expanded="false">
                    <i class="mdi mdi-file-word-box" aria-hidden="true"></i><span class="nav-text">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}" aria-expanded="false">
                   <i class="fa fa-address-card" aria-hidden="true"></i></i><span class="nav-text">Category</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">
                    <div class="header-right">

                        <ul class="clearfix">

                            <li class="icons">
                                <div class="user-img c-pointer">
                                    <img src="{{asset('backend/assets/images/users/2.png')}}" height="40" width="40" alt="avatar">
                                    <strong class="ml-2">{{Auth::user()->name}} <span><i class="fas fa-caret-down ml-2"></i></span></strong>

                                </div>
                                <div class="drop-down dropdown-profile animated flipInX">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a  href="{{route('user.create')}}" class="btn btn-warning">İstifadəçi əlavə et</a>
                                            </li>
                                            <li>
                                                <form action="{{route('logout')}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input class="btn btn-danger" type="submit" name="" value="Log out">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>




        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


 @yield('page') 


         <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed & Developed by <a href="#" target="_blank">Quixlab</a> 2018</p>
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->

            
        <!--**********************************
            Right sidebar start
            ***********************************-->
            <div class="sidebar-right">
                <a class="sidebar-right-trigger gradient-5-x" href="javascript:void(0)">
                    <span><i class="fa fa-cog fa-spin"></i></span>
                </a>
                <div class="sidebar-right-inner">
                    <div class="admin-settings">
                        <h4>Pick your style</h4>
                        <div>
                            <p>Background</p>
                            <select class="form-control" name="theme_version" id="theme_version">
                                <option value="light">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div>
                            <p>Layout</p>
                            <select class="form-control" name="theme_layout" id="theme_layout">
                                <option value="vertical">Vertical</option>
                                <option value="horizontal">Horizontal</option>
                            </select>
                        </div>
                        <div>
                            <p>Sidebar</p>
                            <select class="form-control" name="sidebar_style" id="sidebar_style">
                                <option value="full">Full</option>
                                <option value="mini">Mini</option>
                                <option value="compact">Compact</option>
                                <option value="overlay">Overlay</option>
                            </select>
                        </div>
                        <div>
                            <p>Sidebar position</p>
                            <select class="form-control" name="sidebar_position" id="sidebar_position">
                                <option value="static">Static</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>
                        <div>
                            <p>Header position</p>
                            <select class="form-control" name="header_position" id="header_position">
                                <option value="static">Static</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>
                        <div>
                            <p>Container</p>
                            <select class="form-control" name="container_layout" id="container_layout">
                                <option value="wide">Wide</option>
                                <option value="boxed">Boxed</option>
                                <option value="wide-boxed">Wide Boxed</option>
                            </select>
                        </div>
                        <div>
                            <p>Direction</p>
                            <select class="form-control" name="theme_direction" id="theme_direction">
                                <option value="ltr">LTR</option>
                                <option value="rtl">RTL</option>
                            </select>
                        </div>
                        <div>
                            <p>Navigation Header</p>
                            <div>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                    <label for="nav_header_bg_1"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                    <label for="nav_header_bg_2"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                    <label for="nav_header_bg_3"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                    <label for="nav_header_bg_4"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                    <label for="nav_header_bg_5"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                    <label for="nav_header_bg_6"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                    <label for="nav_header_bg_7"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                    <label for="nav_header_bg_8"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                    <label for="nav_header_bg_9"></label>
                                </span>
                                <span>
                                    <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                    <label for="nav_header_bg_10"></label>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p>Header</p>
                            <div>
                                <span>
                                    <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                    <label for="header_bg_1"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                    <label for="header_bg_2"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                    <label for="header_bg_3"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                    <label for="header_bg_4"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                    <label for="header_bg_5"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                    <label for="header_bg_6"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                    <label for="header_bg_7"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                    <label for="header_bg_8"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                    <label for="header_bg_9"></label>
                                </span>
                                <span>
                                    <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                    <label for="header_bg_10"></label>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p>Sidebar</p>
                            <div>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                    <label for="sidebar_bg_1"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                    <label for="sidebar_bg_2"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                    <label for="sidebar_bg_3"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                    <label for="sidebar_bg_4"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                    <label for="sidebar_bg_5"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                    <label for="sidebar_bg_6"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                    <label for="sidebar_bg_7"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                    <label for="sidebar_bg_8"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                    <label for="sidebar_bg_9"></label>
                                </span>
                                <span>
                                    <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                    <label for="sidebar_bg_10"></label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--**********************************
            Right sidebar end
            ***********************************-->
        </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <script src="{{asset('backend/assets/plugins/common/common.min.js')}}"></script>
        <script src="{{asset('backend/js/custom.min.js')}}"></script>
        <script src="{{asset('backend/js/settings.js')}}"></script>
        <script src="{{asset('backend/js/quixnav.js')}}"></script>
        <script src="{{asset('backend/js/styleSwitcher.js')}}"></script>
        
        <!-- Sparkline -->
        <script src="{{asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Counter Up -->
        <script src="{{asset('backend/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- Ticker -->
        <script src="{{asset('backend/assets/plugins/webticker/jquery.webticker.min.js')}}"></script>

        <script src="{{asset('backend/js/dashboard/dashboard-2.js')}}"></script>

        <!-- Jquery Validation -->
        <script src="{{asset('backend/assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <!-- Form step -->
        <script src="{{asset('backend/assets/plugins/jquery-steps/build/jquery.steps.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <!-- Form validate init -->
        <script src="{{asset('backend/js/plugins-init/jquery.validate-init.js')}}"></script>
        <!-- Dropify -->
        <script src="{{asset('backend/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
        <!-- Typeahead -->
        <script src="{{asset('backend/assets/plugins/typeahead.js/dist/typeahead.jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/typeahead.js/dist/typeahead.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/typeahead.js/dist/bloodhound.min.js')}}"></script>
        <!-- Tagsinput -->
        <script src="{{asset('backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
        <!-- Switchery -->
        <script src="{{asset('backend/assets/plugins/innoto-switchery/dist/switchery.min.js')}}"></script>
        <!-- Select 2 -->
        <script src="{{asset('backend/assets/plugins/select2/js/select2.full.min.js')}}"></script>
        <!-- Touchspinner -->
        <script src="{{asset('backend/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>
        <!-- Input mask -->
        <script src="{{asset('backend/assets/plugins/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
        <!-- x-editable -->
        <script src="{{asset('backend/assets/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('backend/assets/plugins/summernote/js/summernote.min.js')}}"></script>
        <!-- Daterangepicker -->
        <!-- momment js is must -->
        <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
        <script src="{{asset('backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <!-- clockpicker -->
        <script src="{{asset('backend/assets/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
        <!-- asColorPicker -->
        <!-- momment js is must -->
        <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
        <script src="{{asset('backend/assets/plugins/jquery-asColor/jquery-asColor.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/jquery-asGradient/jquery-asGradient.min.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}"></script>
        <!-- Material color picker -->
        <!-- momment js is must -->
        <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
        <script src="{{asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
        <!-- pickdate -->
        <script src="{{asset('backend/assets/plugins/pickadate/picker.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/pickadate/picker.time.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/pickadate/picker.date.js')}}"></script>
')}}



        <!-- Form step init -->
        <script src="{{asset('backend/js/plugins-init/jquery-steps-init.js')}}"></script>
        <!-- Dropify init -->
        <script src="{{asset('backend/js/plugins-init/dropify-init.js')}}"></script>
        <!-- Typeahead init -->
        <script src="{{asset('backend/js/plugins-init/typehead.js-init.js')}}"></script>
        <!-- Tagsinput init -->
        <script src="{{asset('backend/js/plugins-init/bootstrap-tagsinput-init.js')}}"></script>
        <!-- Switchery init -->
        <script src="{{asset('backend/js/plugins-init/switchery-init.js')}}"></script>
        <!-- Select 2 init -->
        <script src="{{asset('backend/js/plugins-init/select2-init.js')}}"></script>
        <!-- Touchspinner init -->
        <script src="{{asset('backend/js/plugins-init/bootstrap-touchpin-init.js')}}"></script>
        <!-- x-editable init -->
        <script src="{{asset('backend/js/plugins-init/bootstrap-editable-init.js')}}"></script>
        <!-- Summernote init -->
        <script src="{{asset('backend/js/plugins-init/summernote-init.js')}}"></script>
        <!-- Daterangepicker -->
        <script src="{{asset('backend/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
        <!-- Clockpicker init -->
        <script src="{{asset('backend/js/plugins-init/clock-picker-init.js')}}"></script>
        <!-- asColorPicker init -->
        <script src="{{asset('backend/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
        <!-- Material color picker init -->
        <script src="{{asset('backend/js/plugins-init/material-date-picker-init.js')}}"></script>
        <!-- Pickdate -->
        <script src="{{asset('backend/js/plugins-init/pickadate-init.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

          @yield('js') 

    </body>
    </html>