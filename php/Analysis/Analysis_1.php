<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";

if (!isset($_POST["serch_Building"])
	&&!isset($_POST["datepicker"])&&!isset($_POST["time"]) ) {
 $serch_Building = "";
 $datepicker = "";
 $time = "";
}else {
 $serch_Building = $_POST["serch_Building"];
 $datepicker = $_POST["datepicker"];
 $time = $_POST["time"];
}

$Class = Serch($serch_Building,$datepicker,$time);

if (empty($Class) == true) {
 $Class = 0;
}
$Smarty -> assign("Class_array", $Class);
$Smarty -> display("Analysis/Analysis_1.tpl");