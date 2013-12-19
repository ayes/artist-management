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
    <?php echo form_open('admin/widget_setting/ym'); ?>
        <div class="row">
            <div class="col-xs-3">
                <label>YM Live Support:</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <div class="checkbox">
                    <?php if ($this->tools_model->set_ym_widget() == 1 ) : ?>
                    <label><input type="checkbox" name="ym_widget_set" checked="checked">Enabled</label>
                    <?php else: ?>
                    <label><input type="checkbox" name="ym_widget_set">Enabled</label>
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


<div class="col-lg-12 text-right">
<a href="/admin/ym_live_support/add" class="btn btn-primary btn-lg" role="button">Add YM &raquo;</a></p>
</div>
<div class="col-lg-12">
<table class="table table-striped">
<tr>
    <th>NO.</th>
    <th>YM</th>
    <th>EDIT</th>
    <th>DELETE</th>
 
</tr>                   
<?php $no = $this->uri->segment(3); ?>
<?php foreach($get_ym_live_support->result() as $row) : ?>                               
<td><?php echo $no=$no+1; ?></td>
<td><?php echo $row->ym_support; ?></td>

<td><?php echo anchor('admin/ym_live_support/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>

<td>
<?php echo anchor('admin/ym_live_support/delete/'.$row->id, 'DELETE', array('title'=>'Hapus', 'onClick'=>"return confirm('Sure for delete?')")); ?>

</td>

</tr>                                
 
<?php endforeach; ?>				
			</table>

<div id="pagination" align="right">
</div>    