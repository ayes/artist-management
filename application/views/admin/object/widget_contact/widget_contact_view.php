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
    <?php echo form_open('admin/widget_setting/contact'); ?>
        <div class="row">
            <div class="col-xs-3">
                <label>Widget Contact:</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <div class="checkbox">
                    <?php if ($this->tools_model->set_contact_widget() == 1 ) : ?>
                    <label><input type="checkbox" name="contact_widget_set" checked="checked">Enabled</label>
                    <?php else: ?>
                    <label><input type="checkbox" name="contact_widget_set">Enabled</label>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">  
            <?php echo form_submit('Apply','Apply', 'class="btn btn-success btn-lx"');?>
            </div> 
        </div>
    <?php echo form_close(); ?>
</div>
   