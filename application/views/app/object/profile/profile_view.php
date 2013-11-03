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
                   

<?php foreach($getProfile->result() as $row) : ?>                               

<?php echo form_open('app/profile/update', array('role' => 'form')); ?>    
  <?php echo form_hidden('id', $row->id); ?>
    <div class="form-group">
    <label for="email">Email</label>
    <input value="<?php echo $row->email; ?>" name="email" type="text" class="form-control" id="email" placeholder="Email" required="required" disabled>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input value="<?php echo $row->username; ?>" name="username" type="text" class="form-control" id="username" placeholder="Username" required="required" disabled>
  </div>
   <div class="form-group">
    <label for="name">Name</label>
    <input value="<?php echo $row->name; ?>" name="name" type="text" class="form-control" id="name" placeholder="Name" required="required">
  </div>
   <div class="form-group">
    <label for="mobile_phone">Mobile Phone</label>
    <input value="<?php echo $row->mobile_phone; ?>" name="mobile_phone" type="text" class="form-control" id="mobile_phone" placeholder="Mobile phone" required="required">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    
<?php endforeach; ?>				



</div>    </div>