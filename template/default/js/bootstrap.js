$(function(){
	
	/* dashboar initialization */
	/* for elements just call initElements() and same for other sections */
	
	initCommon();
	initDashboard();
	initMenu();
	
	/* styler specific */
	/* you should remove this for production */
	$('#styler .dark').click(function(){
		$('head').append('<link rel="stylesheet" href="css/dark.css" type="text/css" />');
		$('body').css("background-image", "url(img/bg_dark.png)"); 
		$('#styler .container-dark').toggle();	
		$('#styler .container-light').toggle();
	});
	$('#styler .light').click(function(){
		$('link[href="css/dark.css"]').remove();
		$('body').css("background-image", "url(img/bg.png)"); 
		$('#styler .container-dark').toggle();		
		$('#styler .container-light').toggle();
	});
	$('.bg-changer a').click(function(){
		$('body').css("background-image", "url(img/" + $(this).attr('class') + ".png)"); 
	});
	$('#styler .liquid').click(function(){
		$('head').append('<link rel="stylesheet" href="css/liquid.css" type="text/css" />');
		$('#styler .container-liquid').toggle();
		$('#styler .container-responsive').toggle();
	});
	$('#styler .responsive').click(function(){
		$('link[href="css/liquid.css"]').remove();
		$('#styler .container-liquid').toggle();
		$('#styler .container-responsive').toggle();
	});	
	
});