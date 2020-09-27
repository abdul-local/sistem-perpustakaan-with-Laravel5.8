<!DOCTYPE html>
<html>
  <!--head -->
  @include('admin/template/partials/head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- header -->
  @include('admin/template/partials/header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   @include('admin/template/partials/sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ Breadcrumbs::current()->title }}
      </h1>
      {{ Breadcrumbs::render() }}
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      @yield('content')
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- footer -->
  @include('admin/template/partials/footer')

  <!-- Control Sidebar -->
  @include('admin/template/partials/controller')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- script -->
@include('admin/template/partials/script')
</body>
</html>
