  <div class="row">
          <div class="col-lg-12">

<h1>Video<small> Edit</small></h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Video Edit</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/video/update', array('role' => 'form')); ?>    
              <?php foreach($getEdit->result() as $row) : ?>
              <?php echo form_hidden('id', $row->id); ?>
 
 
    
   
              <div class="form-group">
        <label for="youtube_id">Youtube ID</label>
        <input value="<?php echo $row->youtube_id; ?>" name="youtube_id" type="text" class="form-control" id="youtube_id" required="required">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php endforeach; ?>
</form>              
</div>
</div><!-- /.row -->

