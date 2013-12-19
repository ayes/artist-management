  <div class="row">
          <div class="col-lg-12">

<h1>Product<small> Edit</small></h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Product Edit</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/products/update', array('role' => 'form')); ?>    
              <?php foreach($getEdit->result() as $row) : ?>
              <?php echo form_hidden('id', $row->id); ?>
              <?php echo form_hidden('picture', $row->picture); ?>
  <div class="form-group">
    <label for="category">Category</label>
    <select  class="form-control" name="product_category_id">
                                            <?php foreach($getProductCategory->result() as $rcat) : ?>
                                                <?php if($rcat->id == $row->product_category_id) {
                                            $select = 'selected="selected"';
                                            } else {
                                                $select = '';
                                            } ?>
                                            <option value="<?php echo $rcat->id; ?>" <?php echo $select; ?>><?php echo $rcat->category ;?></option>
                                            <?php endforeach ?>
                                            </select>
  </div>
 <div class="form-group">
    <label for="name">Product Name</label>
    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row->name; ?>" required="required">
      </div>
      <div class="form-group">
    <label for="price">Price</label>
    <input name="price" type="text" class="form-control" id="price" value="<?php echo $row->price; ?>" required="required">
      </div>
     <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="8"><?php echo $row->description; ?></textarea>
      </div>
              <div class="form-group">
                  <label for="pic"><?php echo img(base_url().'fx-archive/images_product/thumbs/'.$row->picture); ?></label>
              </div>
      <div class="form-group">
    <label for="picture">Picture</label>
    <?php echo form_upload('userfile'); ?>
    <p class="help-block">Size 227px * 170px.</p>
      </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php endforeach; ?>
</form>              
</div>
</div><!-- /.row -->

