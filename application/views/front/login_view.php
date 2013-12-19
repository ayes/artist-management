<?php $this->load->view('front/obj/header'); ?>
<?php $this->load->view('front/obj/navbar1'); ?>

    

    <div class="container">
        <div class="row">
          <div class="col-lg-12">
        <?php $this->load->view('front/obj/flash_message'); ?>          
          </div></div>
<?php echo form_open('user-panel/proses', array('class' => 'form-signin')); ?>
        <h2 class="form-signin-heading">Silahkan Masuk</h2>
        <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
    <a href="/register" class="btn btn-lg btn-info btn-block">Daftar</a>  
    <a href="/register" class="btn btn-lg btn-warning btn-block">Lupa Password</a>  
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
