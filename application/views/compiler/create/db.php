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
<div class="col-md-12">
  <h3>Table Compiler List</h3>
  <hr/>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th width="30%">List Table</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>users</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/users">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/users/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/users/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>user_type</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/user_type">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/user_type/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/user_type/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>propinsi</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/provinsi">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/provinsi/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/provinsi/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>kabkota</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/kabkota">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/kabkota/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/kabkota/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>detail_usulan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/detail_usulan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/detail_usulan/drop">Drop</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>usulan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/usulan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/usulan/drop">Drop</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>satuan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/satuan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/satuan/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/satuan/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>sediaan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/sediaan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/sediaan/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/sediaan/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>rumah_sakit</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/rumah_sakit">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/rumah_sakit/drop">Drop</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/rumah_sakit/insert">Insert</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>usulan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/usulan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/usulan/drop">Drop</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr>
        <td>detail_usulan</td>
        <td align="center">
          <a href="<?=base_url()?>compiler/detail_usulan">Create</a>&nbsp;&nbsp;
          <a href="<?=base_url()?>compiler/detail_usulan/drop">Drop</a>&nbsp;&nbsp;
        </td>
      </tr>
    </tbody>
  </table>
</div>
