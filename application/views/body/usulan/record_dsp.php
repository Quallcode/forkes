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
            <h3 class="box-title">Daftar Usulan <?=$faskes?></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nomor E-Fornas</th>
                  <th>Surat Pengantar</th>
                  <th>Daftar Usulan Obat</th>
                  <th>Detail Obat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($usulan)){ foreach($usulan as $row){?>
                <tr>
                  <td><?=$row['nomor_efornas']?></td>
                  <td><a href="<?=base_url().$row['surat_pengantar']?>" target="_blank"><?php $sp_element = explode('/',$row['surat_pengantar']) ?><?=$sp_element[6]?></a></td>
                  <td><a href="<?=base_url().$row['daftar_usulan_obat']?>" target="_blank"><?php $sp_element = explode('/',$row['daftar_usulan_obat']) ?><?=$sp_element[6]?></a></td>
                  <td><a data-toggle="modal" href="#ModalDetail<?=$row['id']?>">DETAIL</a></td>
                  <td><?=$row['status']?> DITERIMA</td>
                  <td>
                  <?php if(isset($row['date_approve']) && !empty($row['date_approve'])){?>
                    <?php if($row['status'] == 'TIDAK'){ ?>
                      <?php $datetime1 = new DateTime($row['date_approve']);
                            $datetime2 = new DateTime(date('Y-m-d'));
                            $interval = $datetime1->diff($datetime2);
                            if($interval->days <= 5){ ?>
                        <a href="#">EDIT SEKARANG</a>
                      <?php }else{ ?>
                        SUDAH KADALUARSA
                      <?php } ?>
                    <?php }else { ?>
                        TIDAK PERLU EDIT
                    <?php } ?>
                  <?php }else{ ?>
                    MENUNGGU
                  <?php } ?>
                  </td>
                </tr>
                <?php } }?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>   <!-- /.row -->
  </section>
</div>
<?php if(!empty($usulan)){ foreach($usulan as $row2){?>
<div class="modal fade" id="ModalDetail<?=$row2['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
              <th>Kelas Terapi</th>
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
            <?php foreach($row2['detail_usulan'] as $i => $val){?>
            <tr>
              <td><?=$i+1?></td>
              <td><?=$val['Kelas_terapi']?></td>
              <td><?=$val['nama_obat']?></td>
              <td><?=$val['nama_sediaan']?></td>
              <td><?=$val['kekuatan']?></td>
              <td><?=$val['nama_satuan']?></td>
              <td><a href="<?=base_url().$val['jurnal']?>" target="_blank">Lihat</a></td>
              <td><?=$val['alasan']?></td>
              <td><?=$val['restriksi']?></td>
              <td><?=$val['tipe_usulan']?></td>
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
<?php } } ?>
