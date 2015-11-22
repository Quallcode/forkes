<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Privilage <?=$data['nama_privilege']?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Untuk Privilage <?=$data['nama_privilege']?></h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Privilege/Update" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="id" value="<?=$data['id']?>">
              <div class="form-group">
                <label for="username">Nama Privilage</label>
                <input type="text" class="form-control" id="username" name="nama_privilege" value="<?=$data['nama_privilege']?>">
              </div>
              <div class="form-group">
                <label>Privilege Option</label>
                <br/>
                <h3>Master</h3>
                <hr/>
                  ATC Obat
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="atc_obat_read" <?php if($data['atc_obat_read'] == 'on') { ?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="atc_obat_write" <?php if($data['atc_obat_write'] == 'on') { ?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="atc_obat_delete" <?php if($data['atc_obat_delete'] == 'on') { ?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Keterangan ATC Obat
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_read" <?php if($data['keterangan_atc_obat_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_write" <?php if($data['keterangan_atc_obat_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_delete" <?php if($data['keterangan_atc_obat_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                  <hr/>
                  Obat Kombinasi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="obat_kombinasi_read" <?php if($data['obat_kombinasi_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="obat_kombinasi_write" <?php if($data['obat_kombinasi_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="obat_kombinasi_delete" <?php if($data['obat_kombinasi_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Kelas Terapi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kelas_terapi_read" <?php if($data['kelas_terapi_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="kelas_terapi_write" <?php if($data['kelas_terapi_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="kelas_terapi_delete" <?php if($data['kelas_terapi_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>

                  Sub Kelas Terapi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_read" <?php if($data['sub_kelas_terapi_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_write" <?php if($data['sub_kelas_terapi_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_delete" <?php if($data['sub_kelas_terapi_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                Sub Kelas Terapi2
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_read" <?php if($data['sub_kelas_terapi2_read'] == 'on'){?>checked<?php } ?>>
                      Read
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_write" <?php if($data['sub_kelas_terapi2_write'] == 'on'){?>checked<?php } ?>>
                      Write
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_delete" <?php if($data['sub_kelas_terapi2_delete'] == 'on'){?>checked<?php } ?>>
                      Delete
                    </label>
                  </div>
                </div>
              <hr/>
                Sub Kelas Terapi3
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_read" <?php if($data['sub_kelas_terapi3_read'] == 'on'){?>checked<?php } ?>>
                      Read
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_write" <?php if($data['sub_kelas_terapi3_write'] == 'on'){?>checked<?php } ?>>
                      Write
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_delete" <?php if($data['sub_kelas_terapi3_delete'] == 'on'){?>checked<?php } ?>>
                      Delete
                    </label>
                  </div>
                </div>
              <hr/>
                  Fornas
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fornas_read" <?php if($data['fornas_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="fornas_write" <?php if($data['fornas_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="fornas_delete" <?php if($data['fornas_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Sediaan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sediaan_read" <?php if($data['sediaan_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="sediaan_write" <?php if($data['sediaan_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="sediaan_delete" <?php if($data['sediaan_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Satuan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="satuan_read" <?php if($data['satuan_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="satuan_write" <?php if($data['satuan_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="satuan_delete" <?php if($data['satuan_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Kekuatan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kekuatan_read" <?php if($data['kekuatan_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="kekuatan_write" <?php if($data['kekuatan_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="kekuatan_delete" <?php if($data['kekuatan_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Users
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="users_read" <?php if($data['users_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="users_write" <?php if($data['users_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="users_delete" <?php if($data['users_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Privilege
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="privilege_read" <?php if($data['privilege_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="privilege_write" <?php if($data['privilege_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="privilege_delete" <?php if($data['privilege_delete'] == 'on'){?>checked<?php } ?>>
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Usulan Terbaru
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="usulan_terbaru_read" <?php if($data['usulan_terbaru_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="usulan_terbaru_write" <?php if($data['usulan_terbaru_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                    </div>
                  </div>
                <hr/>
                  Usulan Obat Baru
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="usulan_obat_baru_read" <?php if($data['usulan_obat_baru_read'] == 'on'){?>checked<?php } ?>>
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="usulan_obat_baru_write" <?php if($data['usulan_obat_baru_write'] == 'on'){?>checked<?php } ?>>
                        Write
                      </label>
                    </div>
                  </div>
                <hr/>
                Daftar Usulan Lengkap
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="daftar_usulan_lengkap_read" <?php if($data['daftar_usulan_lengkap_read'] == 'on'){?>checked<?php } ?>>
                      Read
                    </label>
                  </div>
                </div>
              <hr/>
              Daftar Usulan Tidak Lengkap
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="daftar_usulan_tidak_lengkap_read" <?php if($data['daftar_usulan_tidak_lengkap_read'] == 'on'){?>checked<?php } ?>>
                    Read
                  </label>
                </div>
              </div>
            <hr/>
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
