<section class="sidebar">
    <!-- Sidebar user panel -->
    
      
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
    <li><a href="{{route('admin/author')}}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
      <li><a href="{{route('admin/book')}}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
      <li><a href="{{route('admin/borrow')}}"><i class="fa fa-book"></i> <span>Buku yang sedang dipinjam</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{route('admin/report')}}"><i class="fa fa-circle-o"></i> Buku Favorite</a></li>
          <li><a href="{{route('admin/topuser')}}"><i class="fa fa-circle-o"></i>Pengguna teraktif </a></li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-users"></i> <span>Users</span></a></li>
    </ul>
  </section>