<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Sediaan Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Sediaan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Sediaan/Insert" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="id_sediaan">ID</label>
                <input type="text" class="form-control required" id="id_sediaan" name="id_sediaan" placeholder="ID untuk Sediaan Baru">
              </div>
              <div class="form-group">
                <label for="sediaan">Sediaan</label>
                <input type="text" class="form-control required" id="nama_sediaan" name="nama_sediaan" placeholder="Masukkan Nama Sediaan">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control required" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Sediaan"></textarea>
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
