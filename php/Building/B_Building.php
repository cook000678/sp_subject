<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";


if (isset($_POST["B_Building"])){
}


$B02='幼兒園';
$Classroom = Search_B_Building($B02);


// print_r($Classroom);
// echo $_classroom.'i do';

$Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Building/A_Building.tpl");
?>