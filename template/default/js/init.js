/* charts colors */
var i_gcolor = '2e7bb8', i_color = '#aaaaa', i_grid = { color:i_color, borderWidth:1 };
var i_options = {
		grid: i_grid,
		yaxis: { color:i_color },
		xaxis: { color:i_color}
	};

initFirstTime = function() {
	
	var hash = location.hash;
	
	$(window).hashchange( function(){
		if (hash == '#404' || hash == '#500') {
			loadBase(false);
		} else {
			gateway(location.hash);
		}
		hash = location.hash;
	});

	/* global notifications */
	$('#add-notify').click(function(){
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a regular notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: ''
		});
		return false;
	});

};

initTooltips = function() {
	
	$(".tt-center-left").tooltip({
		// place tooltip on the bottom
		position: "center left",
		// a little tweaking of the position
		offset: [0, -2]
	});		

	$(".tt-center-right").tooltip({
		// place tooltip on the bottom
		position: "center right",
		// a little tweaking of the position
		offset: [0, 2]
	});		

	$(".tt-top-center").tooltip({
		// place tooltip on the bottom
		position: "top center",
		// a little tweaking of the position
		offset: [-2, 0]
	});		

	$(".tt-bottom-center").tooltip({
		// place tooltip on the bottom
		position: "bottom center",
		// a little tweaking of the position
		offset: [2, 0]
	});
};
	
initCommon = function(){
		
	// main navigation actions
	$('#main-navigation ul li a').click(function(){
		if( !$(this).hasClass('active') ) {				
			var hash = $(this).attr('href');
		}
	});	
	
	var availableTags = [
		"ActionScript",
		"AppleScript",
		"Asp",
		"BASIC",
		"C",
		"C++",
		"Clojure",
		"COBOL",
		"ColdFusion",
		"Erlang",
		"Fortran",
		"Groovy",
		"Haskell",
		"Java",
		"JavaScript",
		"Lisp",
		"Perl",
		"PHP",
		"Python",
		"Ruby",
		"Scala",
		"Scheme"
	];
	$( "#search" ).autocomplete({
		source: availableTags
	});		

	/* box container */
	$(".collapsable").click(function (){
		if ($(this).is('.closed')) {
			$(this).removeClass('closed');
			$(this).addClass('open');
		} else {
			$(this).removeClass('open');
			$(this).addClass('closed');
		}
		$(this).closest('.box-element').find('.box-content').slideToggle();
		return false;
	});		
	
	/* modal popup */
	$('#show-modal').click(function(){
		$('#modal-content').modal({onShow: function(dlg) {
		    $(dlg.container).css('height','auto')
		}});
	});
	initTooltips();
};

