<?php /* Smarty version 2.6.30, created on 2018-10-03 03:03:26
         compiled from index/Student.tpl */ ?>
<!DOCTYPE html>	
<html>

<head>
	<meta charset="utf-8">
	<title>智慧節能系統</title>
	<link rel="stylesheet" href="../../templates/css/Project_Student.css"> 
	<script src="../../templates/js/test.js"></script>
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	
	

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
						<div class="Logout">
							
						</div>
						<div class="title-left">
							<h2>借用教室</h2>
						</div>
						
					</div>
					<div class="contect-bottom">
						<div class="row">
							<div class="curriculum">
								<div class="curriculum_top">
									<div class="Menu">
									<tr>
										<div class="Building_Name">
											<select id="Building_name">
												<option type="text" style="font-size:15px" value="綜合大樓">綜合大樓</option>
												<option type="text" style="font-size:15px" value="幼兒園">幼兒園</option>
												<option type="text" style="font-size:15px" value="電子工程館">電子工程館</option>
												<option type="text" style="font-size:15px" value="土木工程館">土木工程館</option>
												<option type="text" style="font-size:15px" value="妝彩系館">妝彩系館</option>
												<option type="text" style="font-size:15px" value="幼兒保育館">幼兒保育館</option>
											</select>
										</div>
										<div class="classroom"><!--教室-->
											<select id="Classroom_name">
												<option type="text" style="font-size:15px" value="0101">0101</option>
												<option type="text" style="font-size:15px" value="0102">0102</option>
												<option type="text" style="font-size:15px" value="0103">0103</option>
												<option type="text" style="font-size:15px" value="0104">0104</option>
											</select>
										</div>
										<div class="button_search">
											<input type="button" onclick="Search_date_building()" value="搜尋">
										</div>
									</tr>
									</div>
									<div class="week">
										<table width="780" height="80" >
											<tr class="test">
												<td class="title_week">節次<br>/<br>星期</td>
												<td class="title_week">時間</td>
												<td class="title_week">一</td>
												<td class="title_week">二</td>
												<td class="title_week">三</td>
												<td class="title_week">四</td>
												<td class="title_week">五</td>
											</tr>
										</table>
									</div>
									<div class="table_left">
										<table>
											<tr>
												<td class="session17">1</td>
												<td class="time">
													&nbsp;8:10
													<br>
													|
													<br>
													9:00
												</td>
											</tr>
											<tr>
												<td class="session17">2</td>
												<td class="time">
													&nbsp;9:10
													<br>
													|
													<br>
													10:00
												</td>
											</tr>
											<tr>
												<td class="session17">3</td>
												<td class="time">
													&nbsp;10:10
													<br>
													|
													<br>
													11:00
												</td>
											</tr>
											<tr>
												<td class="session17">4</td>
												<td class="time">
													&nbsp;11:10
													<br>
													|
													<br>
													12:00
												</td>
											</tr>
											<tr>
												<td class="session17">5</td>
												<td class="time">
													&nbsp;12:10
													<br>
													|
													<br>
													13:00
												</td>
											</tr>
											<tr>
												<td class="session17">6</td>
												<td class="time">
													&nbsp;13:10
													<br>
													|
													<br>
													14:00
												</td>
											</tr>
											<tr>
												<td class="session17">7</td>
												<td class="time">
													&nbsp;14:10
													<br>
													|
													<br>
													15:00
												</td>
											</tr>
											<tr>
												<td class="session17">8</td>
												<td class="time">
													&nbsp;15:10
													<br>
													|
													<br>
													16:00
												</td>
											</tr>
											<tr>
												<td class="session17">9</td>
												<td class="time">
													&nbsp;16:10
													<br>
													|
													<br>
													17:00
												</td>
											</tr>
										</table>
									</div>
									<div id="section_S">
										<div class="table_right">
											
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
<!-- --------------------------------------------------------------- -->
</body>
</html>