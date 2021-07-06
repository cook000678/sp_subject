<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";



$B03='電子工程館';
$Classroom = Search_B_Building($B03);

$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>