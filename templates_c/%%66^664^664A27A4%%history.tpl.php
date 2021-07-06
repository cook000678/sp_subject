<?php /* Smarty version 2.6.30, created on 2018-10-08 09:42:52
         compiled from History/history.tpl */ ?>
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
	<link rel="stylesheet" href="../../templates/css/History/History.css">
	<link rel="stylesheet" href="../../templates/css/Project_RWD.css">	
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<script src="../../templates/js/work.js"></script>
</head>
<body>

<!-- -------------------------- -->
	<div class="Right_Box">
		<div class="Right_Top">
		<h2>歷史查詢<h2>
		</div>
		<div class="one">
			<div class="one_1">
				<tr>
					<th>大樓</th>
					<th>
					<select id="serch_Building" class="serch_Building">
						<option type="text" style="font-size:15px" value="綜合大樓">綜合大樓</option>
						<option type="text" style="font-size:15px" value="幼兒園">幼兒園</option>
						<option type="text" style="font-size:15px" value="電子工程館">電子工程館</option>
						<option type="text" style="font-size:15px" value="土木工程館">土木工程館</option>
						<option type="text" style="font-size:15px" value="妝彩系館">妝彩系館</option>
						<option type="text" style="font-size:15px" value="幼兒保育館">幼兒保育館</option>
					</select>
					</th>
					<th>教室</th>
					<th>
						<select class="aqw">
							<option type="text" style="font-size:15px" id="serch_class">0101</option>
							<option type="text" style="font-size:15px" id="serch_class">0102</option>
							<option type="text" style="font-size:15px" id="serch_class">0103</option>
							<option type="text" style="font-size:15px" id="serch_class">0104</option>
							<option type="text" style="font-size:15px" id="serch_class">0105</option>
							<option type="text" style="font-size:15px" id="serch_class">0201</option>
							<option type="text" style="font-size:15px" id="serch_class">0202</option>
							<option type="text" style="font-size:15px" id="serch_class">0203</option>
							<option type="text" style="font-size:15px" id="serch_class">0204</option>
							<option type="text" style="font-size:15px" id="serch_class">0205</option>
							<option type="text" style="font-size:15px" id="serch_class">0301</option>
							<option type="text" style="font-size:15px" id="serch_class">0302</option>
							<option type="text" style="font-size:15px" id="serch_class">0303</option>
							<option type="text" style="font-size:15px" id="serch_class">0304</option>
							<option type="text" style="font-size:15px" id="serch_class">0305</option>
							<option type="text" style="font-size:15px" id="serch_class">0401</option>
							<option type="text" style="font-size:15px" id="serch_class">0402</option>
							<option type="text" style="font-size:15px" id="serch_class">0403</option>
							<option type="text" style="font-size:15px" id="serch_class">0404</option>
							<option type="text" style="font-size:15px" id="serch_class">0405</option>
						</select>
					</th>
			<th>從</th>
			<th>
				<input type="text" style="font-size:13px" id="datepicker" class="datepicker">
			</th>
			<th>到</th>
			<th>
				<input type="text" style="font-size:13px" id="time" class="asd">
			</th>
			<th>
				<input type="button" style="font-size:13px" onclick="searchScore()" class="Search_Degree" value="搜尋">
			</th>
			</tr>
		</div>
		<div class="two">
			<div class="two_11" >	
				大樓
			</div>
			<div class="two_1"></div>
			<div class="two_11">
				教室           
			</div>	
			<div class="two_1"></div>		
			<div  class="two_11">
				數據時間             
			</div>	
			<div class="two_1"></div>
			<div class="two_11">
				數據
			</div>
		</div>	
<!-- -------------------------- -->	
		<div id="section12" class="three">
			<div  id="Building_name">	
			</div>	
			<div  id="Classroom_name">
			</div>	
			<div  id="Data_time">
			</div>	
			<div  id="Degree">
			</div>
		</div>
	</div>	
</div>
	



<!-- -------------------------- -->	

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
	</div>
</body>
</html>