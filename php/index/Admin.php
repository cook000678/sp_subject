<?php
include "SQLFunction.php";
include "../../main.php";
session_start();
//檢查是否經過登入，如果沒有値或等於空
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: Login.php");
}
// echo $_GET["logout"];
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: Login.php");
}
//繫結登入會員資料
// $query_RecMember = "SELECT * FROM memberdata1 WHERE username = '{$_SESSION["loginMember"]}'";
// $RecMember = $db_link->query($query_RecMember);	
// $row_RecMember=$RecMember->fetch_assoc();


$Smarty -> display("index/Admin.tpl");

?>