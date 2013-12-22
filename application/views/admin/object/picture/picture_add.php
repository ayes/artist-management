  <div class="row">
          <div class="col-lg-12">

<h1>Picture<small> Add</small></h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Picture Add</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/picture/save', array('role' => 'form')); ?>    
  
     <div class="form-group">
    
      <div class="form-group">
    <label for="picture">Picture</label>
    <?php echo form_upload('userfile'); ?>
    <p class="help-block">Size 500px * 750px.</p>
      </div>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
</div>
</div><!-- /.row -->

