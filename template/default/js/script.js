
/* main function for url routing */
/* this is just for the demo, don't use this in production */
gateway = function(hash) {
	$('#main-navigation ul li a').removeClass('active');
	$(hash+'-m').toggleClass('active');
	
	switch (hash) { 
		case '#dashboard':
			loadDashboard();
			break;
		
		case '#elements': 
			loadElements();
			break;

		case '#data': 
			loadData();
			break;
			
		case '#forms': 
			loadForms();
			break;
			
		case '#file': 
			loadFile();
			break;	
			
		case '#users': 
			loadUsers();
			break;
			
		case '#charts': 
			loadCharts();
			break;
			
		case '#calendar': 
			loadCalendar();
			break;
			
		case '#404': 
			load404();
			break;
			
		case '#500': 
			load500();
			break;

		case '#login': 
			loadLogin();
			break;
			
		default:
			loadDashboard();
			break;
	}
};


/* load Dashboard section html into #main-container and initialize the plugins */
loadDashboard = function(){
	$.get('dashboard.html', function(data) {
		$('#main-container').html(data);
	}).success(function() {
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initDashboard();
			initMenu();
		});
	});
};

/* load Elements section html into #main-container and initialize the plugins */
loadElements = function(){
	$.get('elements.html', function(data) {
		$('#main-container').html(data);
	}).success(function() {
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initElements();
			initMenu();
		});
	});
};

/* load Data section html into #main-container and initialize the plugins */
loadData = function(){
	$.get('data.html', function(data) {
		$('#main-container').html(data);
	}).success(function() { 
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initData();	
			initMenu();
		});
	});
};

/* load Forms section html into #main-container and initialize the plugins */
loadForms = function(){
	$.get('forms.html', function(data) {
		$('#main-container').html(data);
	}).success(function() { 
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initForms();	
			initMenu();
		});
	});
};

/* load File Manager section html into #main-container and initialize the plugins */
loadFile = function(){
	$.get('file.html', function(data) {
		$('#main-container').html(data);
	}).success(function() { 
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initFile();	
			initMenu();
		});
	});
};

/* load Charts section html into #main-container and initialize the plugins */
loadCharts = function(){
	$.get('charts.html', function(data) {
		$('#main-container').html(data);
	}).success(function() { 
		$('#body-section').fadeIn(400, function() {
			initCommon();
			initCharts();	
			initMenu();
		});
	});
};

/* load Login section html into #body-container */
load404 = function(url){
	$.get('404.html', function(data) {
		$('#body-container').html(data);
	}).success(function() {
		$('#error-page-container').fadeIn(400);
	});
};
/* load Login section html into #body-container */
load500 = function(url){
	$.get('500.html', function(data) {
		$('#body-container').html(data);
	}).success(function() {
		$('#error-page-container').fadeIn(400);
	});
};


/* load Login section html into #body-container */
loadLogin = function(){
	$.get('login.html', function(data) {
		$('#body-container').html(data);			
	}).success(function() {
		$('#login-container').fadeIn(700, function() {
			$("#login-form").validate({
				submitHandler: function() { 
					loadBase(true); 
					window.location = '/#dashboard'; 
				}
			});
		});
	});
};

/* load Base section html into #body-container and initialize plugins */
loadBase = function(init){
	$.get('base.html', function(data) {
		$('#body-container').html(data);
	}).success(function() {
		$('#container').fadeIn(400, function() {
			gateway(window.location.hash);
			if (init) {initFirstTime();}
		});
	});
};

$(function(){
	/* just handles the first request */
	/* this is only for the demo */
	var url = window.location.hash;
	if (url == '' || url == '#login') {
		loadLogin();
	} else {
		loadBase(true);
	}
	
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