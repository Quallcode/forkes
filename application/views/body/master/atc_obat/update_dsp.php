<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data ATC Obat
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data ATC Obat</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Atc_Obat/Update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_atc_obat">ID ATC Obat</label>
                <input type="text" class="form-control" id="id_atc_obat" name="id_atc_obat" value="<?= $data['id_atc_obat']; ?>">
              </div>
              <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $data['nama_obat']; ?>">
              </div>
              <div class="form-group">
                <label for="id_keterangan">Keterangan</label>
                <select class="form-control" id="id_keterangan" name="id_keterangan">
                  <?php if(!empty($data2)){?>
                    <?php foreach($data2 as $val2){?>
                      <option <?php if($val2['id'] == $data['id_keterangan']){?>"selected = 'selected'"<?php } ?> value="<?=$val2['id']?>"><?=$val2['keterangan']?></option>
                    <?php }?>
                  <?php } ?>
                </select>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
