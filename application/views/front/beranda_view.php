
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php // include('title.php'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="JL Griffin" >
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    
    <!-- CSS: implied media=all -->
    <link rel="stylesheet" href="/template/default/css/table.css">
    <link rel="stylesheet" href="/template/default/css/fullcalendar.css">
    <link rel="stylesheet" href="/template/default/css/simplemodal.css">
    <link rel="stylesheet" href="/template/default/css/jquery.gritter.css">
    <link rel="stylesheet" href="/template/default/css/jquery.wysiwyg.css">
    <link rel="stylesheet" href="/template/default/css/chosen.css">
    <link rel="stylesheet" href="/template/default/css/jquery-ui-1.8.16.custom.css">
    <link rel="stylesheet" href="/template/default/css/elfinder.min.css">
    <link rel="stylesheet" href="/template/default/css/jqtransform.css">
    <link rel="stylesheet" href="/template/default/css/style.css">
    <!-- end CSS-->
    
    <!-- CSS Media Queries for Standard Devices -->
    <!--[if !IE]><!-->
        <link rel="stylesheet" href="/template/default/css/devices/smartphone.css" media="only screen and (min-width : 320px) and (max-width : 767px)">
        <link rel="stylesheet" href="/template/default/css/devices/ipad.css" media="only screen and (min-width : 768px) and (max-width : 1024px)"> 
    <!--<![endif]-->
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
    <!-- All JavaScript at the bottom, except for Modernizr / Respond.
         Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
         For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
    <script src="/template/default/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
    <div id="body-container">
        <div id="container">
	       <div id="login-container">
		   <div id="reg"><a href="#">Register Client Account!</a></div>
    <div id="login" class="i-box">
	    <div class="login-title"><h1><?php // include('loghead.php') ?></h1></div>
	    <form name="login-form" action="checklogin.php" method="post">
			<fieldset>
			    <section>
			        <input class="i-text required" id="myusername" type="text" name="myusername" placeholder="Username"></input>
			    </section>
			    <section>
			        <input class="i-text required" id="mypassword" type="password" name="mypassword" placeholder="Password"></input>
			    </section>
			</fieldset>
			<input class="i-button" type="submit" value="Login" />
			<a href="#">Forgot your password?</a>
	    </form>
		
    </div>
	
     <span>Powered By Artist Management System | Copyright &copy; 2011- <script type="text/javascript"> 
//<![CDATA[
            var d = new Date()
            document.write(d.getFullYear())
            //]]>
            </script></span>
</div>
	    </div> <!--! end of #container -->
    
    </div>
    
    <!-- JavaScript at the bottom for fast page loading -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/template/default/js/mylibs/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="/template/default/js/libs/jquery-1.6.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/libs/jquery-ui-1.8.16.custom.min.js"></script>
    
    <!-- scripts -->
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/elfinder.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.flot.pie.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.flot.resize.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.flot.stack.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.flot.crosshair.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.dataTables.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.tools.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/fullcalendar.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.gritter.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.simplemodal.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.autogrowtextarea.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.wysiwyg.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/controls/wysiwyg.image.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/controls/wysiwyg.link.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/controls/wysiwyg.table.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.idTabs.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.validate.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/chosen.jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.jqtransform.js"></script>
    <script language="javascript" type="text/javascript" src="/template/default/js/mylibs/jquery.ba-hashchange.min.js"></script>
    <script defer src="/template/default/js/init.js"></script>
    <script defer src="/template/default/js/bootstrap.js"></script>
    <!-- end scripts-->
    
    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
         chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
      <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
      <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
  
</body>
</html>
