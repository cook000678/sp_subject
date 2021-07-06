<?php /* Smarty version 2.6.30, created on 2018-10-02 04:00:32
         compiled from index/Review.tpl */ ?>
<!DOCTYPE html>	
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>智慧節能系統</title>
	
	<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
			crossorigin="anonymous"
			integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
	</script>
	<link rel="stylesheet" href="../../templates/css/Project.css"> 
	<link rel="stylesheet" href="../../templates/css/reset.css">
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
<div class="peripheral">
	<div class="Blank-Left">
	</div>
	<div class="left-container">
		<div class="left">
			<a href="../../php/index/Project.php" class="logo">
				<span class="logo-box">
					<img src="../../img/1.png"> 
				</span>
			</a>
			<div class="collapse">
				<ul class="nav">
					<li class="menu-title">功能</li>
					<li class="menu">
						<a class="features" href="../../php/index/video.php">首頁</a>
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
<!-- -------------------------------------------------------->
	<div class="right-container">
	<div class="top">
		<div></div>
	</div>
		<div class="right">
			<div id="section">
				<div class="contect">
					<div class="contect-top">
						<div class="title-left">
							<h2>審核</h2>
						</div>
						
					</div>
					<div class="contect-bottom">
						<div class="row">
							<div class="Audit_form">
								<div class="Page">
									<div class="Page_top" id="test123">
										<input type="button" class="button1" onclick="SearchReview('a')" value="未審核">
										<input type="button" class="button2" onclick="SearchReview('b')" value="通過">
										<input type="button" class="button3" onclick="SearchReview('c')" value="不通過">
									</div>
									<div class="down_line">
										<div class="title">
											<table class="Title_Table" >	
												<tr>
													<td style="width:29%">
														日期
													</td>
													<td style="width:4%">
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
			</div>
		</div>
	</div>
</div>
</body>
</html>