<!-- jQuery -->
<script src="<?= templates() ?>plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?= templates() ?>plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>

	$.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="<?= templates() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="<?= templates() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= templates() ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= templates() ?>dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= templates() ?>dist/js/demo.js"></script>

<!-- FLOT CHARTS -->
<script src="<?= templates() ?>plugins/flot/jquery.flot.js"></script>

<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?= templates() ?>plugins/flot-old/jquery.flot.resize.min.js"></script>

<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?= templates() ?>plugins/flot-old/jquery.flot.pie.min.js"></script>

<!-- ChartJS -->
<script src="<?= templates() ?>plugins/chart.js/Chart.min.js"></script>

<!-- Summernote -->
<script src="<?= templates() ?>plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?= templates() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- page script -->
<script type="text/javascript">
	
	$(function () {

		// DataTable
	    $("#kuburan").DataTable({
	    	"responsive": true,
	    	"autoWidth": false,
	    });

		$("#jenazah").DataTable({
	    	"responsive": true,
	    	"autoWidth": false,
	    });

		$("#tnh").DataTable({
	    	"responsive": true,
	    	"autoWidth": false,
	    });

	    // Summernote
    	$('.textarea').summernote();

	    //-------------
	    //- DONUT CHART -
	    //-------------
	    // Get context with jQuery - using jQuery's .get() method.
	    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
	    var donutData = {
	    	labels: [
	        	'Chrome', 
	          	'IE',
	          	'FireFox',   	
	        	'Safari', 
	          	'Opera', 
	          	'Navigator', 
	      	],
	      	datasets: [{
	          	data: [700,500,400,600,300,100],
	          	backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
	        }]
	    }
	    var donutOptions     = {
	     	maintainAspectRatio : false,
	      	responsive : true,
	    }
	    //Create pie or douhnut chart
	    // You can switch between pie and douhnut using the method below.
	    var donutChart = new Chart(donutChartCanvas, {
	    	type: 'doughnut',
	    	data: donutData,
	    	options: donutOptions      
	    });

	   /*
     	* DONUT CHART
     	* -----------
     	*/

    	var donutData = [
    		{
	        	label: 'Series1',
	        	data : 10,
	        	color: '#f56954'
	      	},
	    	{
	        	label: 'Series2',
	        	data : 40,
	        	color: '#00a65a'
	      	}, 
	      	{
	        	label: 'Series3',
	        	data : 10,
	        	color: '#f39c12'
	      	},
	      	{
	        	label: 'Series4',
	        	data : 40,
	        	color: '#00c0ef'
	      	}
    	]
    	$.plot('#donut-chart', donutData, {
      		series: {
        		pie: {
         			show       : true,
         	 		radius     : 1,
          			innerRadius: 0.5,
          			label      : {
            			show     : true,
			            radius   : 2 / 3,
			            formatter: labelFormatter,
			            threshold: 0.1
          			}
        		}
      		},
      		legend: {
        		show: false
      		}
    	});
	    /*
	     * END DONUT CHART
	     * ---------------
	     */
	});

	/*
	 * Custom Label formatter
	 * ----------------------
	 */
  	
  	function labelFormatter(label, series) {
    	return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    		+ label
    		+ '<br>'
    		+ Math.round(series.percent) + '%</div>'
  	};
</script>

