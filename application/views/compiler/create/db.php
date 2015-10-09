<div class="col-md-4">
  <h3>Database Creator</h3>
  <hr/>
  <form class="form-inline" action="<?=base_url()?>compiler/createdb" method="post">
    <div class="form-group">
      <label for="inputDatabase">Database</label>
      <input type="text" class="form-control" id="inputDatabase" placeholder="Name For Database" name="database" />
    </div>
    <button type="submit" class="btn btn-default">Create</button>
  </form>
</div>
<div class="col-md-8">
  <h3>Database List</h3>
  <hr/>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th width="90%">Database List</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if(isset($list_db) && !empty($list_db)){ ?>
        <?php foreach($list_db as $name_db) { ?>
          <tr>
            <td><?=$name_db?></td>
            <td>
              <?php
                echo form_open(base_url().'compiler/dropdb');
                echo form_hidden('database', $name_db);
                echo form_submit('drop', 'Drop');
                echo form_close();
              ?>
            </td>
          </tr>
        <?php } ?>
        </form>
      <?php } ?>
    </tbody>
  </table>
</div>
