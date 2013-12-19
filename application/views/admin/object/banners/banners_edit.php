  <div class="row">
          <div class="col-lg-12">

<h1>Banner<small> Edit</small></h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Banner Edit</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/banners/update', array('role' => 'form')); ?>    
              <?php foreach($getEdit->result() as $row) : ?>
              <?php echo form_hidden('id', $row->id); ?>
              <?php echo form_hidden('banner', $row->banner); ?>
 
              <div class="form-group">
                  <label for="pic"><?php echo img(base_url().'fx-archive/images_banner/thumbs/'.$row->banner); ?></label>
              </div>
      <div class="form-group">
    <label for="banner">Banner</label>
    <?php echo form_upload('userfile'); ?>
    <p class="help-block">Size 1344px * 500px.</p>
      </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php endforeach; ?>
</form>              
</div>
</div><!-- /.row -->

