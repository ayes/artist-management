
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faza Shop The Online Shopping Experience">
    <meta name="author" content="Irfan Mahfudz Guntur - ayes@bsmsite.com">
    <?php echo link_tag('http://tools.bsmsite.com/template/artist_management/icon/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>

    <title><?php echo $this->tools_model->get_soft_name(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="http://tools.bsmsite.com/template/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://tools.bsmsite.com/template/global/css/signin.css" rel="stylesheet">


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
          <a class="navbar-brand" href="/"><?php echo $this->tools_model->get_soft_name(); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          
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
<?php echo form_open('admin-panel/proses', array('class' => 'form-signin')); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

      <?php $this->load->view('inc/footer'); ?>       
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="http://tools.bsmsite.com/template/jquery/jquery-1.10.2.min.js"></script>
    <script src="http://tools.bsmsite.com/template/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
