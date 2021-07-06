<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";
session_start();
if (isset($_SESSION["loginMember"]) && $_SESSION["loginMember"]!=""){
	
	if($_SESSION["memberLevel"]=="admin"){
		header("Location: Project/Project.php");
		//否則則導向會員
		}
		if($_SESSION["memberLevel"]=="member"){
			header("Location: ../../php/Student/Student.php"); 
		}
}

if (!isset($_SESSION["loginMember"]) || $_SESSION["loginMember"]==""){
	//執行會員登入
	if(isset($_POST["username"]) && isset($_POST["passwd"])){
		$username = $_POST["username"];
		$passwd = $_POST["passwd"];
		
		//呼叫SQLFunction
		$System=LoginMember($username);
		
		//Foreach撈SQL的帳號密碼等級
		foreach($System as $LoginMember){
			$System_username=$LoginMember["username"];
			$System_passwd=$LoginMember["passwd"];
			$System_level=$LoginMember["level"];
			}

		//比對密碼，若登入成功則呈現登入狀態
		if(($username==$System_username) && (md5($passwd)==$System_passwd)){
			 $_SESSION["loginMember"]=$System_username;
			 
			//設定登入者的名稱及等級
			 $_SESSION["memberLevel"]=$System_level;
			 
			//若帳號等級為 member 則導向管理者
			if($_SESSION["memberLevel"]=="admin"){
				header("Location: ../Project/Project.php");
				
			//否則則導向會員
			}
			else{
				header("Location: ../Student/Student.php"); 
			}
		}
		else{
			header("Location: ../Login/Login.php?errMsg=1");
		}
	}
}
else {
	//若帳號等級為 member 則導向會員中心
	if($_SESSION["memberLevel"]=="admin"){
		header("Location: ../Project/Project.php");
	//否則則導向管理中心
	}
	else{
		header("Location: ../Student/Student.php"); 
	}
}

$Smarty -> display("Login/Login.tpl");
?>