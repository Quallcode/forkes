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
            <span class="hidden-xs"><?php $udata = $this->session->userdata('user_data'); echo $udata['name']; ?></span>
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
        <p><?php $udata = $this->session->userdata('user_data'); echo $udata['name']; ?></p>
      </div>
    </div>
    <?php $bc = $this->session->userdata('breadcrumb'); ?>
    <?php $msbc = $this->session->userdata('main_sub_breadcrumb'); ?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="<?php if($bc == 'dashboard'){?>active<?php }?>">
        <a href="<?= base_url()?>dashboard">
          <i class="fa fa-laptop"></i>
          <span>DASHBOARD</span>
        </a>
      </li>

      <li class="<?php if($bc == 'master'){?>active<?php }?> treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>MASTER</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&& ($msbc == 'atc_obat' || $msbc == 'keterangan_atc_obat')){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> ATC OBAT</a>
            <ul class="treeview-menu">
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'keterangan_atc_obat'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> KETERANGAN</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>keterangan_atc_obat"><i class="fa fa-circle-o"></i> DAFTAR KETERANGAN</a></li>
                  <li><a href="<?= base_url()?>keterangan_atc_obat/insert"><i class="fa fa-circle-o"></i> TAMBAH KETERANGAN</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url()?>atc_obat"><i class="fa fa-circle-o"></i> DAFTAR ATC OBAT</a></li>
              <li><a href="<?= base_url()?>atc_obat/insert"><i class="fa fa-circle-o"></i> TAMBAH ATC OBAT</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'sediaan'){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> SEDIAAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>sediaan"><i class="fa fa-circle-o"></i> DAFTAR SEDIAAN</a></li>
              <li><a href="<?= base_url()?>sediaan/insert"><i class="fa fa-circle-o"></i> TAMBAH SEDIAAN</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'satuan'){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> SATUAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>satuan"><i class="fa fa-circle-o"></i> DAFTAR SATUAN</a></li>
              <li><a href="<?= base_url()?>satuan/insert"><i class="fa fa-circle-o"></i> TAMBAH SATUAN</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'kekuatan'){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> KEKUATAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>kekuatan"><i class="fa fa-circle-o"></i> DAFTAR KEKUATAN</a></li>
              <li><a href="<?= base_url()?>kekuatan/insert"><i class="fa fa-circle-o"></i> TAMBAH KEKUATAN</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="<?php if($bc == 'form'){?>active<?php }?> treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>FORM PENDAFTARAN</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'form_rumah_sakit'){?>active<?php }?>">
            <a href="<?= base_url()?>form_registrasi/rumah_sakit"><i class="fa fa-circle-o"></i> FORM RUMAH SAKIT</a>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'form_dokter_praktek'){?>active<?php }?>">
            <a href="<?= base_url()?>form_registrasi/dokter_praktek"><i class="fa fa-circle-o"></i> FORM DOKTER PRAKTEK</a>
          </li>
        </ul>
      </li>

      <li>
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
      <li>
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>HASIL</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>PRODUK</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>EKSPORT</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-table"></i> <span>PERMINTAAN</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
