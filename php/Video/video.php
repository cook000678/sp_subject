<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";
if (isset($_POST["Builging"])) {
}
session_start();
if(isset($_SESSION["memberLevel"]) || ($_SESSION["memberLevel"])!=""){
	if($_SESSION["memberLevel"]=="member"){
		header("Location: Student.php");
	}
}else{
	header("Location: Login/Login.php");
}

//檢查是否經過登入，如果沒有値或等於空
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: Login/Login.php");
}

//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: ../Login/Login.php");
}

$Smarty -> display("Video/Video.tpl");
?>