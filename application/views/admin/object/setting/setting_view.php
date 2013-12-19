<div class="row">
          <div class="col-lg-12">
<?php $flashmessage = $this->session->flashdata('message'); ?>
    <?php echo ! empty($flashmessage) ? 
    '<div class="alert alert-dismissable alert-success">'
    . '<button type="button" class="close" data-dismiss="alert">&times;</button>'
    .$flashmessage
    .'</div>' : ''; ?>          
</div><!-- /.row -->

<div class="col-lg-12">
                   

<?php foreach($get_setting->result() as $row) : ?>                               

<?php echo form_open('admin/setting/update', array('role' => 'form')); ?>    
  <?php echo form_hidden('id', $row->id); ?>
    <div class="form-group">
        <label for="home_product_limit">Home Product Limit</label>
        <input value="<?php echo $row->home_product_limit; ?>" name="home_product_limit" type="text" class="form-control" id="home_product_limit" placeholder="Home Product Limit" required="required">
    </div>
    
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    
<?php endforeach; ?>				



</div>    </div>