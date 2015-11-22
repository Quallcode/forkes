<?php $udata = $this->session->userdata('user_data');?>
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>F</b>KS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img class="img" src="<?=base_url()?>img/kemenkeslogo.png" style="width:200px; height:50px;"/></span>
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
            <span class="hidden-xs"><i class="fa fa-power-off"></i></span>
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
        <p><?= $udata['nama']; ?></p>
      </div>
    </div>
    <?php $bc = $this->session->userdata('breadcrumb'); ?>
    <?php $msbc = $this->session->userdata('main_sub_breadcrumb'); ?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="<?php if($bc == 'dashboard'){?>active<?php }?>">
        <a href="<?= base_url()?>Dashboard">
          <i class="fa fa-laptop"></i>
          <span>DASHBOARD</span>
        </a>
      </li>
      <!-- MASTER DATA -->
      <?php if($udata['type'] == 3) { ?>
      <li class="<?php if($bc == 'master'){?>active<?php }?> treeview">
        <a href="#">
          <i class="fa fa-file-text"></i> <span>MASTER</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="<?php if(!empty($msbc)&& ($msbc == 'atc_obat' || $msbc == 'keterangan_atc_obat')){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> ATC OBAT</a>
            <ul class="treeview-menu">
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'keterangan_atc_obat'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> KETERANGAN</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>Keterangan_Atc_Obat"><i class="fa fa-circle-o"></i> DAFTAR KETERANGAN</a></li>
                  <li><a href="<?= base_url()?>Keterangan_Atc_Obat/Insert"><i class="fa fa-circle-o"></i> TAMBAH KETERANGAN</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url()?>Atc_Obat"><i class="fa fa-circle-o"></i> DAFTAR ATC OBAT</a></li>
              <li><a href="<?= base_url()?>Atc_Obat/Insert"><i class="fa fa-circle-o"></i> TAMBAH ATC OBAT</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&& ($msbc == 'obat_combinasi' || $msbc == 'usulan_obat_combinasi')){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> OBAT KOMBINASI</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Obat_Combinasi"><i class="fa  fa-list "></i> DAFTAR OBAT KOMBINASI</a></li>
              <li><a href="<?= base_url()?>usulan/Insert_Obat_Combinasi"><i class="fa  fa-list "></i> TAMBAH OBAT KOMBINASI</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&& ($msbc == 'kelas_terapi' || $msbc == 'sub_kelas_terapi' || $msbc == 'sub_kelas_terapi2' || $msbc == 'sub_kelas_terapi3')){?>active<?php }?>">
            <a><i class="fa fa-circle-o"></i> KELAS</a>
            <ul class="treeview-menu">
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'kelas_terapi'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> KELAS TERAPI</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>Kelas_Terapi"><i class="fa fa-circle-o"></i> DAFTAR KELAS</a></li>
                  <li><a href="<?= base_url()?>Kelas_Terapi/Insert"><i class="fa fa-circle-o"></i> TAMBAH KELAS</a></li>
                </ul>
              </li>
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'sub_kelas_terapi'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> SUB KELAS TERAPI</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi"><i class="fa fa-circle-o"></i> DAFTAR SUB KELAS</a></li>
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi/Insert"><i class="fa fa-circle-o"></i> TAMBAH SUB KELAS</a></li>
                </ul>
              </li>
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'sub_kelas_terapi2'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> SUB KELAS TERAPI 2</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi2"><i class="fa fa-circle-o"></i> DAFTAR SUB KELAS 2</a></li>
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi2/Insert"><i class="fa fa-circle-o"></i> TAMBAH SUB KELAS 2</a></li>
                </ul>
              </li>
              <li class="treeview <?php if(!empty($msbc)&&$msbc == 'sub_kelas_terapi3'){?>active<?php }?>">
                <a><i class="fa fa-circle-o"></i> SUB KELAS TERAPI 3</a>
                <ul class="treeview-menu">
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi3"><i class="fa fa-circle-o"></i> DAFTAR SUB KELAS 3</a></li>
                  <li><a href="<?= base_url()?>Sub_Kelas_Terapi3/Insert"><i class="fa fa-circle-o"></i> TAMBAH SUB KELAS 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'fornas'){?>active<?php }?>">
            <a><i class="fa fa-flask"></i> FORNAS</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Fornas"><i class="fa  fa-list "></i> DAFTAR FORNAS</a></li>
              <li><a href="<?= base_url()?>Fornas/Insert"><i  class="fa fa-plus-square"></i> TAMBAH FORNAS</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'sediaan'){?>active<?php }?>">
            <a><i class="fa fa-flask"></i> SEDIAAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Sediaan"><i class="fa  fa-list "></i> DAFTAR SEDIAAN</a></li>
              <li><a href="<?= base_url()?>Sediaan/Insert"><i  class="fa fa-plus-square"></i> TAMBAH SEDIAAN</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'satuan'){?>active<?php }?>">
            <a><i class="fa fa-superscript"></i> SATUAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Satuan"><i class="fa  fa-list "></i> DAFTAR SATUAN</a></li>
              <li><a href="<?= base_url()?>Satuan/Insert"><i class="fa fa-plus-square"></i> TAMBAH SATUAN</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'kekuatan'){?>active<?php }?>">
            <a><i class="fa fa-flash"></i> KEKUATAN</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Kekuatan"><i class="fa  fa-list "></i> DAFTAR KEKUATAN</a></li>
              <li><a href="<?= base_url()?>Kekuatan/Insert"><i class="fa fa-plus-square"></i> TAMBAH KEKUATAN</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <?php } ?>
      <!-- TRANSAKSI -->
      <?php if($udata['type'] != 3){?>
      <li class="<?php if(!empty($bc)&&$bc == 'usulan'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-edit"></i> TRANSAKSI<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'tambah_usulan'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Insert"><i class="fa fa-plus-square "></i> BUAT USULAN</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_usulan'){?>active<?php }?>"><a href="<?= base_url()?>Usulan"><i class="fa fa-list"></i> DAFTAR USULAN</a></li>
        </ul>
      </li>
      <?php } ?>
      <!-- VERIFIKASI USULAN -->
      <?php if($udata['type'] == 3){ ?>
      <li class="<?php if(!empty($bc)&&$bc == 'verifikasi'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-legal"></i> VERIFIKASI<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'verifikasi_usulan'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Verifikasi"><i class="fa  fa-list"></i> USULAN TERBARU</a></li>
          <!--<li class="<?php if(!empty($msbc)&&$msbc == 'usulan_obat_baru'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Insert_Obat_Baru"><i class="fa  fa-list"></i> USULAN OBAT BARU</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'usulan_obat_combinasi'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Insert_Obat_Combinasi"><i class="fa  fa-list"></i> USULAN OBAT KOMBINASI</a></li>-->
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_usulan_lengkap'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Daftar_Lengkap"><i class="fa  fa-list"></i> DAFTAR USULAN LENGKAP</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'daftar_usulan_tidak_lengkap'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Daftar_Tidak_Lengkap"><i class="fa  fa-list"></i> DAFTAR USULAN TIDAK LENGKAP</a></li>
        </ul>
      </li>
      <?php } ?>
      <!-- VERIFIKASI USULAN -->
      <?php if($udata['type'] == 3){ ?>
      <li class="<?php if(!empty($bc)&&$bc == 'usulan_obat_baru'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-file-text"></i> USULAN OBAT BARU<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'usulan_obat_baru'){?>active<?php }?>"><a href="<?= base_url()?>Usulan/Insert_Obat_Baru"><i class="fa  fa-list"></i> DAFTAR USULAN OBAT BARU</a></li>
        </ul>
      </li>
      <?php } ?>

      <!-- USERS MANAGEMENT -->
      <?php if($udata['type'] == 3){ ?>
      <li class="<?php if(!empty($bc)&&$bc == 'manajemen_user'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-user"></i> MANAJEMEN USER<i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'users'){?>active<?php }?>">
            <a><i class="fa fa-user"></i> Users</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Users"><i class="fa  fa-list "></i> DAFTAR USER</a></li>
              <li><a href="<?= base_url()?>Users/Insert"><i class="fa fa-plus-square"></i> TAMBAH USER</a></li>
            </ul>
          </li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'privilege'){?>active<?php }?>">
            <a><i class="fa fa-user"></i> Privilege</a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url()?>Privilege"><i class="fa  fa-list "></i> DAFTAR PRIVILEGE</a></li>
              <li><a href="<?= base_url()?>Privilege/Insert"><i class="fa fa-plus-square"></i> TAMBAH PRIVILEGE</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
