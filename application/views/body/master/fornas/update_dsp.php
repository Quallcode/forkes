<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Data Fornas
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Fornas</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Fornas/Update" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
              	<input type="hidden" name="id_fornas" id="id_fornas" value="<?= $id_fornas ?>" />
                <label for="kelas_terapi">Kelas Terapi*</label>
                <select name="kelas_terapi" id="kelas_terapi" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($kelas_terapi as $terapi) { ?>
						<option value="<?= $terapi['id_terapi'].'+'.$terapi['Kelas_terapi'] ?>"><?= $terapi['Kelas_terapi'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi">Sub Kelas Terapi 1 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi" id="sub_kelasterapi" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi as $subterapi) { ?>
						<option value="<?= $subterapi['id_sub_kelasterapi'].'+'.$subterapi['Sub_Kelas_Terapi'] ?>"><?= $subterapi['Sub_Kelas_Terapi'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi2">Sub Kelas Terapi 2 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi2" id="sub_kelasterapi2" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi2 as $subterapi2) { ?>
						<option value="<?= $subterapi2['id_sub_kelasterapi2'].'+'.$subterapi2['Sub_Kelas_Terapi_2'] ?>"><?= $subterapi2['Sub_Kelas_Terapi_2'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="sub_kelasterapi3">Sub Kelas Terapi 3 <small>(Jika Kosong silakan pilih "Choose One")</small></label>
                <select name="sub_kelasterapi3" id="sub_kelasterapi3" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sub_kelasterapi3 as $subterapi3) { ?>
						<option value="<?= $subterapi3['id_sub_kelasterapi3'].'+'.$subterapi3['Sub_Kelas_Terapi_3'] ?>"><?= $subterapi3['Sub_Kelas_Terapi_3'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="atc_obat">ATC Obat*</label>
                <select name="atc_obat" id="atc_obat" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($atc_obat as $atc) { ?>
						<option value="<?= $atc['id_atc_obat'].'+'.$atc['nama_obat'] ?>"><?= $atc['nama_obat'] .' ( '. $atc['id_atc_obat'] .' )' ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="sediaan">Sediaan*</label>
                <select name="sediaan" id="sediaan" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($sediaan as $sedia) { ?>
						<option value="<?= $sedia['id_sediaan'].'+'.$sedia['nama_sediaan'] ?>"><?= $sedia['nama_sediaan'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="kekuatan">Kekuatan*</label>
                <select name="kekuatan" id="kekuatan" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($kekuatan as $kuat) { ?>
						<option value="<?= $kuat['id_kekuatan'].'+'.$kuat['kekuatan'] ?>"><?= $kuat['kekuatan'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              <div class="form-group">
                <label for="satuan">Satuan*</label>
                <select name="satuan" id="satuan" class="form-control inputKelasTerapi">
                	<option value="" selected="selected">Choose one</option>
					<?php foreach($satuan as $satu) { ?>
						<option value="<?= $satu['id_satuan'].'+'.$satu['nama_satuan'] ?>"><?= $satu['nama_satuan'] ?></option>
                    <?php } ?>
                </select> 
              </div>
              
              <div class="form-group">
                <label for="subkutan">Subkutan*</label><br />
                <? if(!empty($data[0]['Subkutan']) || $data[0]['Subkutan']!=0){ ?>
                <input type="radio" name="subkutan" id="subkutan" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="subkutan" id="subkutan" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="subkutan" id="subkutan" value="√" /> Ya
                &nbsp;<input type="radio" name="subkutan" id="subkutan" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intrakutan">Intrakutan*</label><br />
                <? if(!empty($data[0]['intrakutan']) || $data[0]['intrakutan']!=0){ ?>
                <input type="radio" name="intrakutan" id="intrakutan" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intrakutan" id="intrakutan" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intrakutan" id="intrakutan" value="√" /> Ya
                &nbsp;<input type="radio" name="intrakutan" id="intrakutan" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intramuscular">Intramuscular*</label><br />
                <? if(!empty($data[0]['intramuscular']) || $data[0]['intramuscular']!=0){ ?>
                <input type="radio" name="intramuscular" id="intramuscular" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intramuscular" id="intramuscular" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intramuscular" id="intramuscular" value="√" /> Ya
                &nbsp;<input type="radio" name="intramuscular" id="intramuscular" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intravena">Intravena*</label><br />
                <? if(!empty($data[0]['intravena']) || $data[0]['intravena']!=0){ ?>
                <input type="radio" name="intravena" id="intravena" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intravena" id="intravena" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intravena" id="intravena" value="√" /> Ya
                &nbsp;<input type="radio" name="intravena" id="intravena" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intravena_bolus">Intravena Bolus*</label><br />
                <? if(!empty($data[0]['intravena_bolus']) || $data[0]['intravena_bolus']!=0){ ?>
                <input type="radio" name="intravena_bolus" id="intravena_bolus" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intravena_bolus" id="intravena_bolus" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intravena_bolus" id="intravena_bolus" value="√" /> Ya
                &nbsp;<input type="radio" name="intravena_bolus" id="intravena_bolus" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intra_arteri">Intra Arteri*</label><br />
                <? if(!empty($data[0]['intra_arteri']) || $data[0]['intra_arteri']!=0){ ?>
                <input type="radio" name="intra_arteri" id="intra_arteri" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intra_arteri" id="intra_arteri" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intra_arteri" id="intra_arteri" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_arteri" id="intra_arteri" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intralumbal">Intralumbal*</label><br />
                <? if(!empty($data[0]['intralumbal']) || $data[0]['intralumbal']!=0){ ?>
                <input type="radio" name="intralumbal" id="intralumbal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intralumbal" id="intralumbal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intralumbal" id="intralumbal" value="√" /> Ya
                &nbsp;<input type="radio" name="intralumbal" id="intralumbal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intraperitoneal">Intraperitoneal*</label><br />
                <? if(!empty($data[0]['intraperitoneal']) || $data[0]['intraperitoneal']!=0){ ?>
                <input type="radio" name="intraperitoneal" id="intraperitoneal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intraperitoneal" id="intraperitoneal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intraperitoneal" id="intraperitoneal" value="√" /> Ya
                &nbsp;<input type="radio" name="intraperitoneal" id="intraperitoneal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intrapleural">Intrapleural*</label><br />
                <? if(!empty($data[0]['intrapleural']) || $data[0]['intrapleural']!=0){ ?>
                <input type="radio" name="intrapleural" id="intrapleural" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intrapleural" id="intrapleural" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intrapleural" id="intrapleural" value="√" /> Ya
                &nbsp;<input type="radio" name="intrapleural" id="intrapleural" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intracardial">Intracardial*</label><br />
				<? if(!empty($data[0]['intracardial']) || $data[0]['intracardial']!=0){ ?>
                <input type="radio" name="intracardial" id="intracardial" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intracardial" id="intracardial" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intracardial" id="intracardial" value="√" /> Ya
                &nbsp;<input type="radio" name="intracardial" id="intracardial" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="anti_artikuler">Anti Artikuler*</label><br />
				<? if(!empty($data[0]['anti_artikuler']) || $data[0]['anti_artikuler']!=0){ ?>
                <input type="radio" name="anti_artikuler" id="anti_artikuler" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="anti_artikuler" id="anti_artikuler" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="anti_artikuler" id="intranti_artikuleracardial" value="√" /> Ya
                &nbsp;<input type="radio" name="anti_artikuler" id="anti_artikuler" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="implantasi_subkutan">Implantasi Subkutan*</label><br />
				<? if(!empty($data[0]['implantasi_subkutan']) || $data[0]['implantasi_subkutan']!=0){ ?>
                <input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="√" /> Ya
                &nbsp;<input type="radio" name="implantasi_subkutan" id="implantasi_subkutan" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="rektal">Rektal*</label><br />
				<? if(!empty($data[0]['rektal']) || $data[0]['rektal']!=0){ ?>
                <input type="radio" name="rektal" id="rektal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="rektal" id="rektal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="rektal" id="rektal" value="√" /> Ya
                &nbsp;<input type="radio" name="rektal" id="rektal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intranasal">Intranasal*</label><br />
				<? if(!empty($data[0]['intranasal']) || $data[0]['intranasal']!=0){ ?>
                <input type="radio" name="intranasal" id="intranasal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intranasal" id="intranasal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intranasal" id="intranasal" value="√" /> Ya
                &nbsp;<input type="radio" name="intranasal" id="intranasal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intra_okuler">Intra_okuler*</label><br />
				<? if(!empty($data[0]['intra_okuler']) || $data[0]['intra_okuler']!=0){ ?>
                <input type="radio" name="intra_okuler" id="intra_okuler" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intra_okuler" id="intra_okuler" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intra_okuler" id="intra_okuler" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_okuler" id="intra_okuler" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intra_aurikuler">Intra Aurikuler*</label><br />
				<? if(!empty($data[0]['intra_aurikuler']) || $data[0]['intra_aurikuler']!=0){ ?>
                <input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="√" /> Ya
                &nbsp;<input type="radio" name="intra_aurikuler" id="intra_aurikuler" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intrapulmonal">Intrapulmonal*</label><br />
				<? if(!empty($data[0]['intrapulmonal']) || $data[0]['intrapulmonal']!=0){ ?>
                <input type="radio" name="intrapulmonal" id="intrapulmonal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intrapulmonal" id="intrapulmonal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intrapulmonal" id="intrapulmonal" value="√" /> Ya
                &nbsp;<input type="radio" name="intrapulmonal" id="intrapulmonal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="intravaginal">Intravaginal*</label><br />
				<? if(!empty($data[0]['intravaginal']) || $data[0]['intravaginal']!=0){ ?>
                <input type="radio" name="intravaginal" id="intravaginal" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="intravaginal" id="intravaginal" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="intravaginal" id="intravaginal" value="√" /> Ya
                &nbsp;<input type="radio" name="intravaginal" id="intravaginal" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="infus_drip">Infus Drip*</label><br />
				<? if(!empty($data[0]['infus_drip']) || $data[0]['infus_drip']!=0){ ?>
                <input type="radio" name="infus_drip" id="infus_drip" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="infus_drip" id="infus_drip" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="infus_drip" id="infus_drip" value="√" /> Ya
                &nbsp;<input type="radio" name="infus_drip" id="infus_drip" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="injeksi_infiltr">Injeksi Infiltr*</label><br />
				<? if(!empty($data[0]['injeksi_infiltr']) || $data[0]['injeksi_infiltr']!=0){ ?>
                <input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="√" /> Ya
                &nbsp;<input type="radio" name="injeksi_infiltr" id="injeksi_infiltr" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="p_v">PV*</label><br />
				<? if(!empty($data[0]['p_v']) || $data[0]['p_v']!=0){ ?>
                <input type="radio" name="p_v" id="p_v" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="p_v" id="p_v" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="p_v" id="p_v" value="√" /> Ya
                &nbsp;<input type="radio" name="p_v" id="p_v" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="Tk1">TK 1*</label><br />
				<? if(!empty($data[0]['Tk1']) || $data[0]['Tk1']!=0){ ?>
                <input type="radio" name="Tk1" id="Tk1" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="Tk1" id="Tk1" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="Tk1" id="Tk1" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk1" id="Tk1" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="Tk2">TK 2*</label><br />
				<? if(!empty($data[0]['Tk2']) || $data[0]['Tk2']!=0){ ?>
                <input type="radio" name="Tk2" id="Tk2" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="Tk2" id="Tk2" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="Tk2" id="Tk2" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk2" id="Tk2" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="Tk3">TK 3*</label><br />
				<? if(!empty($data[0]['Tk3']) || $data[0]['Tk3']!=0){ ?>
                <input type="radio" name="Tk3" id="Tk3" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="Tk3" id="Tk3" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="Tk3" id="Tk3" value="√" /> Ya
                &nbsp;<input type="radio" name="Tk3" id="Tk3" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="PRB">PRB*</label><br />
				<? if(!empty($data[0]['PRB']) || $data[0]['PRB']!=0){ ?>
                <input type="radio" name="PRB" id="PRB" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="PRB" id="PRB" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="PRB" id="PRB" value="√" /> Ya
                &nbsp;<input type="radio" name="PRB" id="PRB" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="PP">PP*</label><br />
				<? if(!empty($data[0]['PP']) || $data[0]['PP']!=0){ ?>
                <input type="radio" name="PP" id="PP" value="√" checked="checked" /> Ya
                &nbsp;<input type="radio" name="PP" id="PP" value="" /> Tidak
                <? }else{ ?>
                <input type="radio" name="PP" id="PP" value="√" /> Ya
                &nbsp;<input type="radio" name="PP" id="PP" value="" checked="checked" /> Tidak
                <? } ?>
              </div>
              <div class="form-group">
                <label for="restriksi_kelas_terapi">Restriksi Kelas Terapi</label>
                <input type="text" class="form-control" id="restriksi_kelas_terapi" name="restriksi_kelas_terapi" value="<?= $data[0]['RESTRIKSI_KELAS_TERAPI'] ?>" placeholder="Restriksi Kelas Terapi">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_1">Restriksi Sub Kelas Terapi 1</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_1" name="restriksi_subkelas_terapi_1" value="<?= $data[0]['RESTRIKSI_SUBKELAS_TERAPI_1'] ?>" placeholder="Restriksi Sub Kelas Terapi 1">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_2">Restriksi Sub Kelas Terapi 2</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_2" name="restriksi_subkelas_terapi_2" value="<?= $data[0]['RESTRIKSI_SUBKELAS_TERAPI_2'] ?>" placeholder="Restriksi Sub Kelas Terapi 2">
              </div>
              <div class="form-group">
                <label for="restriksi_subkelas_terapi_3">Restriksi Sub Kelas Terapi 3</label>
                <input type="text" class="form-control" id="restriksi_subkelas_terapi_3" name="restriksi_subkelas_terapi_3" value="<?= $data[0]['RESTRIKSI_SUBKELAS_TERAPI_3'] ?>" placeholder="Restriksi Sub Kelas Terapi 3">
              </div>
              
              <div class="form-group">
                <label for="restriksi_obat">Restriksi Obat</label>
                <input type="text" class="form-control" id="restriksi_obat" name="restriksi_obat" value="<?= $data[0]['RESTRIKSI_OBAT'] ?>" placeholder="Restriksi Obat">
              </div>
              <div class="form-group">
                <label for="restriksi_obat1">Restriksi Obat 1</label>
                <input type="text" class="form-control" id="restriksi_obat1" name="restriksi_obat1" value="<?= $data[0]['RESTRIKSI_OBAT1'] ?>" placeholder="Restriksi Obat 1">
              </div>
              <div class="form-group">
                <label for="restriksi_obat2">Restriksi Obat 2</label>
                <input type="text" class="form-control" id="restriksi_obat2" name="restriksi_obat2" value="<?= $data[0]['RESTRIKSI_OBAT2'] ?>" placeholder="Restriksi Obat 2">
              </div>
              <div class="form-group">
                <label for="restriksi_obat3">Restriksi Obat 3</label>
                <input type="text" class="form-control" id="restriksi_obat3" name="restriksi_obat3" value="<?= $data[0]['RESTRIKSI_OBAT3'] ?>" placeholder="Restriksi Obat 3">
              </div>
              <div class="form-group">
                <label for="restriksi_obat4">Restriksi Obat 4</label>
                <input type="text" class="form-control" id="restriksi_obat4" name="restriksi_obat4" value="<?= $data[0]['RESTRIKSI_OBAT4'] ?>" placeholder="Restriksi Obat 4">
              </div>
              
              <div class="form-group">
                <label for="restriksi_sediaan">Restriksi Sediaan</label>
                <input type="text" class="form-control" id="restriksi_sediaan" name="restriksi_sediaan" value="<?= $data[0]['RESTRIKSI_SEDIAAN'] ?>" placeholder="Restriksi Sediaan">
              </div>
              <div class="form-group">
                <label for="restriksi_sediaan2">Restriksi Sediaan 2</label>
                <input type="text" class="form-control" id="restriksi_sediaan2" name="restriksi_sediaan2" value="<?= $data[0]['RESTRIKSI_SEDIAAN2'] ?>" placeholder="Restriksi Sediaan 2">
              </div>
              <div class="form-group">
                <label for="restriksi_sediaan3">Restriksi Sediaan 3</label>
                <input type="text" class="form-control" id="restriksi_sediaan3" name="restriksi_sediaan3" value="<?= $data[0]['RESTRIKSI_SEDIAAN3'] ?>" placeholder="Restriksi Sediaan 3">
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
