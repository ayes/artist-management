<?php $this->load->view('front/obj/header'); ?>
<?php $this->load->view('front/obj/navbar'); ?>
<?php $this->load->view('front/obj/header_book_now'); ?>
     <div class="container">
         
     <h1>Picture<small>  Gallery</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-picture"></span> Picture</li>
            </ol>
     
	<div id="columns">
           
                
		 <?php foreach ($get_picture->result() as $row) : ?>
               <div class="pin">
                   <a href="<?php echo base_url().'fx-archive/images_picture/thumbs/'.$row->picture ;?>" rel="prettyPhoto[gallery2]" title="Ratu Dewi">
                   <img src="<?php echo base_url().'fx-archive/images_picture/thumbs/'.$row->picture ;?>" class="img-responsive">
                   </a>
                   <p class="text-right"><span class="glyphicon glyphicon-heart"></span></p>
		</div>
           <?php endforeach; ?>
	
     
         </div>
         
      <?php $this->load->view('inc/footer'); ?>
