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
<table class="table table-striped">
<tr>
    <th>BANNER</th>
    <th>EDIT</th>
</tr>                   
<?php foreach($getBanners->result() as $row) : ?>                               


<td><?php echo anchor(base_url().'fx-archive/images_banner/thumbs/'.$row->banner, 'LINK', array('target'=>'_blank')); ?></td>


<td><?php echo anchor('admin/banners/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>

</tr>                                
 
<?php endforeach; ?>				
			</table>
</div>
</div>
<div id="pagination" align="right">
</div>    