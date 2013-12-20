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
          <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <?php echo form_open('user-panel/proses', array('class' => 'navbar-form navbar-right')); ?>
            
        <div class="form-group">
            <input name="email" type="email" placeholder="Email" autofocus="autofocus" class="form-control" required="required">
        </div>&nbsp;
        <div class="form-group">
            <input name="password" type="password" placeholder="Password" class="form-control" required="required">
        </div>&nbsp;
           
            <?php echo form_submit('submit', 'Sign in', 'class="btn btn-success"'); ?>

       
                <?php echo form_close(); ?>
      
        </div><!--/.navbar-collapse -->
        
      </div>
    </div>