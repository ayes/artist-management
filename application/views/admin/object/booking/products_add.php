  <div class="row">
          <div class="col-lg-12">

<h1>Product<small> Add</small></h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Product Add</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open_multipart('admin/products/save', array('role' => 'form')); ?>    
  <div class="form-group">
      <div class="form-group">
          <label for="product_category_id">Category</label>
    <select class="form-control" name="product_category_id">
                                            <?php foreach($getProductCategory->result() as $rcat) : ?>
                                            <option value="<?php echo $rcat->id; ?>"><?php echo $rcat->category ;?></option>
                                            <?php endforeach ?>
                                            </select>
      </div>
      <div class="form-group">
    <label for="name">Product Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" required="required">
      </div>
      <div class="form-group">
    <label for="price">Price</label>
    <input name="price" type="text" class="form-control" id="price" placeholder="Price" required="required">
      </div>
      <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="8"></textarea>
      </div>
      <div class="form-group">
    <label for="picture">Picture</label>
    <?php echo form_upload('userfile'); ?>
    <p class="help-block">Size 227px * 170px.</p>
      </div>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
</div>
</div><!-- /.row -->

