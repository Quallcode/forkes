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
      <li class="active"><a href="<?=base_url()?>Obat_Combinasi">Daftar Obat Kombinasi</a></li>
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
                  <th>ID Kombinasi</th>
                  <th>Nama Obat Kombinasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['id_obat_combinasi']?></td>
                      <td><a data-toggle="modal" href="#ModalDetailCO<?=$val['id_obat_combinasi']?>"><?=$val['nama_obat_combinasi']?></a></td>
                      <td>
                        <a href="<?=base_url()?>Obat_Combinasi/Update/<?=$val['id_obat_combinasi']?>" class="btn btn-info">Update</a>&nbsp;
                        <a href="<?=base_url()?>Obat_Combinasi/Delete/<?=$val['id_obat_combinasi']?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Kombinasi</th>
                  <th>Nama Obat Kombinasi</th>
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

<?php if(!empty($data)){
  foreach($data as $row){
?>
<div class="modal fade" id="ModalDetailCO<?=$row['id_obat_combinasi']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Nama Obat Kombinasi : <?php echo $row['nama_obat_combinasi']?></h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>ID ATC Obat</th>
              <th>Nama Obat</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['atc_obat'] as $j => $value2){?>
            <tr>
              <td><?=$j+1?></td>
              <td><?=$value2['id_atc_obat']?></td>
              <td><?=$value2['nama_obat']?></td>
              <td><?=$value2['keterangan']?></td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>
