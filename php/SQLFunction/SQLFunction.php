<?php
include"../ConnectDatabase.php";
	$ConnectSystem = Connect();

function LoginMember($_Login_usermane){
	global $ConnectSystem;//連線資料庫
	$usermane = $_Login_usermane;
	
	//SQL語法↓  取出帳密
	$sql = ("SELECT memberdata1.username, memberdata1.passwd, memberdata1.level, memberdata1.name
    FROM memberdata1
    WHERE memberdata1.username = :usermane;
   ");
	
	// $sql=("SELECT*FROM memberdata WHERE Usermane=:usermane");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":usermane", $usermane, PDO::PARAM_STR);//表示SQL CHAR，VARCHAR或其他字符串數據類型。
	$sth -> execute();
	
	$Login_member = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		  $student_scoretemp["username"] = $Result["username"];
		  $student_scoretemp["passwd"] = $Result["passwd"];
		  $student_scoretemp["level"] = $Result["level"];
		  $student_scoretemp["name"] = $Result["name"];
		  $Login_member[] = $student_scoretemp;
	  unset($student_scoretemp);
	}
	
 return $Login_member;
}
// ------------------------------------------------------------------------------
function Search_A_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
		//DESC 降冪  ASC 昇冪
		
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_STR);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		//fetch  fetchall 差別在一次顯示一個還是全部
		//ASSOC 取欄位名稱  NUM取欄位所引
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Building_Class["Classroom_table_id"] = $Result["Classroom_table_id"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------
function Search_B_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_STR);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Building_Class["Classroom_table_id"] = $Result["Classroom_table_id"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------
function Search_C_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_STR);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------
function Search_D_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_STR);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------
function Search_E_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_STR);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------
function Search_F_Building($_Building_name){
	global $ConnectSystem;
	$Building_name = $_Building_name;
	$sql=("SELECT Building.Building_name, Classroom_table.Classroom_name, Classroom_table.Classroom_table_id
		FROM Building
		LEFT JOIN Classroom_table ON Classroom_table.Building_id = Building.Building_id 
		WHERE Building.Building_name = :Building_name
		ORDER BY Classroom_name DESC ;
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_INT);
	$sth -> execute();
	
	$Classroom = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Building_Class["Building_name"] = $Result["Building_name"];
		$Building_Class["Classroom_name"] = $Result["Classroom_name"];
		$Building_Class["Classroom_table_id"] = $Result["Classroom_table_id"];
		$Classroom[] = $Building_Class;
		unset($Building_Class);
	}
	return $Classroom;
}
// ------------------------------------------------------------------------------

function Search_Data($_Class_Data,$_Data_Time){
	global $ConnectSystem;
	
	$sql=("SELECT Degree, Data_time, Classroom_table_id
		FROM Data
		WHERE Classroom_table_id = :_Class_Data AND Data_time <= :_Data_Time
		");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":_Class_Data", $_Class_Data, PDO::PARAM_STR);
	$sth -> bindParam(":_Data_Time", $_Data_Time, PDO::PARAM_STR);
	$sth -> execute();
	
	$Data_Degree=array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Degree_temp["Data_time"] = $Result["Data_time"];
		$Degree_temp["Degree"] = $Result["Degree"];
		$Data_Degree[] = $Degree_temp;
		unset($Degree_temp);
	}
	return $Data_Degree;
}
// ---------------------------------------學生----------------------------------

function Search_date_building($Building_name,$Classroom_name){
	global $ConnectSystem;
	
	$sql = ("SELECT Course_name ,Curriculum_ID
	    FROM Classroom_table
		LEFT JOIN Building ON Classroom_table.Building_id = Building.Building_id
		LEFT JOIN Curriculum ON Classroom_table.Classroom_table_id = Curriculum.Classroom_table_id
		WHERE (Building.Building_name = :Building_name)
		AND (Classroom_table.Classroom_name = :Classroom_name)");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Building_name", $Building_name, PDO::PARAM_INT);
	$sth -> bindParam(":Classroom_name",  $Classroom_name, PDO::PARAM_INT);
	$sth -> execute();
	
	$Data=array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Course_temp["Curriculum_ID"] = $Result["Curriculum_ID"];
		$Course_temp["Course_name"] = $Result["Course_name"];
		$Data[] = $Course_temp;
		unset($Course_temp);
		//echo  $Data;
	}
	return $Data;
}
// ------------------------------閔翔-------------------------------------------

