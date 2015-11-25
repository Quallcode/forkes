<?php $udata = $this->session->userdata('user_data'); //print_r($data);exit;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>User E-Fornas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>Keterangan_Atc_Obat">Daftar User E-Fornas</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Tipe User</th>
                  <th>Status Online</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['username']?></td>
                      <td><?=$val['nama']?></td>
                      <td><?=$val['email']?></td>
                      <td><?=$val['no_telp']?></td>
                      <td><?=$val['name']?></td>
                      <? if($val['flag'] == 1){ ?>
                      <td><img src="<?=base_url()?>img/online.png" width="20px" /> Online</td>
                      <? }else{ ?>
                      <td><img src="<?=base_url()?>img/offline.png" width="20px" /> Offline</td>
                      <? } ?>
                      <td>
                        <?php if($udata['users_write'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Users/Update/<?=$val['id']?>" class="btn btn-info">Update</a>
                        <? } ?>
                        &nbsp;
                        <?php if($udata['users_delete'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Users/Delete/<?=$val['id']?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" class="btn btn-danger">Delete</a>
                        <? } ?>
                        &nbsp;
                        <a href="<?=base_url()?>Users/Logout/<?=$val['username']?>" onclick="return confirm('Apakah Anda Yakin Logout Manual?')" class="btn btn-danger">Logout</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Tipe User</th>
                  <th>Status Online</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
