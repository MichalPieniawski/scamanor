<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scamanor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables-->
  <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</head>


<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper" class="toggled">

  <!-- Navbar -->
  <nav class="main-header navbar-expand navbar navbar-dark bg-dark elevation-4">
    <!-- Left navbar links -->
	
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <div class="d-grid gap-2 d-md-block">
  <a class="btn btn-primary " href='home' role="button"><h6> <i class="fa fa-home"></i> Strona główna</h6> </a>
  <a class="btn btn-info " href='list' role="button"><h6> <i class="fa fa-list"></i> Lista Ofert</h6> </a>
  <a class="btn btn-success"  href='offer' role="button"><h6> <i class="fa fa-plus-circle"></i> Utwórz ofertę </h6></a>
  <a class="btn btn-warning " href='statuslist' role="button"><h6><i class="fa fa-handshake-o"></i> Status wymian</h6></a>
  <a class="btn btn-danger " href='archive' role="button"><h6><i class="fa fa-gavel"></i> Archiwum </h6></a>

  
</div>


    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      
        <div class="input-group-append">
       
        </div>
      </div>
    </form>

   
         
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
    {!! "&nbsp;" !!} {!! "&nbsp;" !!}  <img src="./img/smoktrans.png" width="25px" height="25px"></i>
      <span class="brand-text font-weight-light">Panel Scamanor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
      <a href='profile' class="d-block">
        
      {{Auth::user()->name }}
      </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <?php
            $segment = Request::segment(2);
          ?>     
          <li class="nav-item has-treeview">
            <a href="{{ route('home') }}" class="nav-link 
              @if(!$segment)
              active
              @endif
              ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Strona główna
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="list" class="nav-link ">
            
              <i class="fa fa-cash-register nav-icon"></i>
              <p>
                Lista Ofert
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="offer" class="nav-link ">
            
              <i class="nav-icon fa fa-cash-register"></i>
              <p>
                Utwórz ofertę
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="statuslist" class="nav-link ">
            
              <i class="nav-icon fa fa-cash-register"></i>
              <p>
                Status wymian
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="archive" class="nav-link ">
            
              <i class="nav-icon fa fa-cash-register"></i>
              <p>
                Archiwum
              </p>
            </a>
            
          </li>
          </li>
          </ul> 
              
          
          <li class="nav-header">Akcje</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="nav-icon fa fa-power-off"></i>
                                                     {!! "&nbsp;" !!} {!! "&nbsp;" !!}  {{ __(' Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


           
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <div class="float-right d-none d-sm-inline-block">
    Scamanor. By @Michał Pieniawski & @Miłosz Walkowski & @Marcin Chwedoruk
    </div>
  </footer>

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Additional-->

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>