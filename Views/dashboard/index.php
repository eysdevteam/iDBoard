<?php 
	use Models\Dashboard;
	$dashboard = new Dashboard();
	$result = $dashboard->dashBoardSupIzq();
	$result2 = $dashboard->dashboardSupDe();

	foreach($result as $key=>$value) {
		$servidores[] = $value["Nombre"];
		$valores[] = $value["Valor"];
	}
	foreach($result2 as $key2=>$value2) {
		$servidores2[] = $value2["Nombre"];
		$valores2[] = $value2["Valor"];
	}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | eys Soluciones Empresariales IT</title>
	<!--Load the AJAX API-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body style = "overflow: hidden">
		<div class="row">
		   	<div class="col-lg-6">
		     	<div class="panel panel-default">
		        	<div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		            	<div id="contenido" style="height: 250px; width: 100%;"></div>
		        	</div>
		        </div>
		    </div>
		    <div class="col-lg-6">
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido2" style="height: 250px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>		    
		</div>		  

		<div class="row">
		   	<div class="col-lg-4">
		     	<div class="panel panel-default">
		        	<div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		            	<div id="contenido3" style="height: 200px; width: 100%;"></div>
		        	</div>
		        </div>
		    </div>
		    <div class="col-lg-4">
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido4" style="height: 200px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-lg-4">
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido5" style="height: 200px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>
		</div>		  

		<!-- <script type="text/javascript" src="<?php //echo URL; ?>library/line.js"></script> -->
		
		<script type="text/javascript">
			google.charts.load('current', {packages: ['corechart', 'line']});
			google.charts.setOnLoadCallback(drawBasic);
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawSupIzq);
			google.charts.setOnLoadCallback(drawSupDe);
			google.charts.load("current", {packages:["corechart"]});
			google.charts.setOnLoadCallback(drawChart);

			function drawBasic() {    
			      
			      var data = google.visualization.arrayToDataTable([
			          ['Year', 'Sales', 'Expenses'],
			          ['2004',  1000,      400],
			          ['2005',  1170,      460],
			          ['2006',  660,       1120],
			          ['2007',  1030,      540]
			        ]);

			      var options = {
			        hAxis: {
			          title: 'Time'
			        },
			        vAxis: {
			          title: 'Popularity'
			        }

			      };

			      var chart = new google.visualization.LineChart(document.getElementById('contenido3'));

			      chart.draw(data, options);
			    }   

			function drawSupDe() {
			      var data = google.visualization.arrayToDataTable([
			        ['Servidores', '<?php echo $value["Servicio"]; ?>', { role: 'style' }],
			        ['<?php echo $servidores[0]; ?>', <?php echo $valores[0]; ?>, 'blue'],
			        ['<?php echo $servidores[1]; ?>', <?php echo $valores[1]; ?>, 'blue']			        
			      ]);

			      var options = {        
			        hAxis: {
			          title: '<?php echo $value["Servicio"]; ?>',          
			          minValue: 0
			        },
			        vAxis: {

			        }
			        
			      };
			      var chart = new google.visualization.BarChart(document.getElementById('contenido2'));
			      chart.draw(data, options);
			   	}

			function drawSupIzq() {
			      var data = google.visualization.arrayToDataTable([
			        ['Servidores', '<?php echo $value2["Servicio"]; ?>', { role: 'style' }],
			        ['<?php echo $servidores2[0]; ?>', <?php echo $valores2[0]; ?>, 'blue'],
			        ['<?php echo $servidores2[1]; ?>', <?php echo $valores2[1]; ?>, 'blue']			        
			      ]);

			      var options = {        
			        hAxis: {
			          title: '<?php echo $value2["Servicio"]; ?>',          
			          minValue: 0
			        },
			        vAxis: {

			        }
			        
			      };
			      var chart = new google.visualization.BarChart(document.getElementById('contenido'));
			      chart.draw(data, options);
			    } 
			
			function drawChart() {
			      var data = google.visualization.arrayToDataTable([
			        ['Task', 'Hours per Day'],
			        ['Work',     11],
			        ['Eat',      2],
			        ['Commute',  2],
			        ['Watch TV', 2],
			        ['Sleep',    7]
			      ]);

			      var options = {
			        title: 'My Daily Activities',
			        pieHole: 0.4,
			      };
			      var chart = new google.visualization.PieChart(document.getElementById('contenido4'));
			      chart.draw(data, options);
			    }
	    </script>   
	
</body>
</html>