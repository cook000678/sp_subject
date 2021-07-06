<?php /* Smarty version 2.6.30, created on 2018-10-08 03:52:11
         compiled from Project/Project1.tpl */ ?>
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
	<link rel="stylesheet" href="../../templates/css/Project/Project1.css">
	<link rel="stylesheet" href="../../templates/css/Project_RWD.css">
	<script src="../../templates/js/Project.js"></script>
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
</head>
<body>
	<div class="Right_Box">
		<div class="Right_Top">
			<h2>即時監控</h2>
		</div>
		<div class="Right_Down">
			<div class="Building">
				<img src="../../img/map.jpg" usemap="#ImageMap">
				<map name="ImageMap">
					

					<area shape="polygon" coords="200,250,265,250,265,253,305,245,305,240,365,235,364,215,338,218,338,210,295,218,293,212,263,214,263,218,228,223,228,228,198,228" href="javascript:Search_A_Building()"> <!--3-->
		
					<area shape="polygon" coords="180,224,205,220,197,182,183,183" href="javascript:Search_B_Building()"> <!--5-->
					
					<area shape="polygon" coords="210,225,220,225,220,210,228,210,228,195,215,195,215,180,200,180" href="javascript:Search_C_Building()"> <!--6-->
					
					<area shape="polygon" coords="190,180,225,175,220,155,188,156" href="javascript:Search_D_Building()"> <!--7 -->
					
					<area shape="polygon" coords="325,210,348,210,345,178,325,180" href="javascript:Search_E_Building()"> <!--8-->

					<area shape="polygon" coords="289,169,368,155,368,140,285,150" href="javascript:Search_F_Building()"> <!--22 -->
				</map> 
			</div>
			<div class="Class_Room">
				
			</div>
		</div>
	</div>

</body>
</html>