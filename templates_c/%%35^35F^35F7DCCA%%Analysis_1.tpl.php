<?php /* Smarty version 2.6.30, created on 2018-10-02 03:19:48
         compiled from index/Analysis_1.tpl */ ?>
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
		
		<?php $_from = $this->_tpl_vars['Class_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Class']):
?>
		['<?php echo $this->_tpl_vars['Class']['Building_name']; ?>
  ' + '<?php echo $this->_tpl_vars['Class']['Classroom_name']; ?>
    '+ '<?php echo $this->_tpl_vars['Class']['Data_time']; ?>
',<?php echo $this->_tpl_vars['Class']['Degree']; ?>
],
		<?php endforeach; endif; unset($_from); ?>
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
