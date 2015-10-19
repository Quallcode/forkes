<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORNAS LOGIN</title>
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
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>FORNAS</b>LOGIN</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login untuk masuk ke menu utama</p>
        <form class="login-form" method="post">
          <div class="form-group has-feedback">
            <input type="username" class="form-control" placeholder="Username" id="form-username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="form-password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">LOGIN</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?=base_url()?>includes/css_dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url()?>includes/css_dashboard/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>includes/css_dashboard/plugins/iCheck/icheck.min.js"></script>
    <script>
      var base_url = '<?=base_url()?>';
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      $(document).ready(function() {
        $('.login-form').on('submit', function(e) {

        	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
        		if( $(this).val() == "" ) {
        			e.preventDefault();
        			$(this).addClass('input-error');
        		}
        		else {
        			$(this).removeClass('input-error');
        		}
        	});
          //AJAX QUERY POST
          var usernameId  = $("#form-username").val();
          var passwordId  = $("#form-password").val();
          var request = $.ajax({
            url: base_url + "login/verify",
            method: "POST",
            data: { username : usernameId, password : passwordId },
            dataType: "json"
          });

          request.done(function( msg ) {
            if(msg.response == 11 || msg.response == 10)
              alert(msg.msg);
            else{
              alert('Selamat datang '+msg.msg['name']);
              window.location.replace(base_url+"dashboard");
            }
          });

          request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed Error Connection reason : " + textStatus );
          });
        });
      });

    </script>

  </body>
</html>
