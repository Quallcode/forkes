<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DAFTAR USULAN
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Usulan Faskes</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nomor E-Fornas</th>
                  <th>Surat Pengantar</th>
                  <th>Daftar Usulan Obat</th>
                  <th>Detail Obat</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($usulan_rs)){
                  foreach($usulan_rs as $urskey => $val){
                ?>
                <tr>
                  <td><?=$val['nomor_efornas']?></td>
                  <td><a href="<?=base_url().$val['surat_pengantar']?>" target="_blank"><?php $sp_element = explode('/',$val['surat_pengantar']) ?><?=$sp_element[6]?></a></td>
                  <td><a href="<?=base_url().$val['daftar_usulan_obat']?>" target="_blank"><?php $sp_element = explode('/',$val['daftar_usulan_obat']) ?><?=$sp_element[6]?></a></td>
                  <td><a data-toggle="modal" href="#ModalDetailUR<?=$val['id']?>">DETAIL</a></td>
                  <td><span class="status<?=$urskey+1?>"><?=$val['status']?></span> DITERIMA</td>
                </tr>
                <?php
                      $flag = $urskey+1;
                    }
                  }
                ?>
                <?php if(!empty($usulan_klinik)){
                  foreach($usulan_klinik as $uklkey => $val2){
                ?>
                <tr>
                  <td><?=$val2['nomor_efornas']?></td>
                  <td><a href="<?=base_url().$val2['surat_pengantar']?>" target="_blank"><?php $sp_element2 = explode('/',$val2['surat_pengantar']) ?><?=$sp_element2[6]?></a></td>
                  <td><a href="<?=base_url().$val2['daftar_usulan_obat']?>" target="_blank"><?php $sp_element2 = explode('/',$val2['daftar_usulan_obat']) ?><?=$sp_element2[6]?></a></td>
                  <td><a data-toggle="modal" href="#ModalDetailUK<?=$val2['id']?>">DETAIL</a></td>
                  <td><span class="status<?=$flag + ($uklkey+1)?>"><?=$val2['status']?></span> DITERIMA</td>
                  </tr>
                <?php }
                  }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nomor E-Fornas</th>
                  <th>Surat Pengantar</th>
                  <th>Daftar Usulan Obat</th>
                  <th>Detail Obat</th>
                  <th>Status</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>   <!-- /.row -->
  </section>
</div>
<?php if(!empty($usulan_klinik)){
  foreach($usulan_klinik as $row2){
?>
<div class="modal fade" id="ModalDetailUK<?=$row2['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Detail Obat</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Obat</th>
              <th>Sediaan</th>
              <th>Kekuatan</th>
              <th>Satuan</th>
              <th>Link Journal</th>
              <th>Alasan</th>
              <th>Restriksi</th>
              <th>Type Usulan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row2['detail_usulan'] as $i => $value){?>
            <tr>
              <td><?=$i+1?></td>
              <td><?=$value['nama_obat']?></td>
              <td><?=$value['nama_sediaan']?></td>
              <td><?=$value['kekuatan']?></td>
              <td><?=$value['nama_satuan']?></td>
              <td><?=$value['jurnal']?><br/>
                <?php if(!empty($value['file_jurnal'])){?><a href="<?=base_url().$value['file_jurnal']?>" target="_blank">Lihat File</a><?php } ?></td>
              <td><?=$value['alasan']?></td>
              <td><?=$value['restriksi']?></td>
              <td><?=$value['tipe_usulan']?></td>
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
<?php if(!empty($usulan_rs)){
  foreach($usulan_rs as $row){
?>
<div class="modal fade" id="ModalDetailUR<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Detail Obat</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Obat</th>
              <th>Sediaan</th>
              <th>Kekuatan</th>
              <th>Satuan</th>
              <th>Link Journal</th>
              <th>Alasan</th>
              <th>Restriksi</th>
              <th>Type Usulan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($row['detail_usulan'] as $j => $value2){?>
            <tr>
              <td><?=$j+1?></td>
              <td><?=$value2['nama_obat']?></td>
              <td><?=$value2['nama_sediaan']?></td>
              <td><?=$value2['kekuatan']?></td>
              <td><?=$value2['nama_satuan']?></td>
              <td><?=$value2['jurnal']?><br/>
                <a href="<?=base_url().$value2['file_jurnal']?>" target="_blank">Lihat</a></td>
              <td><?=$value2['alasan']?></td>
              <td><?=$value2['restriksi']?></td>
              <td><?=$value2['tipe_usulan']?></td>
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
