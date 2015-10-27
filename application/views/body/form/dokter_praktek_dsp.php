<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTRASI DOKTER PRAKTEK</title>
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
        <a href="../../index2.html"><b>REGISTRASI <b/><b>DOKTER PRAKTEK</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Isi informasi anda dengan benar</p>
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
              <input type="hidden" name="type" value="2" />
              <div class="form-group">             
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputFaskes" class="col-sm-2 control-label">Faskes</label>
                  <select class="form-control" id="inputFaskes" name="organization" style="width:21em">
                    <?php foreach( $data as $key) { ?>
                    <option value="<?=$key['id_provinsi']?>#<?=$key['id_kabkota']?>#<?=$key['id_rs']?>"><?=$key['nama_rs']?></option>
                    <?php } ?>
                  </select>
                </div><!-- /.form-group -->
              </div>
              <div class="form-group">            
                <div class="col-sm-10" style="text-align:-webkit-center">
				 <label for="inputFaskes" class="col-sm-2 control-label">FASKES</label>
                  <input type="text" class="form-control" id="inputFaskes" placeholder="FASKES" style="width:21em">
                </div>
              </div>
              <div class="form-group">               
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputNama" class="col-sm-2 control-label">Nama</label>
                  <input type="text" class="form-control" id="inputNama" placeholder="Nama Faskes" style="width:21em">
                </div>
              </div>
              <div class="form-group">               
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputEmail" class="col-sm-2 control-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" style="width:21em">
                </div>
              </div>
              <div class="form-group">               
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputNoTlp" class="col-sm-2 control-label">No.Tel</label>
                  <input type="number" class="form-control" id="inputNoTlp" placeholder="No Telepon" style="width:21em">
                </div>
              </div>
              <div class="form-group">               
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputUsername" class="col-sm-2 control-label">Username</label>
                  <input type="text" class="form-control" id="inputUsername" placeholder="User name" style="width:21em">
                </div>
              </div>
              <div class="form-group">                
                <div class="col-sm-10" style="text-align:-webkit-center">
				<label for="inputPassword" class="col-sm-2 control-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password" style="width:21em">
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
  </body>
</html>
