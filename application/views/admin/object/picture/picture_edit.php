  <div class="row">
          <div class="col-lg-12">

<h1>Picture<small> Edit</small></h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Picture Edit</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/picture/update', array('role' => 'form')); ?>    
              <?php foreach($getEdit->result() as $row) : ?>
              <?php echo form_hidden('id', $row->id); ?>
              <?php echo form_hidden('picture', $row->picture); ?>
 
 
    
   
              <div class="form-group">
                  <label for="pic"><?php echo img(base_url().'fx-archive/images_picture/thumbs/'.$row->picture); ?></label>
              </div>
      <div class="form-group">
    <label for="picture">Picture</label>
    <?php echo form_upload('userfile'); ?>
     <p class="help-block">Size 500px * 750px.</p>
      </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php endforeach; ?>
</form>              
</div>
</div><!-- /.row -->