function SerchRecord($serch_Building,$serch_class,$datepicker,$time){
	global $ConnectSystem;
	$serch_Building = $serch_Building;
	$serch_class = $serch_class;
	$datepicker = $datepicker;
	$time = $time;
	$sql = ("SELECT Building.Building_name, Classroom_table.Classroom_name, Data.Data_time, Data.Degree
	FROM Classroom_table
	LEFT JOIN Building ON Classroom_table.Building_id = Building.Building_id
	LEFT JOIN Data ON Classroom_table.Classroom_table_id = Data.Classroom_table_id
	WHERE (Building.Building_name = :serch_Building)
	AND (Classroom_table.Classroom_name = :serch_class)
	AND (Data.Data_time BETWEEN :datepicker AND :time)");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":serch_Building", $serch_Building, PDO::PARAM_INT);
	$sth -> bindParam(":serch_class", $serch_class, PDO::PARAM_INT);
	$sth -> bindParam(":datepicker",  $datepicker, PDO::PARAM_INT);
	$sth -> bindParam(":time",  $time, PDO::PARAM_INT);
	$sth -> execute();
	
	$Class = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)){
		$Class_ClassName["Building_name"] =  $Result["Building_name"];
		$Class_ClassName["Classroom_name"] =  $Result["Classroom_name"];
		$Class_ClassName["Data_time"] =  $Result["Data_time"];
		$Class_ClassName["Degree"] =  $Result["Degree"];
		$Class[] = $Class_ClassName;
		unset($Class_ClassName);
	}
	return $Class;
}
// ----------------------分析---------------------------------------

