<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Satuan Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Satuan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>satuan/insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="id_satuan">ID Satuan</label>
                <input type="text" class="form-control" id="id_satuan" name="id_satuan" placeholder="ID untuk Satuan Baru">
              </div>
              <div class="form-group">
                <label for="satuan">Nama Satuan</label>
                <input type="text" class="form-control" id="nama_satuan" name="nama_satuan" placeholder="Nama Satuan">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
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
