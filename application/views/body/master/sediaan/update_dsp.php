<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data Sediaan
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Sediaan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>sediaan/update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id" name="id" value="<? echo $data['id']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_sediaan">ID Sediaan</label>
                <input type="text" class="form-control" id="id_sediaan" name="id_sediaan" value="<? echo $data['id_sediaan']; ?>">
              </div>
              <div class="form-group">
                <label for="nama_sediaan">Nama Sediaan</label>
                <input type="text" class="form-control" id="nama_sediaan" name="nama_sediaan" value="<? echo $data['nama_sediaan']; ?>">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<? echo $data['keterangan']; ?>">
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