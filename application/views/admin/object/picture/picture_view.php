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

<h1>Picture</h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Picture</li>
            </ol>


          </div>
    
<div class="col-lg-12 text-right">
<a href="/admin/picture/add" class="btn btn-primary btn-lg" role="button">Add Picture &raquo;</a></p>
</div>
<div class="col-lg-12">
<table class="table table-striped">
<tr>
    <th>CODE</th>
    <th>PICTURE</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>                   

<?php foreach($get_picture->result() as $row) : ?>                               

<td><?php echo $row->id; ?></td>
<?php $data = array(
     'src' => base_url().'fx-archive/images_picture/thumbs/'.$row->picture,
        'width' => '182px'
); ?>
<td><?php echo img($data); ?></td>


<td><?php echo anchor('admin/picture/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>
<td><?php echo anchor('admin/picture/delete/'.$row->id.'/'.$row->picture, 'DELETE', array('title'=>'Hapus', 'onClick'=>"return confirm('Anda yakin ingin menghapus?')")); ?></td>

</tr>                                
 
<?php endforeach; ?>				
			</table>
</div>
</div>
<div id="pagination" align="right">
</div>    