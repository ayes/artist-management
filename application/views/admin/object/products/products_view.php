<div class="row">
          <div class="col-lg-12">
<?php $flashmessage = $this->session->flashdata('message'); ?>
    <?php echo ! empty($flashmessage) ? 
    '<div class="alert alert-dismissable alert-success">'
    . '<button type="button" class="close" data-dismiss="alert">&times;</button>'
    .$flashmessage
    .'</div>' : ''; ?>          
</div>

          <div class="col-lg-12">

<h1>Product</h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Product</li>
            </ol>


          </div>
    <div class="col-lg-12">
<?php echo form_open('admin/products/search'); ?>
	
				<?php $input 	= array('name' => 'keyword', 'size' => 20, 'type' => 'search', 'class' => 'form-control'); ?>
        <div class="row">
            <div class="col-xs-3">
                Search product name or code:
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2">
            <select name="option" class="form-control">
    <option value="id">Code</option>
    <option value="name">Name</option>
</select>
            </div>
        <div class="col-xs-3">
				<?php echo form_input($input); ?>
        </div>
                             <div class="col-xs-2">  
				<?php echo form_submit('Search','Search', 'class="btn btn-default btn-lx"');?>
                                    </div> 
        </div>
	
	<?php echo form_close(); ?>
    </div>
<div class="col-lg-12 text-right">
<a href="/admin/products/add" class="btn btn-primary btn-lg" role="button">Add Product &raquo;</a></p>
</div>
<div class="col-lg-12">
<table class="table table-striped">
<tr>
    <th>CODE</th>
    <th>NAME</th>
    <th>PRICE</th>
    <th>PICTURE</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>                   
<?php $no = $this->uri->segment(3); ?>
<?php foreach($getProducts->result() as $row) : ?>                               

<td><?php echo $row->id; ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo number_format($row->price, 0, ',', '.'); ?></td>
<td><?php echo anchor(base_url().'fx-archive/images_product/thumbs/'.$row->picture, 'LINK', array('target'=>'_blank')); ?></td>


<td><?php echo anchor('admin/products/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>
<td><?php echo anchor('admin/products/delete/'.$row->id.'/'.$row->picture, 'DELETE', array('title'=>'Hapus', 'onClick'=>"return confirm('Anda yakin ingin menghapus?')")); ?></td>

</tr>                                
 
<?php endforeach; ?>				
			</table>
</div>
</div>
<div id="pagination" align="right">
</div>    