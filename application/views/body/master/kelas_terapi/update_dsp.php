<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data Kelas Terapi
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
          <form role="form" action="<?=base_url()?>Kelas_Terapi/update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id_terapi']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_satuan">ID Kelas Terapi</label>
                <input type="text" class="form-control" id="id_satuan" name="id_kelas_terapi" value="<?= $data['id_terapi']; ?>" readonly="TRUE">
              </div>
              <div class="form-group">
                <label for="nama_satuan">Nama Kelas Terapi</label>
                <input type="text" class="form-control" id="nama_satuan" name="nama_terapi" value="<?= $data['Kelas_terapi']; ?>">
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
