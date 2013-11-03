
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
    <link href="<?php echo base_url(); ?>template/default/css/signin.css" rel="stylesheet">


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
        <div class="row">
          <div class="col-lg-12">
        <?php $flashmessage = $this->session->flashdata('message'); ?>
    <?php echo ! empty($flashmessage) ? 
    '<div class="alert alert-dismissable alert-success">'
    . '<button type="button" class="close" data-dismiss="alert">&times;</button>'
    .$flashmessage
    .'</div>' : ''; ?>          
          </div></div>
<?php echo form_open('app-panel/proses', array('class' => 'form-signin')); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="text" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="/register" class="btn btn-lg btn-info btn-block">Sign up</a>  
    <a href="/register" class="btn btn-lg btn-warning btn-block">Forget Password</a>  
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
