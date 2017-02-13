google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBarColors);
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

      var chart = new google.visualization.LineChart(document.getElementById('contenido2'));

      chart.draw(data, options);
    }

    

function drawBarColors() {
      var data = google.visualization.arrayToDataTable([
        ['Servidores', 'Disco Disponible', { role: 'style' }],
        ['Servidor1', 8175000, 'blue'],
        ['Servidor2', 3792000, 'blue'],
        ['Servidor3', 2695000, 'blue'],
        ['Servidor4', 2099000, 'blue'],
        ['Servidor5', 1526000, 'blue']
      ]);

      var options = {        
        hAxis: {
          title: 'Espacio disponile',          
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
      var chart = new google.visualization.PieChart(document.getElementById('contenido3'));
      chart.draw(data, options);
    }
    