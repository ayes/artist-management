  <div class="row">
          <div class="col-lg-12">

<h1>Video<small> Add</small></h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Video Add</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open('admin/video/save', array('role' => 'form')); ?>    
  
     <div class="form-group">
    
      <div class="form-group">
        <label for="youtube_id">Youtube ID</label>
        <input name="youtube_id" type="text" class="form-control" id="youtube_id" placeholder="Youtube id" required="required">
    </div>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
</div>
</div><!-- /.row -->

