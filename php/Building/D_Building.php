<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";

if (isset($_POST["A_Building"])){
}

$B04='土木工程館';
$Classroom = Search_A_Building($B04);

$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>