<div class="col-md-4">
  <h3>Upload Excel For <?=$table?></h3>
  <hr/>
  <form class="form-inline" role="form" action="<?=base_url()?>compiler/<?=$controller?>/insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="FileImport">Import</label>
      <input type="file" class="form-control" id="FileImport" name="fileimport" />
    </div>
    <input type="submit" class="btn btn-default" name="Import" />
  </form>
</div>
