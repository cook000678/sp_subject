<div class="three">
<html>
  <head>
  	<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		['dasdad', 'qweqe'],
		
		<{foreach item=Class from=$Class_array}>
		['<{$Class.Building_name}>  ' + '<{$Class.Classroom_name}>    '+ '<{$Class.Data_time}>',<{$Class.Degree}>],
		<{/foreach}>
        ]);


        var options = {
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
</div>

