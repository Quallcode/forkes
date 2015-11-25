<?php $udata = $this->session->userdata('user_data'); //print_r($udata);exit;?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Change Password
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
        <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Dashboard/Change_password" method="post" enctype="multipart/form-data" onSubmit="return valregister()">
            <div class="box-body">
              <div class="form-group">
                <label for="inputpassword">Old Password</label>
                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password">
              </div>
              <div class="form-group">
                <label for="inputpassword">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
              </div>
              <div class="form-group">
                <label for="inputpassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
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

	<script>
    function valregister() {
        var pass1 = document.getElementById("old_password").value;
        var pass2 = document.getElementById("new_password").value;
		var pass3 = document.getElementById("confirm_password").value;
		
		if (pass1 != pass2) {
			alert("Password And Confirm Password Not Match");
			document.getElementById("confirm_password").style.borderColor = "#E34234";
			return false;
		}else{
			document.getElementById("confirm_password").style.borderColor = "";
		}
		
		if (pass3 != pass4) {
			alert("Password And Confirm Password Not Match");
			document.getElementById("confirm_password_praktek").style.borderColor = "#E34234";
			return false;
		}else{
			document.getElementById("confirm_password").style.borderColor = "";
		}
		
        return true;
    }
	</script>
