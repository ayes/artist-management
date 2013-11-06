
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artist Management System">
    <meta name="author" content="Irfan Mahfudz Guntur - ayes@bsmsite.com">
    <?php echo link_tag(base_url().'template/default/icon/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>

    <title>Artist Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>template/default/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>template/default/css/jumbotron.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/default/css/video.css" rel="stylesheet">
    
   
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
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
           
            <?php echo form_submit('submit', 'Sign in', 'class="btn btn-success"'); ?>
          <a href="/register" class="btn btn-info">Sign up</a>
        <a href="/register" class="btn btn-warning">Forgot Password</a>
                <?php echo form_close(); ?>
      
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Katharina Ratu Dewi</h1>      
        <p>To hire Katharina Ratu Dewi or to get pricing, fees and availability on Katharina Ratu Dewi to perform at your corporate event, gala, fundraising event, private performance, party, fundraiser, public concert, wedding, college, exhibition or festival worldwide. Fill out and submit the simple entertainment request form, and Artist Management System will get back to you to discuss the artists pricing, fees and availability.</p>
        <a href="/app/booking/add" class="btn btn-primary btn-lg" role="button">Book Now &raquo;</a></p>
      </div>
    </div>

     <div class="container">
         
         <h1>Video<small>  Gallery</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-film"></span> Video</li>
            </ol>
         
	<div class="row">
        <div class="col-xs-6 col-sm-4">
          <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/SNAEF0peyrw";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
               <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
             <img class="img-rounded" src="http://img.youtube.com/vi/SNAEF0peyrw/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
          
        
          </div>
        <div class="col-xs-6 col-sm-4">
          <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/KM4qKQ0wsPQ";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
             <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
           <img class="img-rounded" src="http://img.youtube.com/vi/KM4qKQ0wsPQ/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
      </div>
         
        <div class="col-xs-6 col-sm-4">
          <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/Y6xhnrnFvsQ";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
             <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
           <img class="img-rounded" src="http://img.youtube.com/vi/Y6xhnrnFvsQ/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
          </div>
          <div class="col-xs-6 col-sm-4">
          <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/B86nF3MPOuI";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
              <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
           <img class="img-rounded" src="http://img.youtube.com/vi/B86nF3MPOuI/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
          </div>
        <div class="col-xs-6 col-sm-4">
          <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/D5Z8hPiFLo8";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
              <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
           <img class="img-rounded" src="http://img.youtube.com/vi/D5Z8hPiFLo8/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
      </div>
         
        <div class="col-xs-6 col-sm-4">
         <?php
          $url = "http://gdata.youtube.com/feeds/api/videos/W1vJfYXkO5Q";
            $doc = new DOMDocument;
            $doc->load($url);
            $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
            ?>
           <div class="pin">
              <div title="<?= $title ?>" class="well well-sm">
                   <small><?= character_limiter($title, 30) ?></small>
           </div>
           <img class="img-rounded" src="http://img.youtube.com/vi/W1vJfYXkO5Q/0.jpg" width="100%">
           <p class="text-right">
               <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
           </p> 
        </div>
          </div>
          </div>
         
      <?php $this->load->view('inc/footer'); ?>
   
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
    
  </body>
</html>
