<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Sub Kelas Terapi Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Sub Kelas Terapi</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Sub_Kelas_Terapi/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="id_terapi">Kelas Terapi</label>
                <select class="form-control inputKelasTerapi" id="inputKelasTerapi1" name="id_terapi[]">
                  <?php foreach( $terapi as $key) { ?>
                    <option value="<?=$key['id_terapi']?>" ><?=$key['Kelas_terapi']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="id_sub_kelasterapi">ID Sub Kelas Terapi</label>
                <input type="text" class="form-control" id="id_sub_kelasterapi" name="id_sub_kelasterapi" placeholder="ID untuk Sub Kelas Terapi Baru">
              </div>
              <div class="form-group">
                <label for="Sub_Kelas_Terapi">Nama Sub Kelas Terapi</label>
                <input type="text" class="form-control" id="Sub_Kelas_Terapi" name="Sub_Kelas_Terapi" placeholder="Nama Sub Kelas Terapi">
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
