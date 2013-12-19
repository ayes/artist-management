
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artist Management System">
    <meta name="author" content="Irfan Mahfudz Guntur - ayes@bsmsite.com">
    <?php echo link_tag('http://tools.bsmsite.com/template/artist_management/icon/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>
    <title>Artist Management System</title>
    <!-- Bootstrap core CSS -->
    <link href="http://tools.bsmsite.com/template/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://tools.bsmsite.com/template/global/css/jumbotron.css" rel="stylesheet">
    <link href="http://tools.bsmsite.com/template/artist_management/css/beranda.css" rel="stylesheet">
   
  </head>

  <body>
      
      
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Artist Management System</a>
        </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      
   <?php echo form_open('app-panel/proses', array('class' => 'navbar-form navbar-right')); ?>
            
        <div class="form-group">
            <input name="email" type="text" placeholder="Email" autofocus="autofocus" class="form-control">
        </div>&nbsp;
        <div class="form-group">
            <input name="password" type="password" placeholder="Password" class="form-control">
        </div>&nbsp;
           
            <?php echo form_submit('submit', 'Sign in', 'class="btn btn-success"'); ?>

       
                <?php echo form_close(); ?>
      
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>
    
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

  </body>
</html>
