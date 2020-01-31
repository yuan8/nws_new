<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NUWSP - Kementrian Dalam Negeri</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(rt('dist/css/ionicon.css')); ?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <script src="<?php echo e(base_url('dist/plugins/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(rt('dist/map_source/hi.js')); ?>" charset="utf-8"></script>


 <!-- <script src="https://code.highcharts.com/maps/highmaps.js"></script> -->
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/jqvmap/jqvmap.min.css')); ?>"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(base_url('dist/plugins/summernote/summernote-bs4.css')); ?>">
  <!-- <script src="<?php echo e(rt('dist/fs/highcharts.js')); ?>" charset="utf-8"></script> -->

  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo e(base_url('dist/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
 <!-- <script src="<?php echo e(rt('dist/fs/highcharts-3d.js')); ?>" charset="utf-8"></script> -->
 <!-- <script src="<?php echo e(rt('dist/fs/modules/exporting.js')); ?>" charset="utf-8"></script> -->
 <!-- <script src="<?php echo e(rt('dist/fs//modules/export-data.js')); ?>" charset="utf-8"></script> -->
 <script src="<?php echo e(rt('dist/map_source/treer9.js')); ?>" charset="utf-8"></script>
 <link rel="stylesheet" href="<?php echo e(rt('dist/css/custome.css?v='.date('h:i'))); ?>">
 <script src="<?php echo e(base_url('dist/js/adminlte.js')); ?>"></script>


 <script src="<?php echo e(rt('dist/vendor/toas/toas.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(rt('dist/vendor/toas/toas.css')); ?>">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

   
   

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

<script type="text/javascript" src="<?php echo e(rt('dist/vendor/jspanel/jspanel.min.js')); ?>"></script>

<link href="<?php echo e(rt('dist/vendor/jspanel/jspanel.css')); ?>" rel="stylesheet">
<!-- jsPanel JavaScript -->

<!-- optional jsPanel extensions -->
<script src="<?php echo e(rt('dist/vendor/jspanel/extensions/modal/jspanel.modal.js')); ?>"></script>
<script src="<?php echo e(rt('dist/vendor/jspanel/extensions/tooltip/jspanel.tooltip.js')); ?>"></script>
<script src="<?php echo e(rt('dist/vendor/jspanel/extensions/hint/jspanel.hint.js')); ?>"></script>
<script src="<?php echo e(rt('dist/vendor/jspanel/extensions/layout/jspanel.layout.js')); ?>"></script>
<script src="<?php echo e(rt('dist/vendor/jspanel/extensions/contextmenu/jspanel.contextmenu.js')); ?>"></script>


</head>
<body class="sidebar-mini sidebar-collapse" style="height: auto;">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(rt('/dashboard')); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" onclick="showpanelCatatan(true)" class="nav-link">Buat Catatan</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
<!--     <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="  nav-item dropdown">
          <a href="javascript:void(0)"  data-toggle="dropdown" class="nav-link  dropdown-toggle"><i class="fas fa-user-circle"></i> <?php echo e(auth('name')); ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(rt('admin')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard Admin</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?php echo e(rt('Keuangan')); ?>"><i class="fas fa-user-circle"></i>  Profile</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?php echo e(rt('login/logout')); ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
          </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(rt('admin')); ?>" class="brand-link">
      <h6 class="text-center"><b>NUWSP</b></h6>
   <!--    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="<?php echo e(rt('admin/profile-daerah')); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profile Daerah
              </p>
            </a>
          </li>
     
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1365.2px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <!--   <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>404 Error Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">404 Error Page</li>
            </ol>
          </div>
        </div>
      </div> -->

      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- /.error-page -->
      <?php echo $__env->yieldContent('content'); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>NUWSP</b> 1.0.0
    </div>
    <strong>Copyright © 2020 BANGDA KEMENDAGRI
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(base_url('dist/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(base_url('dist/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(base_url('dist/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<!-- <script src="<?php echo e(base_url('dist/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(base_url('dist/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?php echo e(base_url('dist/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(base_url('dist/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(base_url('dist/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(base_url('dist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(base_url('dist/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(base_url('dist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->

<?php echo $__env->yieldContent('script'); ?>

<?php echo $__env->make('component.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style type="text/css">
.btn-circle{
  border-radius: 100%!Important;
}
</style>


</body>
</html><?php /**PATH C:\xampp\htdocs\nws\application\views/template/admin.blade.php ENDPATH**/ ?>