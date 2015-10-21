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
          <form role="form" action="<?=base_url()?>sediaan/insert" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="id_sediaan">ID</label>
                <input type="text" class="form-control" id="id_sediaan" placeholder="ID untuk Sediaan Baru">
              </div>
              <div class="form-group">
                <label for="sediaan">Sediaan</label>
                <input type="text" class="form-control" id="sediaan" placeholder="Masukkan Nama Sediaan">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" placeholder="Masukkan Keterangan Sediaan"></textarea>
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
