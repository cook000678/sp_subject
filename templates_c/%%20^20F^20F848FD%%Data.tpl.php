<?php /* Smarty version 2.6.30, created on 2018-10-05 06:06:02
         compiled from Data/Data.tpl */ ?>
<html>
  <head>
	<link rel="stylesheet" href="../../templates/css/A_Building.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
			crossorigin="anonymous"
			integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
	</script>
    <script type="text/javascript">
	var totalPoints = 50;
	var updateInterval = 1000;
	var aadata = [];
	
	
	$(document).ready(function () {
		//初始化資料
		initData();
		<!-- console.log(aadata); -->
		google.charts.load('current', {'packages':['corechart']});
		//呼叫drawChart 開始第一次繪製
		google.charts.setOnLoadCallback(drawChart);
	});
	//起始表格
	function drawChart() {
		var data = google.visualization.arrayToDataTable(aadata);

		var options = {
		  title: 'Class Degree',
		  hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
		  vAxis: {minValue: 0}
		};

		var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
		chart.draw(data, options);

		<!-- console.log("0"); -->

		setTimeout(GetData, updateInterval);
}
	  
	//初始化表格
	function initData() {
		var titledata = ['Time', 'Degree'];
		aadata.push(titledata);
		for (var i = 0; i < totalPoints; i++) {
			var temp = ["", 0];

			aadata.push(temp);
			
		}
	}
	
	
	//利用 jQuery.ajax()來取回資料
	function GetData() {
		$.ajaxSetup({ cache: false });

		$.ajax({
			url: "../Data/Plot.php?mod=json",
			dataType: 'json',
			success: function(result){
						update(result);
						},
			error: function () {
				setTimeout(GetData, updateInterval);
			}
		});
	}

	//_data 是 ajax的result
	function update(_data) {
		//
		aadata.splice(1,1);
		
		var temp = [_data.time, _data.degree];
		aadata.push(temp);
		
		<!-- console.log(aadata); -->
		
		var data = google.visualization.arrayToDataTable(aadata);
		
        var options = {
          title: 'Class Degree',
          hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		
		setTimeout(GetData, updateInterval);
	}
	  
	
    </script>
  </head>
  <body>
	<div class="data">
		<div id="chart_div" style="width: 100%; height: 500px;"></div>
	</div>
  </body>
</html>