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
                   

<?php foreach($get_how_order->result() as $row) : ?>                               

<?php echo form_open('admin/how_order/update', array('role' => 'form')); ?>    
  <?php echo form_hidden('id', $row->id); ?>
    <div class="form-group">
    <label for="how_order">How to order</label>
    <textarea name="how_order" class="form-control" rows="20"><?php echo $row->how_order; ?></textarea>
      </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    
<?php endforeach; ?>				



</div>    </div>