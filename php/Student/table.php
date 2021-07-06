 <?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";
if (isset ($_POST["Date"]))
{
$Date= $_POST["Date"];
$Start_Time= $_POST["Start_Time"];
$End_Time= $_POST["End_Time"];
$Student_ID= $_POST["Student_ID"];
$Student_Name= $_POST["Student_Name"];
$Location= $_POST["Location"];
$Reason= $_POST["Reason"];

echo $Start_Time;

$_Save_table=Save_table( $Date,$Start_Time,$End_Time,$Student_ID, $Student_Name, $Location, $Reason);
header("Location:Student.php");
};



// $Smarty -> assign("all_Building_array", $Classroom);
$Smarty -> display("Student/table.tpl");
?>