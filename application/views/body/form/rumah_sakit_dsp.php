<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DAFTAR RUMAH SAKIT
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-info">
          <!-- form start -->
          <form class="form-horizontal" action="<?=base_url()?>Form_registrasi/daftar_user" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="type" value="1" />
              <div class="form-group">
                <label for="inputFaskes" class="col-sm-2 control-label">Faskes</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputFaskes" name="organization">
                    <?php foreach( $data as $key) { ?>
                    <option value="<?=$key['id_provinsi']?>#<?=$key['id_kabkota']?>#<?=$key['id_rs']?>"><?=$key['nama_rs']?></option>
                    <?php } ?>
                  </select>
                </div><!-- /.form-group -->
              </div>
              <div class="form-group">
                <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNama" placeholder="Nama Pengguna" name="nama">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNoTlp" class="col-sm-2 control-label">No.Tel</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="inputNoTlp" placeholder="No Telepon" name="no_telp">
                </div>
              </div>
              <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">User name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername" placeholder="User name" name="username">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Batal</button>
              <button type="submit" class="btn btn-info pull-right">Daftar</button>
            </div><!-- /.box-footer -->
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
