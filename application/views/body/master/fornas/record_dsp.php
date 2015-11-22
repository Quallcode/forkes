<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     FORNAS
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Daftar Fornas</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Kelas Terapi</th>
                  <th>Sub Kelas Terapi 1</th>
                  <th>Sub Kelas Terapi 2</th>
                  <th>Sub Kelas Terapi 3</th>
                  <th>Nama Obat</th>
                  <th>Sediaan</th>
                  <th>Kekuatan</th>
                  <th>Satuan</th>
                  <th>Detail</th>
                  <th>Restriksi Kelas Terapi</th>
                  <th>Restriksi Obat</th>
                  <th>Restriksi Sediaan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){
                  foreach($data as $urskey => $val){
                ?>
                <tr>
                  <td>
				  	<? if(empty($val['KELAS_TERAPI'])){
					  	echo '-';
					}else{
						echo $val['KELAS_TERAPI'];
					}?>
                  </td>
                  <td>
				  	<? if(empty($val['SUB_KELASTERAPI1'])){
					  	echo '-';
					}else{
						echo $val['SUB_KELASTERAPI1'];
					}?>
                  </td>
                  <td>
                  	<? if(empty($val['SUB_KELASTERAPI2'])){
					  	echo '-';
					}else{
						echo $val['SUB_KELASTERAPI2'];
					}?>
                  </td>
                  <td>
                  	<? if(empty($val['SUB_KELASTERAPI2'])){
					  	echo '-';
					}else{
						echo $val['SUB_KELASTERAPI2'];
					}?>
				  	<?=$val['SUB_KELASTERAPI3']?></a>
                  </td>
                  <td>
                  	<? if(empty($val['Nama_obat'])){
					  	echo '-';
					}else{
						echo $val['Nama_obat'];
					}?>
                  </td>
                  <td>
                  	<? if(empty($val['Sediaan'])){
					  	echo '-';
					}else{
						echo $val['Sediaan'];
					}?>
                  </td>
                  <td>
                  	<? if(empty($val['Kekuatan'])){
					  	echo '-';
					}else{
						echo $val['Kekuatan'];
					}?>
                  </td>
                  <td>
                  	<? if(empty($val['Satuan'])){
					  	echo '-';
					}else{
						echo $val['Satuan'];
					}?>
                  </td>
                  <td>
                  	<a data-toggle="modal" href="#DetailFornas<?=$val['id_fornas']?>">Detail</a>
                  </td>
                  <td>
                  	<a data-toggle="modal" href="#KelasTerapi<?=$val['id_fornas']?>">Restriksi Kelas<br />Terapi</a>
                  </td>
                  <td>
                  	<a data-toggle="modal" href="#RestriksiObat<?=$val['id_fornas']?>">Restriksi Obat</a>
                  </td>
                  <td>
                  	<a data-toggle="modal" href="#RestriksiSediaan<?=$val['id_fornas']?>">Restriksi Sediaan</a>
                  </td>
                  <td>
                    <a href="<?=base_url()?>Fornas/Update/<?=$val['id_fornas']?>" class="btn btn-info">Update</a>&nbsp;
                    <a href="<?=base_url()?>Fornas/Delete/<?=$val['id_fornas']?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Kelas Terapi</th>
                  <th>Sub Kelas Terapi 1</th>
                  <th>Sub Kelas Terapi 2</th>
                  <th>Sub Kelas Terapi 3</th>
                  <th>Nama Obat</th>
                  <th>Sediaan</th>
                  <th>Kekuatan</th>
                  <th>Satuan</th>
                  <th>Detail</th>
                  <th>Restriksi Kelas Terapi</th>
                  <th>Restriksi Obat</th>
                  <th>Restriksi Sediaan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>   <!-- /.row -->
  </section>
</div>

<?php if(!empty($data)){
  foreach($data as $row){
?>
<div class="modal fade" id="DetailFornas<?=$row['id_fornas']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Detail Fornas</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Subkutan</th>
              <th>intrakutan</th>
              <th>intramuscular</th>
              <th>intravena</th>
              <th>intravena_bolus</th>
              <th>intra_arteri</th>
              <th>intralumbal</th>
              <th>intraperitoneal</th>
              <th>intrapleural</th>
              <th>intracardial</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['detail_fornas'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['Subkutan'])){
					  	echo '-';
					}else{
						echo $value2['Subkutan'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intrakutan'])){
					  	echo '-';
					}else{
						echo $value2['intrakutan'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intramuscular'])){
					  	echo '-';
					}else{
						echo $value2['intramuscular'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intravena'])){
					  	echo '-';
					}else{
						echo $value2['intravena'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intravena_bolus'])){
					  	echo '-';
					}else{
						echo $value2['intravena_bolus'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intra_arteri'])){
					  	echo '-';
					}else{
						echo $value2['intra_arteri'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intralumbal'])){
					  	echo '-';
					}else{
						echo $value2['intralumbal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intraperitoneal'])){
					  	echo '-';
					}else{
						echo $value2['intraperitoneal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intrapleural'])){
					  	echo '-';
					}else{
						echo $value2['intrapleural'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intracardial'])){
					  	echo '-';
					}else{
						echo $value2['intracardial'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
		
		<table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>anti_artikuler</th>
              <th>implantasi_subkutan</th>
              <th>rektal</th>
              <th>intranasal</th>
              <th>intra_okuler</th>
              <th>intra_aurikuler</th>
              <th>intrapulmonal</th>
              <th>intravaginal</th>
              <th>infus_drip</th>
              <th>injeksi_infiltr</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['detail_fornas'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['anti_artikuler'])){
					  	echo '-';
					}else{
						echo $value2['anti_artikuler'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['implantasi_subkutan'])){
					  	echo '-';
					}else{
						echo $value2['implantasi_subkutan'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['rektal'])){
					  	echo '-';
					}else{
						echo $value2['rektal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intranasal'])){
					  	echo '-';
					}else{
						echo $value2['intranasal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intra_okuler'])){
					  	echo '-';
					}else{
						echo $value2['intra_okuler'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intra_aurikuler'])){
					  	echo '-';
					}else{
						echo $value2['intra_aurikuler'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intrapulmonal'])){
					  	echo '-';
					}else{
						echo $value2['intrapulmonal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['intravaginal'])){
					  	echo '-';
					}else{
						echo $value2['intravaginal'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['infus_drip'])){
					  	echo '-';
					}else{
						echo $value2['infus_drip'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['injeksi_infiltr'])){
					  	echo '-';
					}else{
						echo $value2['injeksi_infiltr'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
		
		<table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>p_v</th>
              <th>Tk1</th>
              <th>Tk2</th>
              <th>Tk3</th>
              <th>PRB</th>
              <th>PP</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['detail_fornas'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['p_v'])){
					  	echo '-';
					}else{
						echo $value2['p_v'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['Tk1'])){
					  	echo '-';
					}else{
						echo $value2['Tk1'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['Tk2'])){
					  	echo '-';
					}else{
						echo $value2['Tk2'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['Tk3'])){
					  	echo '-';
					}else{
						echo $value2['Tk3'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['PRB'])){
					  	echo '-';
					}else{
						echo $value2['PRB'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['PP'])){
					  	echo '-';
					}else{
						echo $value2['PP'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>

<?php if(!empty($data)){
  foreach($data as $row){
?>
<div class="modal fade" id="KelasTerapi<?=$row['id_fornas']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Restriksi Kelas Terapi</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Restriksi Kelas Terapi</th>
              <th>Restriksi Kelas Terapi 1</th>
              <th>Restriksi Kelas Terapi 2</th>
              <th>Restriksi Kelas Terapi 3</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['kelas_trapi'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['RESTRIKSI_KELAS_TERAPI'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_KELAS_TERAPI'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_SUBKELAS_TERAPI_1'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SUBKELAS_TERAPI_1'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_SUBKELAS_TERAPI_2'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SUBKELAS_TERAPI_2'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_SUBKELAS_TERAPI_3'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SUBKELAS_TERAPI_3'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>

<?php if(!empty($data)){
  foreach($data as $row){
?>
<div class="modal fade" id="RestriksiObat<?=$row['id_fornas']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Restriksi Obat</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Restriksi Obat</th>
              <th>Restriksi Obat 1</th>
              <th>Restriksi Obat 2</th>
              <th>Restriksi Obat 3</th>
              <th>Restriksi Obat 4</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['restriksi_obat'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['RESTRIKSI_OBAT'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_OBAT'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_OBAT1'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_OBAT1'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_OBAT2'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_OBAT2'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_OBAT3'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_OBAT3'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_OBAT4'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_OBAT4'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>

<?php if(!empty($data)){
  foreach($data as $row){
?>
<div class="modal fade" id="RestriksiSediaan<?=$row['id_fornas']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Restriksi Kesediaan</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Restriksi Sediaan</th>
              <th>Restriksi Sediaan 2</th>
              <th>Restriksi Sediaan 3</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['restriksi_sediaan'] as $j => $value2){?>
            <tr>
              <td>
              	<? if(empty($value2['RESTRIKSI_SEDIAAN'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SEDIAAN'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_SEDIAAN2'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SEDIAAN2'];
				}?>
              </td>
              <td>
              	<? if(empty($value2['RESTRIKSI_SEDIAAN3'])){
					  	echo '-';
					}else{
						echo $value2['RESTRIKSI_SEDIAAN3'];
				}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>
