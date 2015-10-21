<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Kekuatan Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Kekuatan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>kekuatan/update" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" id="id" name="id" value="<? print_r($data['id']); ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_kekuatan">ID Kekuatan</label>
                <input type="text" class="form-control" id="id_kekuatan" name="id_kekuatan" placeholder="<? print_r($data['id_kekuatan']); ?>">
              </div>
              <div class="form-group">
                <label for="besar_kekutaan">Besar Kekuatan</label>
                <input type="text" class="form-control" id="kekuatan" name="kekuatan" placeholder="<? print_r($data['kekuatan']); ?>">
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