<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update User <?=$data['username']?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Untuk User <?=$data['username']?></h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?=base_url()?>Users/Update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id']?>"/>
            <div class="box-body">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="hidden" name="type" value="3"/>
                <input type="text" class="form-control" id="username" name="username" value="<?=$data['username']?>" disabled>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['username']?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?=$data['email']?>">
              </div>
              <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=$data['no_telp']?>">
              </div>
              <div class="form-group">
                <label for="privilage">Privilage</label>
                <select id="privilage" class="form-control" name="id_privilege">
                  <?php foreach($privilege as $row){?>
                    <option value="<?=$row['id']?>" <?php if($row['id'] == $data['id_privilege']) { ?>selected<?php } ?>><?=$row['nama_privilege']?></option>
                  <?php }?>
                </select>
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
