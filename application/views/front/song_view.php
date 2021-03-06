
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
    

    <?php $this->load->view('front/obj/header_book_now'); ?>

     <div class="container">
         
         <h1>Song<small>  List</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-music"></span> Song List</li>
            </ol>
         
         <ul class="list-group">
  <li class="list-group-item">
    <div class="well well-sm"><span class="glyphicon glyphicon-music"></span> Pacar Gelap Bang Toyib</div>
    <div class="text-right">
        
        <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
                <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-download-alt"></span> Download <span class="badge">7</span>
</button>
    </div>
  </li>
  <li class="list-group-item">
    <div class="well well-sm"><span class="glyphicon glyphicon-music"></span> Maafkan Aku</div>
    <div class="text-right">
        
        <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
                <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-download-alt"></span> Download <span class="badge">7</span>
</button>
    </div>
  </li>
  <li class="list-group-item">
    <div class="well well-sm"><span class="glyphicon glyphicon-music"></span> Kalimah Sakti</div>
    <div class="text-right">
        
        <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-play"></span> Play
</button>
                <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-download-alt"></span> Download <span class="badge">7</span>
</button>
    </div>
  </li>
</ul>
         
         
      <?php $this->load->view('inc/footer'); ?>
   
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
    
  </body>
</html>
