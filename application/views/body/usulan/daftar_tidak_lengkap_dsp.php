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
            <h3 class="box-title">Data Table With Full Features</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
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
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td><a data-toggle="modal" href="#myModal">DETAIL</a></td>
                  <td>DITOLAK</td>
                </tr>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:75%; background:#fff">
    <div class="model-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h4 class="modal-tittle">Detail Obat</h4>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped">
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
            <tr>
              <td>No</td>
              <td>Nama Obat</td>
              <td>Sediaan</td>
              <td>Kekuatan</td>
              <td>Satuan</td>
              <td>Link Journal</td>
              <td>Alasan</td>
              <td>Restriksi</td>
              <td>Type Usulan</td>
            </tr>
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
  <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
