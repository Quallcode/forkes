<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Berita Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" action="<?=base_url()?>News/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="username">Judul Berita</label>
                <input type="text" class="form-control" id="news_title" name="news_title" placeholder="Judul Berita">
              </div>
              <div class="form-group">
                <label for="password">Isi Berita</label><br />
                <textarea id="news_content" name="news_content" placeholder="Isi Berita" style="width:500px; height:250px;"></textarea>
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
