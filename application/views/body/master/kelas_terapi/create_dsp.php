<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Kelas Terapi Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Kelas Terapi</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Kelas_Terapi/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="id_satuan">ID Terapi</label>
                <input type="text" class="form-control required" id="id_terapi" name="id_terapi" placeholder="ID untuk Satuan Baru">
              </div>
              <div class="form-group">
                <label for="satuan">Nama Kelas Terapi</label>
                <input type="text" class="form-control required" id="kelas_terapi" name="kelas_terapi" placeholder="Nama Satuan">
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
