  <div class="row">
          <div class="col-lg-12">

<h1>YM Live Support<small> Edit</small></h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> YM Live Support Edit</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open('admin/ym_live_support/update', array('role' => 'form')); ?>    
              <?php foreach($getEdit->result() as $row) : ?>
              <?php echo form_hidden('id', $row->id); ?>
  <div class="form-group">
    <label for="ym_support">YM Live Support</label>
    <input name="ym_support" type="text" class="form-control" id="ym_support" value="<?php echo $row->ym_support; ?>" required="required">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php endforeach; ?>
</form>              
</div>
</div><!-- /.row -->

