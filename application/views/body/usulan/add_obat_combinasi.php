<script type="text/javascript">
var basefolder = '<?=$basefolder?>';
var no_fornas = '<?=$no_fornas?>';
</script>
<form class="form-horizontal" action="<?=base_url()?>usulan/add_usulan" method="post" enctype="multipart/form-data">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USULAN OBAT COMBINASI
      </h1>
    </section>
    <section class="content">

      <select class="form-control" id="idSelectObatHidden" style="display:none">
        <?php foreach( $terapi as $key5) { ?>
          <option value="<?=$key5['id_terapi']?>" ><?=$key5['Kelas_terapi']?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectObatHidden" style="display:none">
        <?php foreach( $obat as $key5) { ?>
          <option value="<?=$key5['id_atc_obat']?>" ><?=$key5['nama_obat']?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectSediaanHidden" style="display:none">
        <?php foreach( $sediaan as $key6) { ?>
          <option data-id="<?=$key6['id_sediaan']?>" value="<?=$key6['id_sediaan']?>" ><?=$key6['nama_sediaan']?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectKekuatanHidden" style="display:none">
        <?php foreach( $kekuatan as $key7) { ?>
          <option value="<?=$key7['id_kekuatan']?>" ><?=$key7['kekuatan']?></option>
        <?php } ?>
      </select>

      <select class="form-controls" id="idSelectSatuanHidden" style="display:none">
        <?php foreach( $satuan as $key8) { ?>
          <option value="<?=$key8['id_satuan']?>" ><?=$key8['nama_satuan']?></option>
        <?php } ?>
      </select>

      <div class="row" >
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">


              <div id="form-usulan">
                <div class="box-body clonedInput" id="entry1">
                  <div class="form-group">
                    <label for="inputObatCombinasi" class="col-sm-2 control-label labelObatCombinasi">Nama Obat Kombinasi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control inputTypeUsulan" id="inputTypeUsulan" placeholder="Nama Obat Kombinasi" name="tipe_usulan[]">
                    </div>
                  </div>
                  <!-- select -->
                  <div class="form-group">
                    <label for="inputNamaObat" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>
                    <div class="col-sm-6">
                      <select class="form-control inputNamaObat" id="inputNamaObat" name="id_atc_obat[]">
                        <?php foreach( $obat as $key) { ?>
                          <option value="<?=$key['id_atc_obat']?>" ><?=$key['nama_obat']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSediaan" class="col-sm-2 control-label labelSediaan">Sediaan</label>
                    <div class="col-sm-10">
                      <select class="form-control inputSediaan" id="inputSediaan" name="id_sediaan[]" onchange="CheckSediaan(this.value)">
                        <?php foreach( $sediaan as $key2) { ?>
                          <option data-id="<?=$key6['id_sediaan']?>" value="<?=$key2['id_sediaan']?>"><?=$key2['nama_sediaan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <!-- checkbox
                  <div class="form-group">
                    <label for="inputInfus" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Larutan Infus
                        </label>
                      </div>
                    </div>
                    <label for="inputInjeksi" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Larutan Injeksi
                        </label>
                      </div>
                    </div>
                    <label for="inputSerbukInjeksi" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Serbuk Injeksi
                        </label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="inputKekuatan" class="col-sm-2 control-label labelKekuatan">Kekuatan</label>
                    <div class="col-sm-10">
                      <select class="form-control inputKekuatan" id="inputKekuatan" name="id_kekuatan[]">
                        <?php foreach( $kekuatan as $key3) { ?>
                          <option value="<?=$key3['id_kekuatan']?>"><?=$key3['kekuatan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSatuan" class="col-sm-2 control-label labelSatuan">Satuan</label>
                    <div class="col-sm-10">
                      <select class="form-control inputSatuan" id="inputSatuan" name="id_satuan[]">
                        <?php foreach( $satuan as $key4) { ?>
                          <option value="<?=$key4['id_satuan']?>"><?=$key4['nama_satuan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJurnal" class="col-sm-2 control-label labelJurnal">Jurnal</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputJurnal" rows="3" placeholder="Masukkan Jurnal" id="inputJurnal" name="jurnal[]"></textarea>
                      <b>File Pendukung Jurnal (optional)</b>
                      <input type="file" id="inputJurnal" class="form-control inputJurnal" name="file_jurnal[]">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlasan" class="col-sm-2 control-label labelAlasan">Alasan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputAlasan" rows="3" placeholder="Masukkan Alasan" id="inputAlasan" name="alasan[]"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputRestriksi" class="col-sm-2 control-label labelRestriksi">Restriksi baru</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputRestriksi" rows="3" placeholder="Masukkan Restriksi baru" id="inputRestriksi" name="restriksi[]"></textarea>
                    </div>
                  </div>
                  <!--<div class="form-group">
                    <label for="inputRestriksi" class="col-sm-2 control-label">Tingkat Faskes</label>
                    <div class="radio">
                      <div class="col-sm-10">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">TK1
                        </label>
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">TK2
                        </label>
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">TK3
                        </label>
                      </div>
                    </div>
                  </div>-->
                  <div class="form-group">
                    <label for="inputTypeUsulan" class="col-sm-2 control-label labelTypeUsulan">Type Usulan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control inputTypeUsulan" id="inputTypeUsulan" placeholder="Type Usulan" name="tipe_usulan[]">
                    </div>
                  </div>
                  <!--<div class="form-group">
                    <label for="inputPRB" class="col-sm-2 control-label">PRB</label>
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                        </label>
                      </div>
                    </div>
                  </div>-->
                </div><!-- /.box-body -->
              </div>

              <div class="box-footer">
                <a href="#" class="btn btn-default">Batal</a>
                <button type="button" id="btnAdd" class="btn btn-default">Tambah Details</button>
                <button type="button" id="btnDel" class="btn btn-default">Hapus Details</button>
                <button type="submit" class="btn btn-info pull-right">Masukkan</button>
              </div><!-- /.box-footer -->

          </div><!-- /.box -->
        </div><!-- /.col -->
      </div>   <!-- /.row -->
    </section>
  </div>
</form>
