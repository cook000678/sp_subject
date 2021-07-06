<?php /* Smarty version 2.6.30, created on 2018-10-08 06:23:07
         compiled from Analysis/test.tpl */ ?>
<!DOCTYPE html>  
<html>

<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../templates/tpl/index/Project_Left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta charset="utf-8">
<title>智慧節能系統</title>
<link rel="stylesheet" href="../../templates/css/Project_RWD.css">
<link rel="stylesheet" href="../../templates/css/Analysis/Analysis.css">  

<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
<script src="../../templates/js/work.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>
<body>

<!-- -------------------------- -->
<div class="Right_Box">
	<div class="Right_Top">
		<h2>電量分析</h2>
	</div>
	<div class="contect_bottom">
			<div class="one">
				<div class="one_1">
					<tr>
						<th>大樓</th>
						<th>
							<select id="serch_Building" class="serch_Building" >
								<option type="text" style="font-size:15px" value="">     </option>
								<option type="text" style="font-size:15px" value="綜合大樓">綜合大樓</option>
								<option type="text" style="font-size:15px" value="幼兒園">幼兒園</option>
								<option type="text" style="font-size:15px" value="電子工程館">電子工程館</option>
								<option type="text" style="font-size:15px" value="土木工程館">土木工程館</option>
								<option type="text" style="font-size:15px" value="妝彩系館">妝彩系館</option>
								<option type="text" style="font-size:15px" value="幼兒保育館">幼兒保育館</option>
							</select>
						</th>
						<th>從</th>
						<th>
							<input type="text" class="datepicker" style="font-size:13px" id="datepicker">
						</th>
						<th>到</th>
						<th>
							<input type="text" class="time" style="font-size:13px" id="time">
						</th>
						<th>
							<input type="button" style="font-size:13px" onclick="search()" class="A_Search" value="搜尋">
						</th>
					</tr>
				</div>
				<div id="section12" class="three">
				
				</div>
			</div>
		<!-- </div> -->
	</div>
</div>
	


<!-- -------------------------- --> 
	<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
	<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script>
		$(function() {
		$( "#datepicker" ).datepicker({
		dateFormat: 'yy-mm-dd'
		});
		});
	</script>
	<script>
	$(function() {
	$( "#time" ).datepicker({
	dateFormat: 'yy-mm-dd'
	});
	});
	</script>
</body>
</html>