<?php $this->load->view('front/obj/header'); ?>
<?php $this->load->view('front/obj/navbar'); ?>
<?php $this->load->view('front/obj/header_book_now'); ?>
    

    <div class="container">
        
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-6 col-sm-4">
             
            <div class="pin">
                 
         
           <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img1.jpg">
         
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="/picture" role="button"><span class="glyphicon glyphicon-picture"></span> Picture</a></p>
        </div>
          </div>
        <div class="col-xs-6 col-sm-4">
            <div class="pin">
          
          
          <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img2.jpg">
          
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="/video" role="button"><span class="glyphicon glyphicon-film"></span> Video</a></p>
       </div>
      </div>
         
        <div class="col-xs-6 col-sm-4">
            <div class="pin">
          
         
           <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img3.jpg" alt="Generic placeholder image">
         
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="/song" role="button"><span class="glyphicon glyphicon-music"></span> Song List</a></p>       
            </div>
          </div>
          <div class="col-xs-6 col-sm-4">
              <div class="pin">
          
          
           <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img4.jpg">
          
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="/profile" role="button"><span class="glyphicon glyphicon-user"></span> Profile</a></p>
        </div>
          </div>
        <div class="col-xs-6 col-sm-4">
            <div class="pin">
          
         
          <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img5.jpg">
         
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="/biography" role="button"><span class="glyphicon glyphicon-book"></span> Biography</a></p>
          </div>
      </div>
         
        <div class="col-xs-6 col-sm-4">
            <div class="pin">
          
          
           <img class="img-rounded" src="<?php echo base_url(); ?>source/images/img6.jpg">
          
          <p><a class="btn btn-default btn-lg btn-block btn-lg" href="#" role="button"><span class="glyphicon glyphicon-road"></span> Story</a></p>       
            </div>
          </div>
          </div>

<?php $this->load->view('inc/footer'); ?>


