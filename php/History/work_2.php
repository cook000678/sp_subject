<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";

if (!isset($_POST["serch_Building"])&&!isset($_POST["serch_class"])
	&&!isset($_POST["datepicker"])&&!isset($_POST["time"]) ) {
 $serch_Building = "";
 $serch_class = "";
 $datepicker = "";
 $time = "";
}else {
 $serch_Building = $_POST["serch_Building"];
 $serch_class = $_POST["serch_class"];
 $datepicker = $_POST["datepicker"];
 $time = $_POST["time"];

 
}

$Class = SerchRecord($serch_Building,$serch_class,$datepicker,$time);

// print_r ($Class);

if (empty($Class) == true) {
 $Class = 0;
}
$Smarty -> assign("Class_array", $Class);
$Smarty -> display("History/history2.tpl");
?>