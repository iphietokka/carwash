<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car Wash</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('backend/dist/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('backend/plugins/datepicker/datepicker3.css')}}">
   <link rel="stylesheet" href="{{asset('backend/plugins/timepicker/bootstrap-timepicker.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/fontawesome-iconpicker.css')}}">
      <link rel="stylesheet" href="{{asset('css/icon-font.css')}}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
      <link href="{{ asset('js/sweetalert.css') }}" rel="stylesheet" /> 
       <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet" /> 
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables/dataTables.bootstrap.css')}}">
          <link rel="stylesheet" href="{{ asset('backend/plugins/select2/select2.min.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>C</b>W</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CAR</b>WASH</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                         <li>
            <a href="{{url('/')}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Visit Site</a>
          </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('images/users')}}/{{auth::user()->photo}}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{auth::user()->username}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('images/users')}}/{{ Auth::user()->photo}}" class="img-circle" alt="User Image">

                                    <p>
                                        <b>{{auth::user()->name}}</b>
                                        <small>Member since {{auth::user()->created_at->format('m/d/Y')}}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">

                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('images/users')}}/{{auth::user()->photo}}" class="img-rounded" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{auth::user()->name}}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
            @include('Admin.layouts.sidebar')
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
   
         @yield('content')
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.2
        </div>
        <strong>Copyright &copy; 2019 <a href="http://bekaskaki.co.id" target=" _blank">Bekaskaki Technology</a>.</strong> All rights
        reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('backend/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/dist/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('backend/dist/raphael-min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/dist/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('backend/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('backend/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('backend/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backend/plugins/fastclick/fastclick.js')}}"></script>

<script src="{{asset('js/fontawesome-iconpicker.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/app.min.js')}}"></script>
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/plugins/select2/select2.full.min.js')}}"></script>
</body>


  @if (Session::has('sweet_alert.alert'))
    <script>
       swal({
          text: "{!! Session::get('sweet_alert.text') !!}",
    title: "{!! Session::get('sweet_alert.title') !!}",
   type: "{!! Session::get('sweet_alert.type') !!}",
 

    {{-- confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}", --}}
     confirmButtonColor: "#AEDEF4",
     timer: 1000


            // more options
        });
    </script>
@endif
    <script>
          $(function () {
             $(".select2").select2();
            $("#example1").DataTable();
      //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
               $('.date-pick').datepicker({
     autoclose: true,
   });
              $('.icon-picker').iconpicker({
                title: 'Icon Piker',
             selectedCustomClass: 'label label-primary',
             mustAccept: true,
             placement: 'bottomLeft',
             showFooter: false,
             hideOnSelect: true,
           });
               $('.iconpicker-custom').iconpicker({
         title: 'Vehicle Icons',
        icons: ['icon-1', 'icon-2', 'icon-3', 'icon-4', 'icon-5', 'icon-6', 'fa-car', 'fa-truck'],
     selectedCustomClass: 'label label-primary',
     mustAccept: false,
     placement: 'bottomLeft',
     showFooter: false,
     hideOnSelect: true,
   });
               $('.social-icon-picker').iconpicker({
     title: 'Social Icons',
     icons: ['fa-facebook', 'fa-instagram', 'fa-twitter', 'fa-google-plus', 'fa-google', 'fa-pinterest', 'fa-youtube', 'fa-tumblr', 'fa-dribbble', 'fa-flickr', 'fa-github', 'fa-github-alt', 'fa-linkedin', 'fa-skype', 'fa-youtube-play'],
     selectedCustomClass: 'label label-primary',
     mustAccept: false,
     placement: 'topRight',
     showFooter: false,
     hideOnSelect: true,
   });
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false

              
            });

            Dropzone.options.galleryDropzone = {
             paramName: "gallery_img",
             maxFilesize: 20, // MB
             acceptedFiles: ".jpeg,.jpg,.png,.gif",
          };

          });

      $(document.body).on('click', '.js-submit-confirm', function (event) {
        event.preventDefault();
        var $form = $(this).closest('form');
        swal({
            title: "Are you sure you want to delete this item?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: true
        },
                function () {
                    $form.submit();
                });
      });

    </script>

    <script>
        $(function() {
        $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
        });
    </script>

     

</html>