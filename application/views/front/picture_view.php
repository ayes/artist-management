
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
    <link href="<?php echo base_url(); ?>template/default/css/picture.css" rel="stylesheet">
    
   
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

    
      <div id="wrapper">
	<div id="columns">
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Sed feugiat consectetur pellentesque. Nam ac elit risus, 
				ac blandit dui. Duis rutrum porta tortor ut convallis.
				Duis rutrum porta tortor ut convallis.
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/atukusemua.jpg" />
			<p>
				Donec a fermentum nisi. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Nullam eget lectus augue. Donec eu sem sit amet ligula 
				faucibus suscipit. Suspendisse rutrum turpis quis nunc 
				convallis quis aliquam mauris suscipit.
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Nullam eget lectus augue. Donec eu sem sit amet ligula 
				faucibus suscipit. Suspendisse rutrum turpis quis nunc 
				convallis quis aliquam mauris suscipit.
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/atukusemua.jpg" />
			<p>
				Donec a fermentum nisi. Integer dolor est, commodo ut 
				sagittis vitae, egestas at augue. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Sed feugiat consectetur pellentesque. Nam ac elit risus, 
				ac blandit dui. Duis rutrum porta tortor ut convallis.
				Duis rutrum porta tortor ut convallis.
			</p>
		</div>	
		
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Nullam eget lectus augue. Donec eu sem sit amet ligula 
				faucibus suscipit. Suspendisse rutrum turpis quis nunc 
				convallis quis aliquam mauris suscipit.
				Duis rutrum porta tortor ut convallis.
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/atukusemua.jpg" />
			<p>
				Nullam eget lectus augue. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Sed feugiat consectetur pellentesque. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Donec a fermentum nisi. Integer dolor est, commodo ut 
				sagittis vitae, egestas at augue. Suspendisse id nulla 
				ac urna vestibulum mattis. Duis rutrum porta tortor ut convallis.
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/atukusemua.jpg" />
			<p>
				Donec a fermentum nisi. Integer dolor est, commodo ut 
				sagittis vitae, egestas at augue. Suspendisse id nulla 
				ac urna vestibulum mattis. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Sed feugiat consectetur pellentesque. Nam ac elit risus, 
				ac blandit dui. Duis rutrum porta tortor ut convallis.
			</p>
		</div>	
		
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Donec a fermentum nisi. Integer dolor est, commodo ut 
				sagittis vitae, egestas at augue. Suspendisse id nulla 
				ac urna vestibulum mattis. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/atukusemua.jpg" />
			<p>
				Donec a fermentum nisi. Integer dolor est, commodo ut 
				sagittis vitae, egestas at augue. Suspendisse id nulla 
				ac urna vestibulum mattis. 
			</p>
		</div>
	
		<div class="pin">
			<img src="/source/img/img1.jpg" />
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Sed feugiat consectetur pellentesque. Nam ac elit risus, 
				ac blandit dui. Duis rutrum porta tortor ut convallis.
			</p>
		</div>
	</div>
</div>
    <div class="container">
      <?php $this->load->view('inc/footer'); ?>
   
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
    
  </body>
</html>
