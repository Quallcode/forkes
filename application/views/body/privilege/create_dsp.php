<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Privilage Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Untuk Privilage Baru</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Privilege/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="username">Nama Privilage</label>
                <input type="text" class="form-control" id="username" name="nama_privilege" placeholder="Privilage Baru">
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
                        <input type="checkbox" name="atc_obat_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="atc_obat_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="atc_obat_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Keterangan ATC Obat
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="keterangan_atc_obat_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                  <hr/>
                  Obat Kombinasi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="obat_kombinasi_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="obat_kombinasi_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="obat_kombinasi_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Kelas Terapi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kelas_terapi_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="kelas_terapi_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="kelas_terapi_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>

                  Sub Kelas Terapi
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="sub_kelas_terapi_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                Sub Kelas Terapi2
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_read">
                      Read
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_write">
                      Write
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi2_delete">
                      Delete
                    </label>
                  </div>
                </div>
              <hr/>
                Sub Kelas Terapi3
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_read">
                      Read
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_write">
                      Write
                    </label>
                    <label>
                      <input type="checkbox" name="sub_kelas_terapi3_delete">
                      Delete
                    </label>
                  </div>
                </div>
              <hr/>
                  Fornas
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="fornas_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="fornas_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="fornas_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Sediaan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="sediaan_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="sediaan_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="sediaan_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Satuan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="satuan_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="satuan_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="satuan_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Kekuatan
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kekuatan_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="kekuatan_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="kekuatan_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Users
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="users_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="users_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="users_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Privilege
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="privilege_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="privilege_write">
                        Write
                      </label>
                      <label>
                        <input type="checkbox" name="privilege_delete">
                        Delete
                      </label>
                    </div>
                  </div>
                <hr/>
                  Usulan Terbaru
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="usulan_terbaru_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="usulan_terbaru_write">
                        Write
                      </label>
                    </div>
                  </div>
                <hr/>
                  Usulan Obat Baru
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="usulan_obat_baru_read">
                        Read
                      </label>
                      <label>
                        <input type="checkbox" name="usulan_obat_baru_write">
                        Write
                      </label>
                    </div>
                  </div>
                <hr/>
                Daftar Usulan Lengkap
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="daftar_usulan_lengkap_read">
                      Read
                    </label>
                  </div>
                </div>
              <hr/>
              Daftar Usulan Tidak Lengkap
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="daftar_usulan_tidak_lengkap_read">
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
