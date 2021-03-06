<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input ATC Obat Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Atc Obat</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Atc_Obat/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="id_atc_obat">ID ATC Obat</label>
                <input type="text" class="form-control required" id="id_atc_obat" name="id_atc_obat" placeholder="ID untuk ATC Obat">
              </div>
              <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" class="form-control required" id="nama_obat" name="nama_obat" placeholder="Nama Obat">
              </div>
              <div class="form-group">
                <label for="id_keterangan">Keterangan</label>
                <select class="form-control required" id="id_keterangan" name="id_keterangan">
                  <?php if(!empty($data)){?>
                    <?php foreach($data as $val){?>
                      <option value="<?=$val['id']?>"><?=$val['keterangan']?></option>
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
