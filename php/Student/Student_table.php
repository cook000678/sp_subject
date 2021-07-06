<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";

if (!isset($_POST["Building_name"])&&!isset($_POST["Classroom_name"]) ) {
 $Building_name = "";
 $Classroom_name = "";
}else {
 $Building_name = $_POST["Building_name"];
 $Classroom_name = $_POST["Classroom_name"];
 }
  
$Data = Search_date_building($Building_name,$Classroom_name);

// print_r ($Data);

$Smarty -> assign("Data_array", $Data);
$Smarty -> display("Student/Student_table.tpl");
?>   