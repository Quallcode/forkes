<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>F</b>KS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>FORKES</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?=$udata['name'] ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?=base_url()?>includes/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
              <p>
                <a href="<?=base_url()?>logout" class="btn btn-default btn-flat">Sign out</a>
              </p>
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
        <img src="<?=base_url()?>includes/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?=$udata['name'] ?></p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>ATC</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> INSERT</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>RINGKASAN</span>
        </a>
      </li>
      <li>
        <a href="pages/widgets.html">
          <i class="fa fa-th"></i> <span>PERBANDINGAN</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>HASIL</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>PRODUK</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>EKSPORT</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>PERMINTAAN</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
