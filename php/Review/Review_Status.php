<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";



//http://fpk.southeastasia.cloudapp.azure.com/~CRD03/hao/FootPrintKu/php/index/Review_Status.php?Status=a
if(isset($_GET["Status"])){
	$Status = $_GET["Status"];
	if($Status == "a"){
		$Status_Result = Search_Review("Review");
	}else if ($Status == "b"){
		$Status_Result = Search_Review("Pass");
	}else if ($Status == "c"){
		$Status_Result = Search_Review("UnPass");
	}
	
// Print_r($Status_Result);

	$Smarty -> assign("all_Status", $Status_Result);
	$Smarty -> display("Review/Review_Status.tpl");

	
}else if(isset($_GET["Review"]) && isset($_GET["ID"]) && isset($_GET["ChangeStatus"])){
	$Review = $_GET["Review"];
	$ID = $_GET["ID"];
	$ChangeStatus = $_GET["ChangeStatus"];
	
	
	if ($ChangeStatus == 'Pass'){
		$UpDate_Pass = Record_Updated_Pass($ID);
		print_r($UpDate_Pass);
	}else{
		$UpDate_Pass = Record_Updated_UnPass($ID);
		print_r($UpDate_Pass);
	}

}else{
	http_response_code(404); 
	print_r("BadRequest"); 
}

?>