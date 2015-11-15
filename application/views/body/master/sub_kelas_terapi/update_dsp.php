<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data Satuan
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Satuan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Sub_Kelas_Terapi/update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id_sub_kelasterapi" name="id_sub_kelasterapi" value="<?= $data['Sub_Kelas_Terapi']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_satuan">ID Sub Kelas Terapi </label>
                <input type="text" class="form-control" id="id_sub_kelasterapi" name="id_sub_kelasterapi" value="<?= $data['id_sub_kelasterapi']; ?>" readonly="TRUE">
              </div>
              <div class="form-group">
                <label for="nama_satuan">Nama Sub Kelas Terapi</label>
                <input type="text" class="form-control" id="Sub_Kelas_Terapi" name="Sub_Kelas_Terapi" value="<?= $data['Sub_Kelas_Terapi']; ?>">
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
