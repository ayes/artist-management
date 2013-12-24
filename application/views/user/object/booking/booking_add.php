  <div class="row">
          <div class="col-lg-12">

<h1>Entertainment<small>  Booking Request Form</small></h1>
 <ol class="breadcrumb">
              <li><a href="/user/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Booking Request</li>
            </ol>

<div class="alert alert-info alert-dismissable">
Dibawah ini adalah formulir pemesanan sehingga kami mendapatkan pemahaman yang jelas tentang kebutuhan Anda, tentang anggaran dan lain-lain sehingga kami dapat membantu anda. 
Silahkan isi formulir dibawah ini dan kami akan menghubungi Anda.
            </div>
          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
<?php echo form_open('user/booking/save', array('role' => 'form')); ?>    
  <div class="form-group">
        <label for="event_date">Tanggal Event</label>
        <?php $data = array(
            'name' => 'event_date',
            'class' => 'form-control',
            'size' => 10,
            'required' => 'required',
            'readonly' => 'readonly',
            'id' => 'date',
            'value' => set_value('event_date', date('d-m-Y'))
        ); ?>
        <?php echo form_input($data); ?> 
        <div class="text-right">
            <img src="http://tools.bsmsite.com/template/dtpicker/img/cal.gif" onclick="javascript:NewCssCal ('date','ddMMyyyy')" style="cursor:pointer"/>
            </div>
        </div>
  <div class="form-group">
    <label for="event_location">Lokasi Event</label>
    <input name="event_location" type="text" class="form-control" id="event_location" placeholder="Lokasi event" required="required">
  </div>
   <div class="form-group">
    <label for="event_type">Jenis Event</label>
    <input name="event_type" type="text" class="form-control" id="event_type" placeholder="Jenis event" required="required">
  </div>
   <div class="form-group">
    <label for="approximate_budget">Anggaran Perkiraan</label>
    <input name="approximate_budget" type="text" class="form-control" id="approximate_budget" placeholder="Anggaran perkiraan" required="required">
  </div> 
    <div class="form-group">
    <label for="event_comments">Keterangan</label>
    <textarea name="event_comments" class="form-control" rows="5" required="required"></textarea>
  </div> 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
</div>
</div><!-- /.row -->
<script src="http://tools.bsmsite.com/template/dtpicker/css/datetimepicker_css.js"></script>

