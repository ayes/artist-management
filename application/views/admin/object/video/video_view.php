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

<h1>Video</h1>
 <ol class="breadcrumb">
              <li><a href="/admin/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Video</li>
            </ol>


          </div>
    
<div class="col-lg-12 text-right">
<a href="/admin/video/add" class="btn btn-primary btn-lg" role="button">Add Video &raquo;</a></p>
</div>
<div class="col-lg-12">
<table class="table table-striped">
<tr>
    <th>CODE</th>
    <th>YOUTUBE ID</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>                   

<?php foreach($get_video->result() as $row) : ?>                               

<td><?php echo $row->id; ?></td>
<td><?php echo $row->youtube_id; ?></td>


<td><?php echo anchor('admin/video/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>
<td><?php echo anchor('admin/video/delete/'.$row->id, 'DELETE', array('title'=>'Hapus', 'onClick'=>"return confirm('Anda yakin ingin menghapus?')")); ?></td>

</tr>                                
 
<?php endforeach; ?>				
			</table>
</div>
</div>
<div id="pagination" align="right">
</div>    