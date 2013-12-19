<?php $this->load->view('front/obj/header'); ?>
<?php $this->load->view('front/obj/navbar1'); ?>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $this->load->view('front/obj/validation_error'); ?>
            </div>
        </div>
      <div class="form-register">
        <h1>Formulir Pendaftaran</h1>
        <p class="lead">Silahkan isi data Anda pada formulir dibawah ini</p>
      </div>
<?php echo form_open('register/save', array('role' => 'form')); ?>    
      <div class="form-group">
    <label for="email">Email</label>
    <input name="email" value ="<?php echo set_value('email'); ?>" type="email" class="form-control" id="email" placeholder="Email" required="required">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="required">
  </div>
        <div class="form-group">
    <label for="repeat_password">Ulangi Password</label>
    <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Ulangi Password" required="required">
  </div>
   <div class="form-group">
    <label for="name">Nama Lengkap</label>
    <input name="name" value ="<?php echo set_value('name'); ?>" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="required">
  </div>
   <div class="form-group">
    <label for="mobile_phone">Nomor Handphone</label>
    <input name="mobile_phone" value ="<?php echo set_value('mobile_phone'); ?>" type="text" class="form-control" id="mobile_phone" placeholder="Nomor Handphone" required="required">
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
