<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../../templates/css/main.css">
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<script src="../../templates/js/index.js"></script>
<head>
<body>
	<section class="color_range">
		<div>
			<h1>please input the word</h1>
			<input type="text" id="word">
			<input type="button" onclick="getkeyword()" value="word">
			<p id="enterword"></p>
			
			<input type="text" id="123">
			<input type="button" onclick="getkeyword11()" value="傳">
			
		</div>
		<ul>
			<h1>color</h1>
			<li id="first_color">red</li>
			<li>blue</li>
			<li id="three_color">purple</li>
		</ul>
		<div>
			<input type="button" id="center" onclick="addCssInHtml()" value="置中">
			
			<input type="button" id="center11" onclick="kkk()" value="移除置中">
		</div>
	</section>
</body>
</html>