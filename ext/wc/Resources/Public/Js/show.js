$(function() {
	var data = $('#graph').next('.hide').text();
	$('#graph').highcharts('StockChart', {
		rangeSelector : {
			selected : 1
		},

		title : {
			text : 'Test Graph'
		},
			
		series : [{
			name : 'Test Graph',
			data : data,
			marker : {
				enabled : true,
				radius : 3
			},
			shadow : true,
			tooltip : {
				valueDecimals : 2
			}
		}]
	});
});