<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar
      <small>Sub Kelas Terapi2</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Master</li>
      <li class="active"><a href="<?=base_url()?>Sub_Kelas_Terapi2">Daftar Sub Kelas Terapi2</a></li>
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
                  <th>KELAS TERAPI</th>
                  <th>SUB KELAS TERAPI</th>
                  <th>SUB KELAS TERAPI2</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($data)){?>
                  <?php foreach($data as $val){?>
                    <?php foreach ($val['sub_kelas_terapi'] as $val2) {
                      foreach ($val2['sub_kelas_terapi2'] as $val3) {
                        if(!empty($val2['sub_kelas_terapi2']))
                        {?>
                          <tr>
                            <td><?=$val['id_terapi']?></td>
                            <td><?=$val2['id_sub_kelasterapi']?></td>
                            <td><?=$val3['id_sub_kelasterapi2']?></td>
                            <td>
                              <a href="<?=base_url()?>Sub_Kelas_Terapi/Update/<?=$val3['id_sub_kelasterapi2']?>" class="btn btn-info">Update</a>&nbsp;
                              <a href="<?=base_url()?>Sub_Kelas_Terapi/Delete/<?=$val3['id_sub_kelasterapi2']?>" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        <?php }?>
                      <?php }?>
                    <?php } ?>
                  <?php }?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>KELAS TERAPI</th>
                  <th>SUB KELAS TERAPI</th>
                  <th>SUB KELAS TERAPI2</th>
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
