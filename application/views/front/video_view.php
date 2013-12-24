<?php $this->load->view('front/obj/header'); ?>
<?php $this->load->view('front/obj/navbar'); ?>
<?php $this->load->view('front/obj/header_book_now'); ?>
     <div class="container">
         
         <h1>Video<small>  Gallery</small></h1>
 <ol class="breadcrumb">
              <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="active"><span class="glyphicon glyphicon-film"></span> Video</li>
            </ol>
         
	<div class="row">
            <?php foreach($get_video->result() as $row) : ?>
            <div class="col-xs-6 col-sm-4">
                <?php
                    $url = "http://gdata.youtube.com/feeds/api/videos/".$row->youtube_id;
                    $doc = new DOMDocument;
                    $doc->load($url);
                    $title = $doc->getElementsByTagName("title")->item(0)->nodeValue;
//                        $title = "test";
                ?>
                <div class="pin">
                    <div title="<?php echo $title ?>" class="well well-sm">
                       <small><?php echo character_limiter($title, 30) ?></small>
                    </div>
                    <img class="img-rounded" src="http://img.youtube.com/vi/<?php echo $row->youtube_id; ?>/0.jpg" width="100%">
                    <p class="text-right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-play"></span> Play
                        </button>
                    </p> 
                </div>
            </div>
            <?php endforeach; ?>
          </div>
         
      <?php $this->load->view('inc/footer'); ?>
   
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>template/default/js/bootstrap.min.js"></script>
    
  </body>
</html>
