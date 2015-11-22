<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data Sub Kelas Terapi 3
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Sub Kelas Terapi 3</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Sub_Kelas_Terapi3/Update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_satuan">ID Sub Kelas Terapi 3 </label>
                <input type="text" class="form-control" id="id_sub_kelasterapi3" name="id_sub_kelasterapi3" value="<?= $data['id_sub_kelasterapi3']; ?>" readonly="TRUE">
              </div>
              <div class="form-group">
                <label for="nama_satuan">Nama Sub Kelas Terapi 3</label>
                <input type="text" class="form-control" id="Sub_Kelas_Terapi3" name="Sub_Kelas_Terapi3" value="<?= $data['Sub_Kelas_Terapi_3']; ?>">
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
