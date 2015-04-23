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

    function getBrowsers()
    {
        var data;
        $.get('data/browsers', function(resp){

            Morris.Donut({
                element: 'hero-donut',
                data: resp,
                colors: ["#36A9E1", "#bdea74", "#67c2ef", "#fabb3d", "#ff5454"],
                formatter: function (y) { return y + "%" }
            });
        });
    };

    getBrowsers();



    function getVisits()
    {
        $.get('data/views', function(resp) {
            $("#flot-main").length && $.plot($("#flot-main"), [
                    resp
                ],
                {
                    series: {
                        lines: {
                            show: true
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
                    colors: ["#67c2ef"],
                    xaxis:{
                        ticks: 7
                    },
                    yaxis: {
                        ticks: 4
                    }
                }
            );
        });
    }

    getVisits();
	
});