// left menu init
initMenu = function(){

	//Set default open/close settings
	$('.menu-trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container
	
	$('#content').children().each(function(){
		if (!$(this).is(':first-child')) {
			$(this).css('display', 'none');
		}
	});
	
	//On Click
	$('.menu-trigger').click(function(){
		if( !$(this).hasClass('active') ) { //If immediate next container is closed...
			$('.menu-trigger').removeClass('active');
			$(this).toggleClass('active');			
		}
		$('#content').children().each(function() { 
			$(this).css('display', 'none');
		});
		var clsname = $(this).children("a").attr("id");
		$("." + clsname).fadeIn();
		return false; //Prevent the browser jump to the link anchor
	});
};

initLineChart = function() {

	
	var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.1) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#plot-charts"),
                      [ { data: sin, label: "sin(x) = -0.00"},
                        { data: cos, label: "cos(x) = -0.00" } ], {
                            series: {
                                lines: { show: true }
                            },
                            crosshair: { mode: "x" },
                            grid: { hoverable: true, autoHighlight: false, color:i_color, borderWidth:1 },
                            yaxis: { min: -1.2, max: 1.2, color:i_color },
                            xaxis: { color:i_color }
                        });
    
    var legends = $("#plot-charts .legendLabel");
    legends.each(function () {
        // fix the widths so they don't jump around
        $(this).css('width', $(this).width());
    });

    var updateLegendTimeout = null;
    var latestPosition = null;
    
    function updateLegend() {
        updateLegendTimeout = null;
        
        var pos = latestPosition;
        
        var axes = plot.getAxes();
        if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max ||
            pos.y < axes.yaxis.min || pos.y > axes.yaxis.max)
            return;

        var i, j, dataset = plot.getData();
        for (i = 0; i < dataset.length; ++i) {
            var series = dataset[i];

            // find the nearest points, x-wise
            for (j = 0; j < series.data.length; ++j)
                if (series.data[j][0] > pos.x)
                    break;
            
            // now interpolate
            var y, p1 = series.data[j - 1], p2 = series.data[j];
            if (p1 == null)
                y = p2[1];
            else if (p2 == null)
                y = p1[1];
            else
                y = p1[1] + (p2[1] - p1[1]) * (pos.x - p1[0]) / (p2[0] - p1[0]);	            

	    	console.log(legends);
            legends.eq(i).text(series.label.replace(/=.*/, "= " + y.toFixed(2)));
        }
    }
    
    $("#plot-charts").bind("plothover",  function (event, pos, item) {
        latestPosition = pos;
        if (!updateLegendTimeout)
            updateLegendTimeout = setTimeout(updateLegend, 50);
    });
};

initRealtimeChart = function() {
	// we use an inline data source in the example, usually data would
	// be fetched from a server
	var data = [], totalPoints = 300;
	function getRandomData() {
		if (data.length > 0)
			data = data.slice(1);

		// do a random walk
		while (data.length < totalPoints) {
			var prev = data.length > 0 ? data[data.length - 1] : 50;
			if (prev > 65) {
				var y = prev + Math.random() * 11 - 6;
			} else if (prev < 35) {
				var y = prev + Math.random() * 11 - 4;
			} else {
				var y = prev + Math.random() * 11 - 5;
			}
			if (y < 5)
				y = 15;
			if (y > 95)
				y = 85;
			data.push(y);
		}

		// zip the generated y values with the x values
		var res = [];
		for (var i = 0; i < data.length; ++i)
			res.push([i, data[i]])
		return res;
	}

	// setup control widget
	var updateInterval = 300;

	// setup plot
	var options = {
		colors: [ "rgb(46, 123, 184)" ],
		series: { 
			lines: { 
				lineWidth: 2, 
				fill: true,
				fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
				steps: false
			} 
		}, // drawing is faster without shadows
		grid: i_grid,
		yaxis: { min: 0, max: 100, color:i_color },
		xaxis: { show: false, color:i_color}
	};
	var plot = $.plot($("#realtime-chart"), [ getRandomData() ], options);

	function update() {
		plot.setData([ getRandomData() ]);
		// since the axes don't change, we don't need to call plot.setupGrid()
		plot.draw();
		
		setTimeout(update, updateInterval);
	}

	update();
};

initPieChart = function(id) {
	// data
	var data = [
		{ label: "Series1",  data: 20},
		{ label: "Series2",  data: 50},
		{ label: "Series3",  data: 30},
		{ label: "Series4",  data: 10},
		{ label: "Series5",  data: 15},
		{ label: "Series6",  data: 35}
	];
	
	$.plot($(id), data, {
		series: {
			pie: { 
				show: true
			}
		},
		grid: {
            hoverable: true,
            clickable: true
        }
	});
};

initDonutChart = function(id) {
	// data
	var data2 = [
		{ label: "Series1",  data: 10},
		{ label: "Series2",  data: 30},
		{ label: "Series3",  data: 40},
		{ label: "Series4",  data: 20},
		{ label: "Series5",  data: 50},
		{ label: "Series6",  data: 15}
	];
	
	$.plot($(id), data2, {
		series: {
			pie: { 
				innerRadius: 0.5,
				show: true
			}
		},
		grid: {
            hoverable: true,
            clickable: true
        }
	});
};


