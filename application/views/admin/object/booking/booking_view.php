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
    <thead>
        <tr>
            <th>NO.</th>
            <th>TANGGAL EVENT</th>
            <th>LOKASI EVENT</th>
            <th>JENIS EVENT</th>
            <th>ANGGARAN PERKIRAAN</th>
            <th>KETERANGAN</th>
            <th>STATUS</th>
        </tr>     
    </thead>    
<?php $no = $this->uri->segment(3); ?>
    <tbody>
<?php foreach($get_booking->result() as $row) : ?>                               
<td><?php echo $no=$no+1; ?></td>
<td><?php echo date("d-m-Y",strtotime($row->event_date)); ?></td>
<td><?php echo $row->event_location; ?></td>
<td><?php echo $row->event_type; ?></td>
<td><?php echo $row->approximate_budget; ?></td>
<td><?php echo $row->event_comments; ?></td>
<td><?php echo $row->status; ?></td>
<?php /*
<td><?php echo anchor('app/evaluasi_anggaran_apbd/edit/'.$row->id, 'VIEW', array('title'=>'Edit')); ?></td>
<td><?php echo anchor('app/evaluasi_anggaran_apbd/edit/'.$row->id, 'EDIT', array('title'=>'Edit')); ?></td>
<td><?php echo anchor('app/evaluasi_anggaran_apbd/delete/'.$row->id, 'DELETE', array('title'=>'Hapus', 'onClick'=>"return confirm('Anda yakin ingin menghapus?')")); ?></td>
*/ ?>
</tr>                                
 
<?php endforeach; ?>	
</tbody>
			</table>
</div>
</div>
<div id="pagination" align="right">
</div>    