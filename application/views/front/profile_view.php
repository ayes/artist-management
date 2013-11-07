
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
         
         <h1>Profile<small>  Page</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-user"></span> Profile</li>
            </ol>
         
	<div class="row">
        <div class="col-xs-6 col-sm-4">

        <img class="img-rounded" src="/source/img/atu1.jpg" width="100%">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-8">

        <h1>Katharina <small>Ratu Dewi</small></h1>
        <hr />
        <div class="lead"><span class="label label-default">Singer</span> <span class="label label-default">Host</span> <span class="label label-default">Advertising Model</span> <span class="label label-default">Actress</span></div>
        </div>
        </div>
  
         <hr />
         <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Professional Profile</h3>
  </div>
  <div class="panel-body">
    RATU yang mempunyai nama asli Ratu Dewi Kartika kelahiran Bogor, 7 Juli 1988 ini memulai karir sejak duduk di bangku sekolah.
  </div>
</div>

 <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Work Experience</h3>
  </div>
  <div class="panel-body">
Ratu mengeluarkan 3 album dan 2 single  yaitu :<br />
<ol>
    <li>Album bertajuk ”Duh Sakit” tahun 2003 (dangdut).</li>
    <li>Mini Album bertajuk “Ingat Selalu” tahun  2006 (dangdut).</li>
    <li>Mini Album “Lelaki Hanyalah Mainan” tahun 2009 (Pop).</li> 
    <li>Single berjudul “Maafkan Aku” tahun 2011 (Pop).</li>
    <li>Single Duo “Anytime Beib” tahun</li> 
</ol>
RATU yang pernah tergabung menjadi personil “Duo D’Cute” selain nyanyi RATU juga sangat multitalenta sudah membintangi iklan Raja Gula, sinetron RCTI,  dan  membintangi 3 judul FTV :<br />
<ol>
    <li>Bukan Siti Nurbaya, FTV Global TV</li>
    <li>Rumah Diatas Bukit, Bioskop Trans TV</li>
    <li>Cinta Dalam Ketoprakmu, FTV RCTI.</li>
</ol>
selain itu ratu juga pernah menjadi Host di acara “Sang Penemu” Metro TV dan beberapa acara lainnya
  </div>
</div>        

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Project</h3>
  </div>
  <div class="panel-body">
    RATU saat ini tengah merelease single yang berjudul "Pacar Gelap Bang Toyib" dengan genre dangdut house music koplo.
  </div>
</div>         
         
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Personal</h3>
  </div>
  <div class="panel-body">
    RATU yang memiliki tinggi badan 165 cm dan berat badan 48 Kg dengan warna favoritnya yaitu Pink juga mempunyai beberapa hobby diantaranya yaitu: menyanyi, akting dan dance. Optimisme tinggi menjadi dasar bagi RATU untuk berjuang di blantika musik tanah air
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
