<?php echo doctype('html5'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
        <?php echo link_tag(base_url().'source/admin/icon/favicon.ico', 'shortcut icon', 'image/x-icon'); ?>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/reset.css" /> <!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/main.css" /> <!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/style.css" /> <!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>source/admin/css/mystyle.css" /> <!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="<?php echo base_url(); ?>source/admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>source/admin/js/switcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>source/admin/js/toggle.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>source/admin/js/ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>source/admin/js/ui.tabs.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
         
	<title>Dashboard Application</title>
</head>

<body>
    <?php date_default_timezone_set("Asia/Makassar");?>
