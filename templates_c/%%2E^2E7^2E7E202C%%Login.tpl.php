<?php /* Smarty version 2.6.30, created on 2018-10-02 03:16:46
         compiled from index/Login.tpl */ ?>
<!DOCTYPE html>	 
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>智慧節能系統-登入</title>
	<link rel="stylesheet" href="../../templates/css/Login.css"> 
	<link rel="stylesheet" href="../../templates/css/reset.css"> 
</head>
<body>
<form action="Login.php" method="post">
	<div class="body">
		<div class="login">
			<div class="title">
				<a>用戶登入</a>
			</div>
			<div class="login-header">
				<img src="../../img/1.png">
			</div>
			<div class="login-body">
				<form name="PassValue" method="POST" action="Login.php">
					<div class="account">
						<input class="form-control" type="text" name="username" id="username"  placeholder="Username">
					</div>
					<div class="account">
						<input class="form-control" type="password" name="passwd" id="passwd" placeholder="Password">
					</div>
					
						<input type="submit" class="submit" name="submit" value="Login in">
					
				 </form>
			</div>
		</div>
		
	</div>
</body>
</html>