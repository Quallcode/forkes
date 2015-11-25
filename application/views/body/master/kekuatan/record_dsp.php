<?php $udata = $this->session->userdata('user_data'); //print_r($udata);exit;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Kekuatan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>Kekuatan">Daftar Kekuatan</a></li>
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
                  <th>ID Kekuatan</th>
                  <th>Kekuatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['id_kekuatan']?></td>
                      <td><?=$val['kekuatan']?></td>
                      <td>
                        <?php if($udata['kekuatan_write'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Kekuatan/Update/<?=$val['id']?>" class="btn btn-info">Update</a>
                        <? } ?>
                        &nbsp;
                        <?php if($udata['kekuatan_delete'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Kekuatan/Delete/<?=$val['id']?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" class="btn btn-danger">Delete</a>
                        <? } ?>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Kekuatan</th>
                  <th>Kekuatan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
