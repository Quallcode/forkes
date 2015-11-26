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
          <form role="form" action="<?=base_url()?>News/Update" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="jamberita">Tanggal Posting</label>
                <input type="text" class="form-control" id="create_date" name="create_date" value="<? echo $data['create_date']?>" readonly="readonly">
              </div><div class="form-group">
                <label for="penulis">Penulis Berita</label>
                <input type="text" class="form-control" id="create_by" name="create_by" value="<? echo $data['create_by']?>" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="judulberita">Judul Berita</label>
                <input type="text" class="form-control" id="news_title" name="news_title" value="<? echo $data['news_title']?>">
              </div>
              <div class="form-group">
                <label for="isiberita">Isi Berita</label><br />
                <textarea id="news_content" name="news_content" placeholder="Isi Berita" style="width:500px; height:250px;"><? echo $data['news_content']?></textarea>
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <input type="hidden" id="id_news" name="id_news" value="<? echo $data['id_news']?>">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
