<?php $udata = $this->session->userdata('user_data'); //print_r($udata);exit;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Satuan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>Satuan">Daftar Satuan</a></li>
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
                  <th>ID Satuan</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['id_satuan']?></td>
                      <td><?=$val['nama_satuan']?></td>
                      <td><?=$val['keterangan']?></td>
                      <td>
                        <?php if($udata['satuan_write'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Satuan/Update/<?=$val['id']?>" class="btn btn-info">Update</a>
                        <? } ?>
                        &nbsp;
                        <?php if($udata['satuan_delete'] == 'off'){}else{?>
                        <a href="<?=base_url()?>Satuan/Delete/<?=$val['id']?>" class="btn btn-danger">Delete</a>
                        <? } ?>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Satuan</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
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
