<?php
include "../SQLFunction/SQLFunction.php";
include "../../main.php";

if(isset($_GET["mod"])){ 
 $mod = $_GET["mod"]; 
	if($mod == "now"){
		print_r(Nowtime()); 
	}else if($mod == "json"){
		
		print_r(jsonval());	
		
	}else{
		http_response_code(404); 
		print_r("mod ERROR");
	}
} 
else 
{ 
 http_response_code(404); 
 print_r("BadRequest"); 
}

// print_r(jsonval());

function Nowtime(){
	$datee = Getdate();
	
	$nowtime = mktime($datee['hours'], $datee['minutes'], $datee['seconds'], $datee['mon'], $datee['mday'], $datee['year']);
	return $nowtime;
}


function jsonval(){
	//抓資料
	$Search = Search_0918(time()-5);
	
	// foreach($Search)
	$Z_STR = $Search[0]['Degree'];
	$Z_INT = intval($Z_STR);
	
	$Y = Gettime($Search[0]['Data_time']);
	// echo $Y;
	if($Search[0]['Degree'] == null){
		$arr = array(
			'degree' => 0,
			'time' => ""
			);
	}else{
		$arr = array(
				'degree' => $Z_INT,
				'time' => $Y
				);
	}
	
	//把物件轉json
	$jsondata = json_encode($arr);
	//存資料
	$Save = Save_0918();
	return $jsondata;
}

function Gettime($time){
	$datee = Getdate($time);
	
	return $datee['year']."-".
			Appendzero($datee['mon'])."-".
			Appendzero($datee['mday'])." ".
			Appendzero($datee['hours']+8).":".//台灣+8
			Appendzero($datee['minutes']).":".
			Appendzero($datee['seconds']);
}

function Appendzero($obj){
	if($obj < 10) 
		return '0' . '' . $obj;
    else 
		return $obj;
}

?>