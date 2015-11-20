<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTRASI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/iCheck/square/blue.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url()?>includes/css_dashboard/plugins/select2/select2.min.css">
    <!-- Select2 -->
    <!-- jQuery 2.1.4 -->
    <script src="<?=base_url()?>includes/css_dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="<?=base_url()?>includes/css_dashboard/plugins/select2/select2.full.min.js"></script>
    <!-- Page script -->
    <script type="text/javascript">
      var base_url = '<?= base_url()?>';
    </script>
    <script type="text/javascript">

    $(function () {
      $("#inputFaskes").select2();
      $('#provinsi').select2();
    });
    function get_form(){
      var organize = $('#organization').find('option:selected').val();
      if(organize == '1'){
        $('.rumah_sakit_form').show();
        $('.dokter_praktek_form').hide();
      }else{
        $('#kabupaten_dropdown').hide();
        $('#rs_dropdown').hide();
        $('.rumah_sakit_form').hide();
        $('.dokter_praktek_form').show();
      }
    }
    function get_id_provinsi(){
        var provinsi = $('#provinsi').find('option:selected').val();
        var html = '';
        $('#kabupaten_dropdown').show();
        $.ajax({
          type: "GET",
          dataType: "json",
          url: base_url+"Pendaftaran/Get_Kabupaten?id="+provinsi,
          //Relative or absolute path to response.php file
          success: function(data) {
            if(data.status == '00'){
              $('#kabupaten').html('');
              for(var i = 0; i <data.msg.length; i++){
                 html += '<option value="'+data.msg[i]['id_kabkota']+'">'+data.msg[i]['kabkota']+'</option>';
              }
              $('#kabupaten').append(html);
              $('#kabupaten').select2();
            }
          }
        });
    }
    function get_id_kabupaten(){
      var provinsi = $('#provinsi').find('option:selected').val();
      var kabupaten = $('#kabupaten').find('option:selected').val();
      var html = '';
      $('#rs_dropdown').show();
      $.ajax({
        type: "GET",
        dataType: "json",
        url: base_url+"Pendaftaran/Get_Rumah_Sakit?id_provinsi="+provinsi+"&id_kabkota="+kabupaten,
        //Relative or absolute path to response.php file
        success: function(data) {
          if(data.status == '00'){
            $('#inputDokter').html('');
            for(var i = 0; i <data.msg.length; i++){
               html += '<option value="'+data.msg[i]['id_rs']+'">'+data.msg[i]['nama_rs']+'</option>';
            }
            $('#inputFaskes').append(html);
            $('#inputFaskes').select2();
          }
        }
      });
    }
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
  <div class="col-md-12">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>PILIH<b/><br><b>PENDAFTARAN</b></a><br>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <!-- form start -->
        <p class="login-box-msg">Isi informasi anda dengan benar</p>
        <form class="form-horizontal" action="<?=base_url()?>Form_registrasi/Daftar_User" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
              <div class="col-sm-10" style="text-align:-webkit-center">
  		          <label for="inputType" class="col-sm-2 control-label">Faskes</label>
                <select class="form-control" id="organization" name="organization" style="width:21em" onchange="get_form()">
                  <option value="1">Rumah Sakit</option>
                  <option value="2">Dokter Praktek</option>
                </select>
              </div><!-- /.form-group -->
            </div>
            <!-- RUMAH SAKIT FORM-->
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10">
                <label for="inputType" class="col-sm-2 control-label">Provinsi</label>
                <select class="form-control" id="provinsi" style="width:21em"  name="id_provinsi" onchange="get_id_provinsi()">
                  <?php foreach( $provinsi as $key5) { ?>
                    <option value="<?=$key5['id_provinsi']?>" ><?=$key5['provinsi']?></option>
                  <?php } ?>
                </select>
              </div><!-- /.form-group -->
            </div>
            <div class="form-group" id="kabupaten_dropdown" style="display:none">
              <div class="col-sm-10">
                <label for="inputType" class="col-sm-2 control-label">Kabupaten</label>
                <select class="form-control" id="kabupaten" style="width:21em" name="id_kabkota" onchange="get_id_kabupaten()">
                </select>
              </div><!-- /.form-group -->
            </div>
            <div class="form-group" id="rs_dropdown" style="display:none">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputFaskes" class="col-sm-2 control-label">Faskes</label>
                <select class="form-control" id="inputFaskes" name="id_faskes" style="width:21em">
                </select>
              </div><!-- /.form-group -->
            </div>
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama Dokter" name="nama" style="width:21em">
              </div>
            </div>
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email" style="width:21em">
              </div>
            </div>
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputNoTlp" class="col-sm-2 control-label">No.Tel</label>
                <input type="number" class="form-control" id="inputNoTlp" placeholder="No Telepon" name="no_telp" style="width:21em">
              </div>
            </div>
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="User name" name="username" style="width:21em">
              </div>
            </div>
            <div class="form-group rumah_sakit_form">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" style="width:21em">
              </div>
            </div>
            <!-- DOKTER PRAKTEK FORM-->
            <div class="form-group dokter_praktek_form" style="display:none;">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama Dokter" name="nama_praktek" style="width:21em">
              </div>
            </div>
            <div class="form-group dokter_praktek_form" style="display:none;">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email_praktek" style="width:21em">
              </div>
            </div>
            <div class="form-group dokter_praktek_form" style="display:none;">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputNoTlp" class="col-sm-2 control-label">No.Tel</label>
                <input type="number" class="form-control" id="inputNoTlp" placeholder="No Telepon" name="no_telp_praktek" style="width:21em">
              </div>
            </div>
            <div class="form-group dokter_praktek_form" style="display:none;">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="User name" name="username_praktek" style="width:21em">
              </div>
            </div>
            <div class="form-group dokter_praktek_form" style="display:none;">
              <div class="col-sm-10" style="text-align:-webkit-center">
                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password_praktek" style="width:21em">
              </div>
            </div>

          </div><!-- /.box-body -->
          <div class="box-footer">
            <a href="<?=base_url()?>Login" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-info pull-right">Daftar</button>
          </div><!-- /.box-footer -->
      </form>
    </div><!-- /.login-box -->
</div>
</div>
</body>
</html>
