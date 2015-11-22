<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Sub Kelas Terapi3</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>Sub_Kelas_Terapi2">Daftar Sub Kelas Terapi3</a></li>
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
                  <th>ID Sub Terapi2</th>
                  <th>ID Sub Terapi3</th>
                  <th>Nama Sub Kelas Terapi 3</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <tr>
                      <td><?=$val['id_terapi']?></td>
                      <td><?=$val['id_sub_kelasterapi']?></td>
                      <td><?=$val['id_sub_kelasterapi2']?></td>
                      <td><?=$val['id_sub_kelasterapi3']?></td>
                      <td><?=$val['Sub_Kelas_Terapi_3']?></td>
                      <td>
                        <a href="<?=base_url()?>Sub_Kelas_Terapi3/Update/<?=$val['id']?>" class="btn btn-info">Update</a>&nbsp;
                        <a href="<?=base_url()?>Sub_Kelas_Terapi3/Delete/<?=$val['id']?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Terapi</th>
                  <th>ID Sub Terapi</th>
                  <th>ID Sub Terapi2</th>
                  <th>ID Sub Terapi3</th>
                  <th>Nama Sub Kelas Terapi 3</th>
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