function Serch($serch_Building,$datepicker,$time){
 global $ConnectSystem;
 $serch_Building = $serch_Building;
 $datepicker = $datepicker;
 $time = $time;
 if($serch_Building==''){
 $sql = ("SELECT Building.Building_name,SUM( Degree ) AS Degree
	 FROM Classroom_table
	 RIGHT JOIN  Building ON Classroom_table.Building_id = Building.Building_id
	 LEFT JOIN  Data ON Classroom_table.Classroom_table_id = Data.Classroom_table_id
	 WHERE  (Data.Data_time BETWEEN :datepicker AND :time)
	 GROUP BY Building_name");
 $sth = $ConnectSystem -> prepare($sql);
 $sth -> bindParam(":datepicker",  $datepicker, PDO::PARAM_INT);
 $sth -> bindParam(":time",  $time, PDO::PARAM_INT);
  $sth -> execute();
  
   $Class = array();
 while($Result = $sth -> fetch(PDO::FETCH_ASSOC)){
  $Class_ClassName["Building_name"] =  $Result["Building_name"];
  $Class_ClassName["Degree"] =  $Result["Degree"];
  $Class[] = $Class_ClassName;
  unset($Class_ClassName);
 }
 }
 
 else{
 $sql = ("SELECT  Classroom_table.Classroom_name, Data.Data_time, SUM( Degree ) AS Degree
	 FROM Classroom_table
	 RIGHT JOIN Building ON Classroom_table.Building_id = Building.Building_id
	 LEFT JOIN Data ON Classroom_table.Classroom_table_id = Data.Classroom_table_id
	 WHERE (Building.Building_name = :serch_Building)
	 AND (Data.Data_time BETWEEN :datepicker AND :time)
	 GROUP BY Classroom_name");
 $sth = $ConnectSystem -> prepare($sql);
 $sth -> bindParam(":serch_Building", $serch_Building, PDO::PARAM_INT);
 $sth -> bindParam(":datepicker",  $datepicker, PDO::PARAM_INT);
 $sth -> bindParam(":time",  $time, PDO::PARAM_INT);
  $sth -> execute();
  
   $Class = array();
 while($Result = $sth -> fetch(PDO::FETCH_ASSOC)){
  $Class_ClassName["Classroom_name"] =  $Result["Classroom_name"];
  $Class_ClassName["Data_time"] =  $Result["Data_time"];
  $Class_ClassName["Degree"] =  $Result["Degree"];
  $Class[] = $Class_ClassName;
  unset($Class_ClassName);
 }
 }
 return $Class;
}

// ----------------------管理員審核---------------------------------------
function Search_Review($Review){
	global $ConnectSystem;
	
	$sql=("SELECT Review_ID, Date, Start_Time,  End_Time, Student_ID, Student_Name, Location, Reason, Status 
	FROM Review
	WHERE Review.Status = :Review
	");
	
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Review", $Review, PDO::PARAM_STR);
	$sth -> execute();
	
	$Status = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Review_Status["Review_ID"] = $Result["Review_ID"];
		$Review_Status["Date"] = $Result["Date"];
		$Review_Status["Start_Time"] = $Result["Start_Time"];
		$Review_Status["End_Time"] = $Result["End_Time"];
		$Review_Status["Student_ID"] = $Result["Student_ID"];
		$Review_Status["Student_Name"] = $Result["Student_Name"];
		$Review_Status["Location"] = $Result["Location"];
		$Review_Status["Reason"] = $Result["Reason"];
		$Review_Status["Status"] = $Result["Status"];
		$Status[] = $Review_Status;
		unset($Review_Status);
	}
	// Print_r($Status);

	return $Status;
}
	
//---------------UPDATE--------------
function Record_Updated_Pass($ID){
	global $ConnectSystem;
	
	$sql=(" UPDATE Review
		SET Status = 'Pass'
		WHERE Student_ID = :ID
		");
	
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":ID", $ID, PDO::PARAM_STR);
	$sth -> execute();
	return $ID;
}
	
function Record_Updated_UnPass($ID){
	global $ConnectSystem;
	
	$sql=(" UPDATE Review
		SET Status = 'UnPass'
		WHERE Student_ID = :ID
		");
	
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":ID", $ID, PDO::PARAM_STR);
	$sth -> execute();
	// echo $ID;
	return $ID;
}

// -------------存資料到0918-----------------

function Save_0918(){
	global $ConnectSystem;
	$c = time()+1;
	$b= rand(40,60);
	$sql = ("INSERT INTO 0918_Data ( Degree, Data_time)
	VALUES ('$b', '$c' )");
	
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> execute();
	
}	

// -------------從0918抓資料-----------------

function Search_0918($Data_time){
	global $ConnectSystem;
	$sql = ("SELECT Degree, Data_time
	FROM 0918_Data
	WHERE Data_time >= :Data_time
	");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Data_time", $Data_time, PDO::PARAM_INT);
	$sth -> execute();
	
	$TestData = array();
	while($Result = $sth -> fetch(PDO::FETCH_ASSOC)) {
		$Review_Test["Degree"] = $Result["Degree"];
		$Review_Test["Data_time"] = $Result["Data_time"];
		$TestData[] = $Review_Test;
		unset($Review_Test);
	}
	return $TestData;	
}
// ---------------------
function Save_table($Date,$Start_Time,$End_Time,$Student_ID, $Student_Name, $Location, $Reason){
	global $ConnectSystem;

	$sql = (" INSERT  `CRD02`.`Review` (`Review_ID` ,`Date` ,`Start_Time` ,`End_Time` ,`Student_ID` ,`Student_Name` ,`Location` ,
			`Reason` )VALUES (	'NULL ',  :Date,  :Start_Time,  :End_Time,  :Student_ID,  :Student_Name,  :Location,  :Reason  )
			");
	$sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Date", $Date, PDO::PARAM_INT);
	$sth -> bindParam(":Start_Time", $Start_Time, PDO::PARAM_INT);
	$sth -> bindParam(":End_Time", $End_Time, PDO::PARAM_INT);
	$sth -> bindParam(":Student_ID", $Student_ID, PDO::PARAM_INT);
	$sth -> bindParam(":Student_Name", $Student_Name, PDO::PARAM_INT);
	$sth -> bindParam(":Location", $Location, PDO::PARAM_INT);
	$sth -> bindParam(":Reason", $Reason, PDO::PARAM_INT);
	$sth -> execute();

}	

?>