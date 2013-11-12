
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
         
         <h1>Biography<small>  Page</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-book"></span> Biography</li>
            </ol>
         
	<div class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-8">
          <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Ratu Dewi Kartika</h3>
  </div>
  <div class="panel-body">
    Ratu Dewi adalah pemilik hits Single Maafkan Aku (lahir di Bogor, 7 Juli 1988). Ratu Dewi memiliki hobby menyanyi dengan aliran POP dengan sentuhan Rock. Optimisme tinggi menjadi dasar bagi Ratu Dewi untuk berjuang memperkenalkan musik yang dibawanya ke blantika musik tanah air.
    <h3>Karier</h3>
   
    Beberapa pengalaman ialah dalam dunia model dan sudah memiliki video klip untuk single yang berjudul Maafkan Aku. lagu Maafkan Aku merupakan buah karya dari mantan drumer Kotak Posan Tobing.
  
  <h3>Album</h3>
    
    <ul>
        <li>Lelaki Hanyalah Mainan</li>
    </ul>
    <h3>Single</h3>
    
    <ul>
        <li>Maafkan Aku</li>
    </ul>
    </div>
</div>  
            
       
        </div>
        <div class="col-xs-6 col-sm-4">
             <div class="thumbnail">
      <img class="img-rounded" src="/source/img/atu1.jpg" width="100%">
      <div class="caption">
        <h3>Ratu Dewi Kartika</h3>
        <p>
            <address>
  <strong>Lahir</strong><br>
  7 Juli 1988<br />
  Bogor Indonesia 
</address>
        <address>
  <strong>Pekerjaan</strong><br>
  <ul>
      <li>Singer</li>
      <li>Host</li>
      <li>Advertising Model</li>
      <li>Actress</li>
  </ul>
</address>
        <address>
  <strong>Tahun Aktif</strong><br>
  2008 - Sekarang 
</address>
        </p>
        
      </div>
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
