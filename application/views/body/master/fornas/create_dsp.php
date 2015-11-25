<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Fornas Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master Fornas</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Fornas/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="kelas_terapi">Kelas Terapi*</label>
                <select name="kelas_terapi" id="kelas_terapi" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($kelas_terapi as $terapi) { ?>
						<option value="<?= $terapi['id_terapi'].'+'.$terapi['Kelas_terapi'] ?>"><?= $terapi['Kelas_terapi'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi">Sub Kelas Terapi 1 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi" id="sub_kelasterapi" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi as $subterapi) { ?>
						<option value="<?= $subterapi['id_sub_kelasterapi'].'+'.$subterapi['Sub_Kelas_Terapi'] ?>"><?= $subterapi['Sub_Kelas_Terapi'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi2">Sub Kelas Terapi 2 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi2" id="sub_kelasterapi2" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi2 as $subterapi2) { ?>
						<option value="<?= $subterapi2['id_sub_kelasterapi2'].'+'.$subterapi2['Sub_Kelas_Terapi_2'] ?>"><?= $subterapi2['Sub_Kelas_Terapi_2'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi3">Sub Kelas Terapi 3 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi3" id="sub_kelasterapi3" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi3 as $subterapi3) { ?>
						<option value="<?= $subterapi3['id_sub_kelasterapi3'].'+'.$subterapi3['Sub_Kelas_Terapi_3'] ?>"><?= $subterapi3['Sub_Kelas_Terapi_3'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="atc_obat">ATC Obat*</label>
                <select name="atc_obat" id="atc_obat" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($atc_obat as $atc) { ?>
						<option value="<?= $atc['id_atc_obat'].'+'.$atc['nama_obat'] ?>"><?= $atc['nama_obat'] .' ( '. $atc['id_atc_obat'] .' )' ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="sediaan">Sediaan*</label>
                <select name="sediaan" id="sediaan" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sediaan as $sedia) { ?>
						<option value="<?= $sedia['id_sediaan'].'+'.$sedia['nama_sediaan'] ?>"><?= $sedia['nama_sediaan'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="kekuatan">Kekuatan*</label>
                <select name="kekuatan" id="kekuatan" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($kekuatan as $kuat) { ?>
						<option value="<?= $kuat['id_kekuatan'].'+'.$kuat['kekuatan'] ?>"><?= $kuat['kekuatan'] ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="satuan">Satuan*</label>
                <select name="satuan" id="satuan" class="form-control required inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($satuan as $satu) { ?>
						<option value="<?= $satu['id_satuan'].'+'.$satu['nama_satuan'] ?>"><?= $satu['nama_satuan'] ?></option>
                    <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="subkutan">Subkutan*</label><br />
                <input type="radio" name="subkutan" id="subkutan" value="√" /> Ya
                &nbsp;<input type="radio" name="subkutan" id="subkutan" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intrakutan*</label><br />
                <input type="radio" name="intrakutan" id="intrakutan" value="√" /> Ya
                &nbsp;<input type="radio" name="intrakutan" id="intrakutan" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intramuscular*</label><br />
                <input type="radio" name="intramuscular" id="intramuscular" value="√" /> Ya
                &nbsp;<input type="radio" name="intramuscular" id="intramuscular" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intravena*</label><br />
                <input type="radio" name="intravena" id="intravena" value="√" /> Ya
                &nbsp;<input type="radio" name="intravena" id="intravena" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intravena Bolus*</label><br />
                <input type="radio" name="intravena_bolus" id="intravena_bolus" value="√" /> Ya
                &nbsp;<input type="radio" name="intravena_bolus" id="intravena_bolus" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intra Arteri*</label><br />
                <input type="radio" name="intra_arteri" id="intra_arteri" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_arteri" id="intra_arteri" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intralumbal*</label><br />
                <input type="radio" name="intralumbal" id="intralumbal" value="√" /> Ya
                &nbsp;<input type="radio" name="intralumbal" id="intralumbal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intraperitoneal*</label><br />
                <input type="radio" name="intraperitoneal" id="intraperitoneal" value="√" /> Ya
                &nbsp;<input type="radio" name="intraperitoneal" id="intraperitoneal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intrapleural*</label><br />
                <input type="radio" name="intrapleural" id="intrapleural" value="√" /> Ya
                &nbsp;<input type="radio" name="intrapleural" id="intrapleural" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intracardial*</label><br />
                <input type="radio" name="intracardial" id="intracardial" value="√" /> Ya
                &nbsp;<input type="radio" name="intracardial" id="intracardial" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Anti Artikuler*</label><br />
                <input type="radio" name="anti_artikuler" id="anti_artikuler" value="√" /> Ya
                &nbsp;<input type="radio" name="anti_artikuler" id="anti_artikuler" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Implantasi Subkutan*</label><br />
                <input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="√" /> Ya
                &nbsp;<input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Rektal*</label><br />
                <input type="radio" name="rektal" id="rektal" value="√" /> Ya
                &nbsp;<input type="radio" name="rektal" id="rektal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intranasal*</label><br />
                <input type="radio" name="intranasal" id="intranasal" value="√" /> Ya
                &nbsp;<input type="radio" name="intranasal" id="intranasal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intra_okuler*</label><br />
                <input type="radio" name="intra_okuler" id="intra_okuler" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_okuler" id="intra_okuler" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intra Aurikuler*</label><br />
                <input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intrapulmonal*</label><br />
                <input type="radio" name="intrapulmonal" id="intrapulmonal" value="√" /> Ya
                &nbsp;<input type="radio" name="intrapulmonal" id="intrapulmonal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Intravaginal*</label><br />
                <input type="radio" name="intravaginal" id="intravaginal" value="√" /> Ya
                &nbsp;<input type="radio" name="intravaginal" id="intravaginal" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Infus Drip*</label><br />
                <input type="radio" name="infus_drip" id="infus_drip" value="√" /> Ya
                &nbsp;<input type="radio" name="infus_drip" id="infus_drip" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">Injeksi Infiltr*</label><br />
                <input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="√" /> Ya
                &nbsp;<input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">PV*</label><br />
                <input type="radio" name="p_v" id="p_v" value="√" /> Ya
                &nbsp;<input type="radio" name="p_v" id="p_v" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">TK 1*</label><br />
                <input type="radio" name="Tk1" id="Tk1" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk1" id="Tk1" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">TK 2*</label><br />
                <input type="radio" name="Tk2" id="Tk2" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk2" id="Tk2" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">TK 3*</label><br />
                <input type="radio" name="Tk3" id="Tk3" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk3" id="Tk3" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">PRB*</label><br />
                <input type="radio" name="PRB" id="PRB" value="√" /> Ya
                &nbsp;<input type="radio" name="PRB" id="PRB" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="subkutan">PP*</label><br />
                <input type="radio" name="PP" id="PP" value="√" /> Ya
                &nbsp;<input type="radio" name="PP" id="PP" value="" /> Tidak
              </div>
              <div class="form-group">
                <label for="restriksi_kelas_terapi">Restriksi Kelas Terapi</label>
                <input type="text" class="form-control" id="restriksi_kelas_terapi" name="restriksi_kelas_terapi" placeholder="Restriksi Kelas Terapi">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_1">Restriksi Sub Kelas Terapi 1</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_1" name="restriksi_subkelas_terapi_1" placeholder="Restriksi Sub Kelas Terapi 1">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_2">Restriksi Sub Kelas Terapi 2</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_2" name="restriksi_subkelas_terapi_2" placeholder="Restriksi Sub Kelas Terapi 2">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_3">Restriksi Sub Kelas Terapi 3</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_3" name="restriksi_subkelas_terapi_3" placeholder="Restriksi Sub Kelas Terapi 3">
              </div>

              <div class="form-group">
                <label for="restriksi_obat">Restriksi Obat</label>
                <input type="text" class="form-control" id="restriksi_obat" name="restriksi_obat" placeholder="Restriksi Obat">
              </div>
              <div class="form-group">
                <label for="restriksi_obat1">Restriksi Obat 1</label>
                <input type="text" class="form-control" id="restriksi_obat1" name="restriksi_obat1" placeholder="Restriksi Obat 1">
              </div>
              <div class="form-group">
                <label for="restriksi_obat2">Restriksi Obat 2</label>
                <input type="text" class="form-control" id="restriksi_obat2" name="restriksi_obat2" placeholder="Restriksi Obat 2">
              </div>
              <div class="form-group">
                <label for="restriksi_obat3">Restriksi Obat 3</label>
                <input type="text" class="form-control" id="restriksi_obat3" name="restriksi_obat3" placeholder="Restriksi Obat 3">
              </div>
              <div class="form-group">
                <label for="restriksi_obat4">Restriksi Obat 4</label>
                <input type="text" class="form-control" id="restriksi_obat4" name="restriksi_obat4" placeholder="Restriksi Obat 4">
              </div>

              <div class="form-group">
                <label for="restriksi_sediaan">Restriksi Sediaan</label>
                <input type="text" class="form-control" id="restriksi_sediaan" name="restriksi_sediaan" placeholder="Restriksi Sediaan">
              </div>
              <div class="form-group">
                <label for="restriksi_sediaan2">Restriksi Sediaan 2</label>
                <input type="text" class="form-control" id="restriksi_sediaan2" name="restriksi_sediaan2" placeholder="Restriksi Sediaan 2">
              </div>
              <div class="form-group">
                <label for="restriksi_sediaan3">Restriksi Sediaan 3</label>
                <input type="text" class="form-control" id="restriksi_sediaan3" name="restriksi_sediaan3" placeholder="Restriksi Sediaan 3">
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
