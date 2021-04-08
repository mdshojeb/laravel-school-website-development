<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>@yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Shajeeb Mahmud" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/s-logo.png')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" />
        {{-- data table css --}}
        <link rel="stylesheet" href="https:////cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{url('assets/js/modernizr.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/5a62520aa5.js" crossorigin="anonymous"></script>

    </head>
    
    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{url('/dashboard')}}" class="logo">
                            <span>
                            <img src="{{asset('/assets/images/s-logo.png')}}" alt="" height="50">
                            </span>
                            <i>
                                <img src="{{asset('/assets/images/s-logo.png')}}" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        {{-- <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                            <i class="fas fa-user" style="font-"></i>
                        </div> --}}
                    <h5><a href="#">{{session('name')}}</a> </h5>
                        <p class="text-muted">
                            @if (session('role')==3)
                                {{'Super Admin'}}
                            @else
                                {{'Admin'}}
                            @endif
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->
                            {{-- <li>
                            <a href="{{url('/dashboard')}}">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                                </a>
                            </li> --}}
                            {{-- breaking news start --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-bullhorn" aria-hidden="true"></i><span> Notice Board </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('/create-notice')}}">-Create Notice</a></li>
                                    <li><a href="{{url('/notice-list')}}">-Notice List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Contacts and Social </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('/contact-add-form')}}"><span> -Contact Information </span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/social-edit')}}"><span> -Social Media </span></a>
                                    </li>
                                </ul>
                            </li>
                            
                            {{-- about Us Start--}}
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-pencil-square" aria-hidden="true"></i><span> About Us </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('/about-school-add')}}">-About School</a></li>
                                    <li><a href="{{url('/about-campus-add')}}">-About Campus</a></li>
                                    <li><a href="{{url('/about-teacher-add')}}">-About Teachers</a></li>
                                    <li><a href="{{url('/about-comitee-add')}}">-About Comitee</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-youtube-play" aria-hidden="true"></i></i><span> Online Class </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{url('/youtube-class-list')}}"><span> -Class List </span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/youtube-class-add')}}"><span> -Add Class </span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}"><span> -Class Report </span></a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Upload Class Routin and Suggestion --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Academic</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('/class-routin-add')}}">-Upload Class Routin</a></li>
                                    <li><a href="{{url('/suggestion-add')}}">-Upload Suggestion</a></li>
                                    <li><a href="{{url('/academic-rules-add')}}">-Write Academic Rules</a></li>
                                </ul>
                            </li>

                            <!-- memory add -->
                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Memory </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('/create-memory')}}">-Create Memory</a></li>
                                    <li><a href="{{url('/show-all-memory')}}">-All Memory</a></li>
                                </ul>
                            </li>
                            {{-- upload slider image --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-picture-o" aria-hidden="true"></i></i><span>Edit Slider Image</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{url('/upload-slider-image')}}">Upload Photo</a></li>
                                    <li><a href="{{url('/slider-image-list')}}">Image List</a></li>
                                </ul>
                            </li>

                            {{-- head master message --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-comments" aria-hidden="true"></i> <span> Messages </span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{'/create-message'}}">-Create Message</a></li>
                                    <li><a href="{{'/see-all-message'}}">-See All Message</a></li>
                                </ul>
                            </li> 
                            <li>
                                <a href="javascript: void(0);"><span><i class="fa fa-link" aria-hidden="true"></i> Create Links </span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{'/create-link'}}">-Create</a></li>
                                    <li><a href="{{'/link-list'}}">-Links list</a></li>
                                </ul>
                            </li>
                            @if (session('role')==3)
                            <li>
                                <a href="{{url('/userlist')}}"><i class="fas fa-users"></i> <span> User List </span></a>
                           </li>
                            @endif
                                
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->
            </div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                   <i class="fas fa-user"></i> <span class="ml-1">{{session('name')}} <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <!-- item-->
                                <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title"> KKBHS Admin Panel </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to KKBHS admin panel !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">@yield('content-title')</h4>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    {{date('Y')."- Copyright By www.karimpurkkboyshighschool.edu.bd"}}
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        {{-- data table js --}}
        <script src="https:////cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

        {{-- texteditor --}}
    <script src="{{asset('/editor/ckeditor.js')}}"></script>

      <!-- Flot chart -->
      {{-- <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
      <script src="../plugins/flot-chart/curvedLines.js"></script>
      <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script> --}}


        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script>
            $(document).ready( function () {
                $('.myTable').DataTable();
                });
        </script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        </script>

    </body>
</html>