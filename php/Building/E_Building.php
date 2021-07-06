<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";



$B05='妝彩系館';
$Classroom = Search_A_Building($B05);


$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>