initTooltipChart = function(id) {		

	var revenue = [[1325376000000, 100], [1325462400000, 110], [1325548800000, 105], [1325635200000, 108], [1325721600000, 102], [1325808000000, 115], [1325894400000, 110], [1325980800000, 114], [1326067200000, 108], [1326153600000, 120], [1326240000000, 118], [1326326400000, 122], [1326412800000, 127], [1326499200000, 120], [1326672000000, 132], [1326758400000, 130], [1326844800000, 128], [1326931200000, 136], [1327017600000, 138], [1327104000000, 132], [1327190400000, 135], [1327276800000, 133], [1327363200000, 139], [1327449600000, 134], [1327536000000, 142], [1327622400000, 138], [1327708800000, 143], [1327795200000, 145], [1327881600000, 148], [1327968000000, 155]];
	var costs = [[1325376000000, 100], [1325462400000, 110], [1325548800000, 105], [1325635200000, 108], [1325721600000, 102], [1325808000000, 115], [1325894400000, 110], [1325980800000, 114], [1326067200000, 108], [1326153600000, 120], [1326240000000, 118], [1326326400000, 122], [1326412800000, 127], [1326499200000, 123], [1326672000000, 132], [1326758400000, 130], [1326844800000, 128], [1326931200000, 136], [1327017600000, 138], [1327104000000, 132], [1327190400000, 135], [1327276800000, 133], [1327363200000, 139], [1327449600000, 134], [1327536000000, 142], [1327622400000, 138], [1327708800000, 143], [1327795200000, 145], [1327881600000, 148], [1327968000000, 155]];
	
	var plot = $.plot($(id),
           [ { data: revenue, label: "revenue * 1000"}, { data: costs, label: "costs", yaxis: 2 } ], {
               series: {
                   lines: { show: true },
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, color:i_color, borderWidth:1 },
               xaxes: [ { mode: 'time', color:i_color } ],
               yaxes: [ { min: 0, color:i_color },{ 
            	   tickFormatter: euroFormatter,
            	   alignTicksWithAxis: 'right',
                   position: 'right'
               }]
             });
    
    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            color:'#fff',
            display: 'none',
            top: y - 30,
            left: x + 5,
            border: '2px solid #999',
            padding: '3px 8px',
            'background-color': '#444',
            opacity: 0.80,
            'box-shadow': '0 1px 3px rgba(0, 0, 0, 0.3)',
            'border-radius':'3px',
            'text-shadow':'0 1px 0 #000'
        }).appendTo("body").fadeIn(200);
    }	    

	function euroFormatter(v, axis) {
        return v.toFixed(axis.tickDecimals) +"€";
    }

    var previousPoint = null;
    $(id).bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;
                
                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);
                
                showTooltip(item.pageX, item.pageY,
                            item.series.label + " = " + y + " €");
            }
        }
        else {
            $("#tooltip").remove();
            previousPoint = null;            
        }
    });
};

initStackedGraph = function(id){
	
	var d1 = [];
    for (var i = 0; i <= 10; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 10; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);

    var d3 = [];
    for (var i = 0; i <= 10; i += 1)
        d3.push([i, parseInt(Math.random() * 30)]);

    var stack = true, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($(id), [ d1, d2, d3 ], {
            series: {
                stack: stack,
                bars: { show: bars, barWidth: 0.6 }
            }
        });
    }

    plotWithOptions();
};

