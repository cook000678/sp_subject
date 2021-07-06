<?php /* Smarty version 2.6.30, created on 2018-10-03 07:35:31
         compiled from index/Analysis.tpl */ ?>
<!DOCTYPE html>  
<html>

<head>
<meta charset="utf-8">
<title>智慧節能系統</title>
<link rel="stylesheet" href="../../templates/css/Project_RWD.css">
<link rel="stylesheet" href="../../templates/css/Project_history.css">  
<link rel="stylesheet" href="../../templates/css/reset.css">

<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
<script src="../../templates/js/work.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>
<body>
	<div class="peripheral">
	<div class="Blank-Left">
	</div>
		<div class="left-container">
			<div class="left">
				<a href="#" class="logo">
					<span class="logo-box">
						<img src="../../img/1.png"> 
					</span>
				</a>
			<div class="collapse">
				<ul class="nav">
					<li class="menu-title">功能</li>
					<li class="menu">
						<a class="features" href="../../php/index/video.php">首頁</a></a>
					</li>
					<li class="menu">
						<a class="features" href="../../php/index/Project.php">即時監控</a>
					</li>
					<li class="menu">
						<a class="features" href="../../php/index/Analysis.php">電量分析</a>
					</li>
					<li class="menu">
						<a class="features" href="../../php/index/history.php">歷史查詢</a>
					</li>
					<li class="menu">
						<a class="features" href="../../php/index/Review.php">審核</a>
					</li>
					<div class="Logout-word">
						<a href="Admin.php?logout=true">登出系統</a>
					</div>
				</ul>
				
			</div>
			</div>
		</div>
<!-- -------------------------- -->
		<div class="right-container">
			<div class="top">
				<div></div>
			</div>
			<div class="right">
			<div id="section">
				<div class="contect">
					<div class="contect-top">
						<div class="Logout">	
						</div>
						<div class="title-left">
							<h2>電量分析</h2>
						</div>	
					</div>
				</div>
					<div class="contect-bottom">
						<!-- <div class="row"> -->
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
			</div>
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