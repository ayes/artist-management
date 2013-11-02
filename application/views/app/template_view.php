<?php $this->load->view('app/includes/header'); ?>

<nav class="navbar navbar-default navbar-collapse navbar-fixed-top" role="navigation">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href='/'>Artist Management System</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar">
    <li><a href="/app/booking"><span class="glyphicon glyphicon-time"></span> Booking</a></li>   
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-star"></span> Alert <span class="badge">7</span></a></li>
      <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('name'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li class="divider"></li>
                <li><a href="/app-panel/logout"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
              </ul>
            </li>
    </ul>
      
    
     
  </div><!-- /.navbar-collapse -->
</nav>      

      
<div class="container">
              
           <?php $this->load->view($content); ?>   
    
    
    
           
              
              

     
<?php $this->load->view('app/includes/footer'); ?>
