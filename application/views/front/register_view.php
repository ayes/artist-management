
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
    <link href="<?php echo base_url(); ?>template/default/css/starter-template.css" rel="stylesheet">


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
          <a class="navbar-brand" href="/">Artis Management System</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Register Form</h1>
        <p class="lead">-
</p>
      </div>
<?php echo form_open('register/save', array('role' => 'form')); ?>    
      <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="required">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="required">
  </div>
   <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="required">
  </div>
   <div class="form-group">
    <label for="mobile_phone">Mobile Phone</label>
    <input name="mobile_phone" type="text" class="form-control" id="mobile_phone" placeholder="Mobile phone" required="required">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      <?php $this->load->view('inc/footer'); ?>      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
  </body>
</html>
