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
                   

<?php foreach($get_soft_profile->result() as $row) : ?>                               

<?php echo form_open('admin/profile/update', array('role' => 'form')); ?>    
  <?php echo form_hidden('id', $row->id); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input value="<?php echo $row->name; ?>" name="name" type="text" class="form-control" id="name" placeholder="Name" required="required">
    </div>
    <div class="form-group">
    <label for="booking_description">Booking Description</label>
    <textarea name="booking_description" class="form-control" rows="8"><?php echo $row->booking_description; ?></textarea>
      </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    
<?php endforeach; ?>				



</div>    </div>