initDashboard = function(){ 
	
	initLineChart();
	initTooltipChart('#tooltipchart');
	initRealtimeChart();
	initForms();
	$('#datatable_length').jqTransform();
	/* datagrid table */
	$('#datatable').dataTable({
		"sPaginationType": "full_numbers"
	});
	
	/* tabs init */
	$("ul.tab-list").idTabs();
	
	$('#accordion').accordion({ 
	    autoHeight: false 
	});
	
	/* autogrow textarea */
	$("#textarea-auto").autoGrow();
	
	/* WYSIWYG editor */
	$('#weditor').wysiwyg();
	
	/* alert boxes */
	$('.alert-msg a').click(function(){
		$(this).parent().fadeOut();
		return false;
	});
		
	$("#slider-simple").slider();

	$( "#slider-range-vert" ).slider({
		orientation: "vertical",
		range: true,
		values: [ 17, 67 ],
		slide: function( event, ui ) {
			$( "#amount-vert" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount-vert" ).val( "$" + $( "#slider-range-vert" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range-vert" ).slider( "values", 1 ) );	
	
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );
	
	$( "#slider-range-min" ).slider({
		range: "min",
		value: 37,
		min: 1,
		max: 700,
		slide: function( event, ui ) {
			$( "#amount-min" ).val( "$" + ui.value );
		}
	});
	$( "#amount-min" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
	
	$( "#eq > span" ).each(function() {
		// read initial values from markup and remove that
		var value = parseInt( $( this ).text(), 10 );
		$( this ).empty().slider({
			value: value,
			range: "min",
			animate: true,
			orientation: "vertical"
		});
	});
}

initElements = function() {		
	/* alert boxes */
	$('.alert-msg a').click(function(){
		$(this).parent().fadeOut();
		return false;
	});
	
	/* tabs init */
	$("ul.tab-list").idTabs();
	
	$('#accordion').accordion({ 
	    autoHeight: false 
	});
	
	/* datagrid table */
	$('#datatable').dataTable({
		"sPaginationType": "full_numbers"
	});
	
	initCalendar();
};

initData = function() {		
	/* datagrid table */		
	$('#datatable').dataTable({
		"sPaginationType": "full_numbers"
	});
};

/* init charts tab */
initCharts = function() {		
	/* charts */		
	//initLineChart();
	initTooltipChart('#charts-tooltipchart');
	initPieChart('#charts-pie');
	initDonutChart('#charts-donut');
	initStackedGraph('#stacked-graph');
	initRealtimeChart();
};

initFile = function() {		
	/* file manager */
	var elf = $('#elfinder').elfinder({
		// lang: 'ru',             // language (OPTIONAL)
		url : 'php/connector.php'  // connector URL (REQUIRED)
	}).elfinder('instance');
};

initForms = function() {		
	/* autogrow textarea */
	$(".i-textarea-auto").autoGrow();
	
	/* WYSIWYG editor */
	$('.i-editor').wysiwyg();
	
	$("form.i-validate").validate();
	$(".i-select").chosen();
	$(".i-datepicker").datepicker();
	
	$('.i-transform').jqTransform();
	
	$(".i-form-tooltip").tooltip({
		position: "center right",
		offset: [0, 5]
	});
};

initCalendar = function(){ 
	/*  calendar  */
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();
	
	$('#calendar').fullCalendar({
		editable: true,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
			{
				title: 'All Day Event',
				start: new Date(y, m, 1)
			},
			{
				title: 'Long Event',
				start: new Date(y, m, d-5),
				end: new Date(y, m, d-2),
				color: '#498835'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d-3, 16, 0),
				allDay: false
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: new Date(y, m, d+4, 16, 0),
				allDay: false
			},
			{
				title: 'Meeting',
				start: new Date(y, m, d, 10, 30),
				allDay: false
			},
			{
				title: 'Lunch',
				start: new Date(y, m, d, 12, 0),
				end: new Date(y, m, d, 14, 0),
				allDay: false
			},
			{
				title: 'Birthday Party',
				start: new Date(y, m, d+1, 19, 0),
				end: new Date(y, m, d+1, 22, 30),
				allDay: false,
				color: '#B90000'
			},
			{
				title: 'Click for Google',
				start: new Date(y, m, 28),
				end: new Date(y, m, 29),
				url: 'http://google.com/'
			}
		]
	});
};