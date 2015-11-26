<?php $udata = $this->session->userdata('user_data'); //print_r($data);exit;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Berita E-Fornas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Berita</li>
      <li class="active"><a href="<?=base_url()?>News">Daftar Berita</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tanggal Berita</th>
                  <th>Judul Berita</th>
                  <th>Isi Berita</th>
                  <th>Dibuat Oleh</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($news)){?>
                  <?php foreach($news as $val){?>
                    <tr>
                      <td><?=$val['create_date']?></td>
                      <td><?=$val['news_title']?></td>
                      <td><?=substr($val['news_content'],0,50)?> . . . <a data-toggle="modal" href="#IsiBerita<?=$val['id_news']?>">Read More</a></td>
                      <!--substr($val['news_content'],0,50);-->
                      <td><?=$val['create_by']?></td>
                      <td>
                        <a href="<?=base_url()?>News/Update/<?=$val['id_news']?>" class="btn btn-info">Update</a>
                        &nbsp;
                        <a href="<?=base_url()?>News/Delete/<?=$val['id_news']?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Tanggal Berita</th>
                  <th>Title Berita</th>
                  <th>Isi Berita</th>
                  <th>Dibuat Oleh</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php if(!empty($news)){
  foreach($news as $row){
?>
<div class="modal fade" id="IsiBerita<?=$row['id_news']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <h4 class="modal-tittle">Isi Berita</h4>
      </div>
      <div class="modal-body">
        <textarea style="max-width:995px; width:995px; max-height:430px; height:430px;"><?=$val['news_content']?></textarea>
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
