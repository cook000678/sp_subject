<?php

 	
//連接專案系統資料庫	
	function Connect()
	{	
		$SelectDatabase = "mysql:host=localhost;dbname=user";
		$ConnectDatabase = new PDO($SelectDatabase,'haohao','hao860211',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")) or die("連結資料庫失敗!</br>");
		return $ConnectDatabase;
	}
	