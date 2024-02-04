<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Dashboard')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="{{asset('/')}}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<<<<<<< HEAD
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
=======
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
<<<<<<< HEAD
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
     
     
      
=======
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
=======
      <a href="{{route('logOut')}}" class="nav-link"><i class="fas fa-sign-out-alt"></i>
      </a>
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<<<<<<< HEAD
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/')}}dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
=======
    <a href="#" class="brand-link">
      <img src="{{asset('/')}}dist/img/Capture.png" alt="HF Logo">
      <span class="brand-text font-weight-light"></span>
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/')}}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dash')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
<<<<<<< HEAD
=======
          @if(session('name')  == 'superadmin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Role
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
		    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sale.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add_old_sale')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Old Sale</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bike
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('bike.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Bike</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bike.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bike List</p>
                </a>
              </li>
<<<<<<< HEAD
=======
              @if(session('name')  == 'superadmin')
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
              <li class="nav-item">
                <a href="{{route('bike_sale.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bike Sale List</p>
                </a>
              </li>
<<<<<<< HEAD
=======
              @endif
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
              <li class="nav-item">
                <a href="{{route('add_old_bike_sale')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Old Bike Sale</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Bike Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>First Service List</p>
                </a>
                <a href="{{route('second')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Second Service List</p>
                </a>
                <a href="{{route('third')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Third Service List</p>
                </a>
                <a href="{{route('fourth')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fouth Service List</p>
                </a>
                <a href="{{route('fifth')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fifth Service List</p>
                </a>
                <a href="{{route('sixth')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sixth Service List</p>
                </a>
                <a href="{{route('seventh')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seventh Service List</p>
                </a>
                <a href="{{route('eighth')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eighth Service List</p>
                </a>
              </li>
            </ul>
          </li>   
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
<<<<<<< HEAD
=======
              @if(session('name')  == 'superadmin')
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
                <a href="{{route('reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale Reports</p>
                </a>
<<<<<<< HEAD
=======
                <a href="{{route('bike_reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bike Sale Reports</p>
                </a>
                <a href="{{route('stock_reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Stock Reports</p>
                </a>
                <a href="{{route('bike_stocks')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bike Stock Reports</p>
                </a>
                @endif
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
<<<<<<< HEAD
                Expenses
=======
                Income & Expenses
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('expense.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Expense</p>
                </a>
                <a href="{{route('expense.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense List</p>
                </a>
<<<<<<< HEAD
=======
                <a href="{{route('ex_reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense Report</p>
                </a>
                <a href="{{route('income.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Income</p>
                </a>
                <a href="{{route('income.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Income List</p>
                </a>
                <a href="{{route('in_reports')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Income Report</p>
                </a>
                <a href="{{route('insert_daily')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily Income</p>
                </a>
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         
            @yield('content')
               
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}dist/js/adminlte.min.js"></script>

<!-- Data Table -->
<script src="{{asset('/')}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/vfs_fonts.js"></script>

<script>
 $(document).ready(function () {
    $('#example').DataTable();
});
</script> 
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
});
</script>
<<<<<<< HEAD
<script>
  var barcode ='';
  var interval;
  document.addEventListener('keydown',function(evt){
    if(interval)
      clearInterval(interval);
    if(evt.code == 'Enter') {
      if(barcode)
        handleBarcode(barcode);
      barcode = '';
      return;
    }
    if(evt.key != 'Shift')
      barcode += evt.key;
    interval = setInterval(() => barcode ='',20);
  });

  function handleBarcode(scanned_barcode){
      document.querySelector('#last_barcode').innerHTML = scanned_barcode; 
  }
</script> 
=======

>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
@yield('scripts')
</body>
</html>