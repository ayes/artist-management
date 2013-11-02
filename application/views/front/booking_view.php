
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
        <h1>Entertainment Request Form</h1>
        <p class="lead">This confidential form was created so Artist Management System can get a clear understanding of your specific needs, demographics, budgets, etc. so they can better assist you.
Please fill out the form below and Artist Management System will contact you.
</p>
      </div>
<?php echo form_open('booking/add', array('role' => 'form')); ?>    
  <div class="form-group">
    <label for="event_date">Event Date</label>
    <input name="event_date" type="text" class="form-control" id="event_date" placeholder="Event date">
  </div>
  <div class="form-group">
    <label for="event_location">Event Location</label>
    <input name="event_location" type="text" class="form-control" id="event_location" placeholder="Event location">
  </div>
   <div class="form-group">
    <label for="event_type">Event Type</label>
    <input name="event_type" type="text" class="form-control" id="event_type" placeholder="Event type">
  </div>
   <div class="form-group">
    <label for="approximate_budget">Approximate Budget</label>
    <input name="approximate_budget" type="text" class="form-control" id="approximate_budget" placeholder="Approximate budget">
  </div> 
    <div class="form-group">
    <label for="event_comments">Event Comments</label>
    <textarea name="approximate_budget" class="form-control" rows="5"></textarea>
  </div> 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <hr />

      <?php $this->load->view('inc/footer'); ?>      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
  </body>
</html>
