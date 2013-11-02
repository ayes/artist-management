  <div class="row">
          <div class="col-lg-12">

<h1>Entertainment<small>  Booking Request Form</small></h1>
 <ol class="breadcrumb">
              <li><a href="/app/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li class="active"><span class="glyphicon glyphicon-edit"></span> Booking Request</li>
            </ol>

<div class="alert alert-info alert-dismissable">
This confidential form was created so Artist Management System can get a clear understanding of your specific needs, demographics, budgets, etc. so they can better assist you.
Please fill out the form below and Artist Management System will contact you.              
            </div>
          </div>
        </div><!-- /.row -->
<div class="row">
          <div class="col-lg-6">
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
</div>
</div><!-- /.row -->

