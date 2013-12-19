  <div class="row">
          <div class="col-lg-12">

<h1>Category Product<small> Add</small></h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Category Product Add</li>
            </ol>


          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open('admin/product_category/save', array('role' => 'form')); ?>    
  <div class="form-group">
    <label for="category">Category</label>
    <input name="category" type="text" class="form-control" id="category" placeholder="Category" required="required">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
</div>
</div><!-- /.row -->

