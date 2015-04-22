/* ---------- functions used to demonsatration ---------- */

function randNum(){
	return ((Math.floor( Math.random()* (1+40-20) ) ) + 20)* 1200;
}

function randNum2(){
	return ((Math.floor( Math.random()* (1+40-20) ) ) + 20) * 500;
}

function randNum3(){
	return ((Math.floor( Math.random()* (1+40-20) ) ) + 20) * 300;
}

function randNum4(){
	return ((Math.floor( Math.random()* (1+40-20) ) ) + 20) * 100;
}

function randNum5(){
	return ((Math.floor( Math.random()* (1+40-20) ) ) + 1) * 1;
}

$(document).ready(function(){
		
	/* ---------- DateRangepicker for Bootstrap ---------- */
	$('#daterange').daterangepicker();
	
	/* ---------- Placeholder Fix for IE ---------- */
	$('input, textarea').placeholder();

	/* ---------- Auto Height texarea ---------- */
	$('textarea').autosize();
	
	/*------- Easy Pie Chart Init -------*/
    $('.piechart').easyPieChart({
        barColor: "#fff",
        trackColor: 'rgba(255,255,255,.2)',
        scaleColor: false,
        lineCap: 'butt',
        rotate: -90,
        lineWidth: 4,
		size: 40,
        animate: 1000,
        onStep: function(value) {
            this.$el.find('span').text(~~value);
        }
    });

	/* ---------- Tabs ---------- */
	$('#mainCharts a:last').tab('show');
	$('#mainCharts a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	
	$('#recent a:first').tab('show');
	$('#recent a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
		
	/* ---------- Vertical Chart ---------- */
	if($('.verticalChart')) {
		
		$('.singleBar').each(function(){
			
			var percent = $(this).find('.value span').html();
			
			$(this).find('.value').animate({height:percent}, 2000, function() {
			    
				//$(this).find('span').fadeIn();
			 
			});
			
		});
		
	}
	
	/* ---------- Datable ---------- */
	$('.datatable').dataTable({
		"sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-12'i><'col-lg-12 center'p>>",
		"bPaginate": false,
		"bFilter": false,
		"bLengthChange": false,
		"bInfo": false
	});
	
	/* ---------- Progress Bars ---------- */
	$(".simpleProgress").each(function(){
		
		var value = parseInt($(this).html());
				
		$(this).progressbar({
			value: value
		});
		
	});

	
	Morris.Donut({
		element: 'hero-donut',
		data: [
			{label: 'Chrome', value: 35 },
	      	{label: 'Firefox', value: 20 },
	      	{label: 'Safari', value: 15 },
	      	{label: 'IE', value: 10 },
			{label: 'Other', value: 20 }
	    ],
		colors: ["#36A9E1", "#bdea74", "#67c2ef", "#fabb3d", "#ff5454"],
		formatter: function (y) { return y + "%" }
	});
	
	var d1 = [[0,0],[1,0],[2,1],[3,2],[4,21],[5,9],[6,12],[7,10],[8,31],[9,13],[10,65],[11,10],[12,12],[13,6],[14,4],[15,3],[16,0]];
	var d2 = [[0,0],[1,0],[2,1],[3,2],[4,7],[5,5],[6,6],[7,8],[8,24],[9,7],[10,12],[11,5],[12,6],[13,3],[14,2],[15,2],[16,0]];
	var d3 = [[0,0],[1,0],[2,1],[3,0],[4,2],[5,0],[6,1],[7,0],[8,2],[9,3],[10,0],[11,2],[12,3],[13,2],[14,1],[15,0],[16,0]];
	  $("#flot-main").length && $.plot($("#flot-main"), [
	          d1, d2, d3
	      ],
	      {
	        series: {
	            lines: {
	                show: false
	            },
	            splines: {
	              show: true,
	              tension: 0.4,
	              lineWidth: 1,
	              fill: 0.4
	            },
	            points: {
	                radius: 0,
	                show: true
	            },
	            shadowSize: 2
	        },
	        grid: {
	            hoverable: true,
	            clickable: true,
	            tickColor: "#e1e6ef",
	            borderWidth: 1,
	            color: '#e1e6ef'
	        },
	        colors: ["#67c2ef", "#fabb3d", "#bdea74"],
	        xaxis:{
	        },
	        yaxis: {
	          ticks: 4
	        },
	        tooltip: true,
	        tooltipOpts: {
	          content: "chart: %x.1 is %y.4",
	          defaultTheme: false,
	          shifts: {
	            x: 0,
	            y: 20
	          }
	        }
	      }
	  );
	
});