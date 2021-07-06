<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";



$B01='綜合大樓';
$Classroom = Search_A_Building($B01);


// print_r($Classroom);


$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>