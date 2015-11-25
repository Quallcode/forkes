<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Sub Kelas Terapi 3 Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Sub Kelas Terapi 3</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Sub_Kelas_Terapi3/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="id_sub_terapi2">Sub Kelas Terapi2</label>
                <select class="form-control required inputSubKelasTerapi2" id="inputSubKelasTerapi2" name="id_sub_kelasterapi2[]" onchange="CheckSubKelasterapi2(this.value,1)">
                  <?php foreach( $sub_terapi2 as $key) { ?>
                    <option value="<?=$key['id_sub_kelasterapi2']?>" ><?=$key['Sub_Kelas_Terapi_2']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="id_sub_kelasterapi">ID Sub Kelas Terapi3</label>
                <input type="text" class="form-control required" id="id_sub_kelasterapi3" name="id_sub_kelasterapi3" readonly="TRUE">
              </div>
              <div class="form-group">
                <label for="Sub_Kelas_Terapi">Nama Sub Kelas Terapi3</label>
                <input type="text" class="form-control required" id="Sub_Kelas_Terapi3" name="Sub_Kelas_Terapi3" placeholder="Nama Sub Kelas Terapi 3">
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
