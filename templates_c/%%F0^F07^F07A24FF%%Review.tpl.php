<?php /* Smarty version 2.6.30, created on 2018-10-08 09:45:04
         compiled from Review/Review.tpl */ ?>
<!DOCTYPE html>	
<html>
<html lang="en">
<head>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../templates/tpl/index/Project_Left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<meta charset="utf-8">
	<title>智慧節能系統</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
			crossorigin="anonymous"
			integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
	</script>
	<link rel="stylesheet" href="../../templates/css/Review/Review.css"> 
	<!-- <link rel="stylesheet" href="../../templates/css/reset.css"> -->
	<script src="../../templates/js/Project.js"></script>
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	
<!-- ---------------------------------------------------- -->
<style>
	.focus {color: red;}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	
	<script>
	$(document).ready(function(){
		$('#test123 input').click(function(){
			if ($(this).hasClass('focus')) {
				return true;
			} else {
				$('#test123 input').removeClass('focus');
				$(this).addClass('focus');
			}
		});
	});
	</script>
<!-- ---------------------------------------------------- -->
	
</head>
<body>
<div class="Right_Box">
	<div class="Right_Top">
		<h2>審核</h2>
	</div>
	<div class="Audit_form">
		<div class="Page">
			<div class="Page_top" id="test123">
				<input type="button" class="button1" onclick="SearchReview('a')" value="未審核">
				<input type="button" class="button2" onclick="SearchReview('b')" value="通過">
				<input type="button" class="button3" onclick="SearchReview('c')" value="不通過">
			</div>
			<div class="down_line">
				<div class="title">
					<table class="Title_Table" border="0" >	
						<tr>
							<td style="width:29%" border="0">
								日期
							</td>
							<td style="width:4%" border="0">
								學號
							</td>
							<td style="width:18%">
								名字
							</td>
							<td style="width:5%">
								地點
							</td>
							<td style="width:28%">
								原因
							</td>
							<td style="width:33%">
								狀態
							</td>
							
						</tr>
					</table>
				</div>
				<div id="sectionRe">
					<div class="Page_down">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>
</body>
</html>