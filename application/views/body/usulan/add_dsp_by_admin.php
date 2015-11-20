<script type="text/javascript">
var basefolder = '<?=$basefolder?>';
var no_fornas = '<?=$no_fornas?>';
</script>
<form class="form-horizontal" action="<?=base_url()?>Usulan/Add_Usulan" method="post" enctype="multipart/form-data">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USULAN
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info table-responsive">
            <table class="table table-hover">
              <tr>
                <td>Nama Rumah Sakit</td>
                <td>:</td>
                <td><?=$rs['nama_rs']?></td>
              </tr>
              <tr>
                <td>Kepemilikan</td>
                <td>:</td>
                <td><?=$rs['deskripsi_kepemilikan']?></td>
              </tr>
              <tr>
                <td>Jenis</td>
                <td>:</td>
                <td><?=$rs['jenis_rs']?></td>
              </tr>
              <tr>
                <td>Tipe</td>
                <td>:</td>
                <td><?=$rs['jenis_kelas_rs']?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$rs['alamat_rs']?></td>
              </tr>
            </table>
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div>   <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNoEfornas" class="col-sm-2 control-label">No E-Fornas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNoEfornas" name="nomor_efornas" value="<?=$nousulan?>" readonly="TRUE">
                  </div>
                </div>

                <form action="" id="form-upload">
                  <div class="form-group">
                    <label for="inputFile" class="col-sm-2 control-label">Surat Pengantar</label>
                    <div class="col-sm-10" id="upload1">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                          <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                          <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="glyphicon glyphicon-paperclip"></i> Select file</span><span class="fileinput-exists"><i class="glyphicon glyphicon-repeat"></i> Change</span><input type="file" name="file"></span>
                          <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                          <a href="#" id="upload-btn" class="input-group-addon btn btn-success fileinput-exists"><i class="glyphicon glyphicon-open"></i> Upload</a>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputFile" class="col-sm-2 control-label">Daftar Usulan Obat</label>
                    <div class="col-sm-10">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput" id="upload2">
                          <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                          <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="glyphicon glyphicon-paperclip"></i> Select file</span><span class="fileinput-exists"><i class="glyphicon glyphicon-repeat"></i> Change</span><input type="file" name="file2"></span>
                          <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                          <a href="#" id="upload-btn2" class="input-group-addon btn btn-success fileinput-exists"><i class="glyphicon glyphicon-open"></i> Upload</a>
                        </div>

                      <!-- <progress id="progress-bar" max="100" value="0"></progress> -->
                      <div class="progress" style="display:none;">
                        <div id="progress-bar" class="progress-bar progress-bar-success progress-bar-striped " role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                          20%
                        </div>
                      </div>

                      <ul class="list-group"><ul>
                    </div>
                  </div>
                </form>
                <!--<div class="form-group">
                  <label for="inputSurat" class="col-sm-2 control-label">Surat Pengantar</label>
                  <div class="col-sm-10">
                    <input type="file" id="inputSurat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDaftarUsulan" class="col-sm-2 control-label">Daftar Usulan Obat</label>
                  <div class="col-sm-10">
                    <input type="file" id="inputDaftarUsulan">
                  </div>
                </div>-->
              </div><!-- /.box-body -->
            </form>
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div>   <!-- /.row -->

      <select class="form-control" id="idSelectTerapiHidden" style="display:none">
        <?php foreach( $terapi as $key5) { ?>
          <option value="<?=$key5['id_terapi']?>" ><?=$key5['Kelas_terapi']?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectObatHidden" style="display:none">
        <?php foreach( $obat as $key5) { ?>
          <option value="<?=$key5['id_atc_obat']?>" ><?=$key5['nama_obat']?>&nbsp;<?php if(!empty($key5['translate_nama_obat'])){?>(<sub><?=$key5['translate_nama_obat']?></sub>)<?php } ?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectSediaanHidden" style="display:none" onchange="CheckSediaan(this.value)">
        <?php foreach( $sediaan as $key6) { ?>
          <option data-id="<?=$key6['id_sediaan']?>" value="<?=$key6['id_sediaan']?>" ><?=$key6['nama_sediaan']?></option>
        <?php } ?>
      </select>

      <select class="form-control" id="idSelectKekuatanHidden" style="display:none" onchange="CheckKekuatan(this.value)">
        <?php foreach( $kekuatan as $key7) { ?>
          <option value="<?=$key7['id_kekuatan']?>" ><?=$key7['kekuatan']?></option>
        <?php } ?>
      </select>

      <select class="form-controls" id="idSelectSatuanHidden" style="display:none" onchange="CheckSatuan(this.value)">
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
                  <h2  class="heading-reference">Entry #1</h2>
                  <!-- select -->
                  <div class="form-group">
                    <label for="inputKelasTerapi" class="col-sm-2 control-label labelKelasTerapi">Kelas Terapi</label>
                    <div class="col-sm-10">
                      <select class="form-control inputKelasTerapi" id="inputKelasTerapi1" name="id_terapi[]">
                        <?php foreach( $terapi as $key) { ?>
                          <option value="<?=$key['id_terapi']?>" ><?=$key['Kelas_terapi']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNamaObat" class="col-sm-2 control-label labelNamaObat">Nama Obat</label>
                    <div class="col-sm-10">
                      <select class="form-control inputNamaObat" id="inputNamaObat1" name="id_atc_obat[]" onchange="CheckObat(this.value,1)">
                        <?php foreach( $obat as $key) { ?>
                          <option value="<?=$key['id_atc_obat']?>" ><?=$key['nama_obat']?> &nbsp;<?php if(!empty($key['translate_nama_obat'])){?>(<sub><?=$key['translate_nama_obat']?></sub>)<?php } ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSediaan" class="col-sm-2 control-label labelSediaan">Sediaan</label>
                    <div class="col-sm-10">
                      <select class="form-control inputSediaan" id="inputSediaan1" name="id_sediaan[]" onchange="CheckSediaan(this.value,1)">
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
                      <select class="form-control inputKekuatan" id="inputKekuatan1" name="id_kekuatan[]" onchange="CheckKekuatan(this.value,1)">
                        <?php foreach( $kekuatan as $key3) { ?>
                          <option value="<?=$key3['id_kekuatan']?>"><?=$key3['kekuatan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSatuan" class="col-sm-2 control-label labelSatuan">Satuan</label>
                    <div class="col-sm-10">
                      <select class="form-control inputSatuan" id="inputSatuan1" name="id_satuan[]" onchange="CheckSatuan(this.value,1)">
                        <?php foreach( $satuan as $key4) { ?>
                          <option value="<?=$key4['id_satuan']?>"><?=$key4['nama_satuan']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJurnal" class="col-sm-2 control-label labelJurnal">Jurnal</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputJurnal" rows="3" placeholder="Masukkan Jurnal" id="inputJurnal1" name="jurnal[]"></textarea>
                      <b>File Pendukung Jurnal (optional)</b>
                      <input type="file" id="inputJurnal1" class="form-control inputJurnal" name="file_jurnal[]">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlasan" class="col-sm-2 control-label labelAlasan">Alasan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputAlasan" rows="3" placeholder="Masukkan Alasan" id="inputAlasan1" name="alasan[]"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputRestriksi" class="col-sm-2 control-label labelRestriksi">Restriksi baru</label>
                    <div class="col-sm-10">
                      <textarea class="form-control inputRestriksi" rows="3" placeholder="Masukkan Restriksi baru" id="inputRestriksi1" name="restriksi[]"></textarea>
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
                      <input type="hidden" class="form-control inputTypeUsulan" id="inputTypeUsulan1" placeholder="Type Usulan" name="tipe_usulan[]">
                      <input type="text" class="form-control inputTypeUsulan" id="inputTypeUsulanRead1" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTingkatFaskes" class="col-sm-2 control-label labelTigkatFaskes">Tingkat Faskes</label>
                    <div class="col-sm-2">
                      <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes" name="tingkat_faskes1" value="1" checked>
                      TK I
                    </input>
                    </div>
                    <div class="col-sm-2">
                      <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes" name="tingkat_faskes1" value="2">
                      TK II
                    </input>
                    </div>
                    <div class="col-sm-2">
                      <input type="radio" class="inputTingkatFaskes" id="inputTingkatFaskes" name="tingkat_faskes1" value="3">
                      TK III
                      </input>
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
