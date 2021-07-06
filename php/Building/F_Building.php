<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";


$B06='幼兒保育館';
$Classroom = Search_A_Building($B06);


$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>