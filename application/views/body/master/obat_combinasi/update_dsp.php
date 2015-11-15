<script type="text/javascript">
var basefolder = '<?=$basefolder?>';
var no_fornas = '<?=$no_fornas?>';
</script>
<form class="form-horizontal" action="<?=base_url()?>Obat_Combinasi/Edit_Usulan" method="post" enctype="multipart/form-data">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USULAN OBAT COMBINASI
      </h1>
    </section>
    <section class="content">

      <select class="form-control" id="idSelectObatHidden" style="display:none">
        <?php foreach( $obat as $key5) { ?>
          <option value="<?=$key5['id_atc_obat']?>" ><?=$key5['nama_obat']?></option>
        <?php } ?>
      </select>


      <div class="row" >
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">


              <div>
                <div class="box-body">
                  <div class="form-group">
                    <!--<?php print_r($atc_obat); print_r($nama_combinasi); ?>-->
                    <label for="inputObatCombinasi" class="col-sm-2 control-label labelObatCombinasi">Nama Obat Kombinasi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control inputObatCombinasi" id="inputObatCombinasi" placeholder="Nama Obat Kombinasi" name="obat_combinasi" value="<?=$nama_combinasi?>" readonly="TRUE">
                    </div>
                  </div>
                </div><!-- tutup box body-->
              </div><!--tutup div atas-->


              <div id="form-usulan2">
                <?php foreach($atc_obat as $i => $data){
                $i +=1?>
                <div class="box-body clonedInput" id="entry<?=$i?>">
                  <!-- select -->
                  <div class="form-group">
                    <label for="inputNamaObat" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>
                    <div class="col-sm-6">
                      <select class="form-control inputNamaObat1" id="inputNamaObat<?=$i?>" name="id_atc_obat[]">
                        <?php foreach( $obat as $key) { ?>
                          <option value="<?=$key['id_atc_obat']?>" <?php if($key['id_atc_obat'] == $data['id_atc_obat']) { ?>selected="selected"<?php } ?> ><?=$key['nama_obat']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <?php if($i == 1) { ?>
                      <div class="col-sm-4">
                        <button type="button" id="btnAddObat" class="btn btn-default">Tambah Obat</button>
                      </div>
                    <?php } ?>
                  </div>
                </div><!-- /.box-body -->
                <?php } ?>
              </div>

              <div class="box-footer">
                <!--<a href="#" class="btn btn-default">Batal</a>
                <button type="button" id="btnAdd" class="btn btn-default">Tambah Details</button>
                <button type="button" id="btnDel" class="btn btn-default">Hapus Details</button>-->
                <button type="submit" class="btn btn-info pull-left">Masukkan</button>
              </div><!-- /.box-footer -->

          </div><!-- /.box -->
        </div><!-- /.col -->
      </div>   <!-- /.row -->
    </section>
  </div>
</form>

<?php foreach($atc_obat as $j => $data){?>
<script type="text/javascript">
  $(function () {
    $("#inputKelasTerapi<?=$j+1?>").select2();
    $("#inputFaskes<?=$j+1?>").select2();
    $("#inputNamaObat<?=$j+1?>").select2();
    $("#inputSediaan<?=$j+1?>").select2();
    $("#inputKekuatan<?=$j+1?>").select2();
    $("#inputSatuan<?=$j+1?>").select2();
    $("#inputJurnal<?=$j+1?>").ckeditor();
  });
</script>
<?php } ?>
