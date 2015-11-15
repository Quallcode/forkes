<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Sub Kelas Terapi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>satuan">Daftar Sub Kelas Terapi</a></li>
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
                  <th>ID Terapi</th>
                  <th>ID Sub Terapi</th>
                  <th>Nama Sub Terapi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['id_terapi']?></td>
                      <td><?=$val['id_sub_kelasterapi']?></td>
                      <td><?=$val['Sub_Kelas_Terapi']?></td>
                      <td>
                        <a href="<?=base_url()?>Sub_Kelas_Terapi/update/<?=$val['id_sub_kelasterapi']?>" class="btn btn-info">Update</a>&nbsp;
                        <a href="<?=base_url()?>Sub_Kelas_Terapi/delete/<?=$val['id_sub_kelasterapi']?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Terapi</th>
                  <th>ID Sub Terapi</th>
                  <th>Nama Sub Terapi</th>
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
