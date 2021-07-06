function Search_A_Building() {
	  $.ajax({
		   url: "../Building/A_Building.php",
		   //Classroom=A
		   data: {"Classroom":"A" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}

// ----------------------------------------------------
function Search_B_Building() {
	  $.ajax({
		   url: "../Building/B_Building.php",
		   data: {"Classroom":"B" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}
// -----------------------------------------------------
function Search_C_Building() {
	  $.ajax({
		   url: "../Building/C_Building.php",
		   data: {"Classroom":"C" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}
// -----------------------------------------------------
function Search_D_Building() {
	  $.ajax({
		   url: "../Building/D_Building.php",
		   data: {"Classroom":"D" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}
// -----------------------------------------------------
function Search_E_Building() {
	  $.ajax({
		   url: "../Building/E_Building.php",
		   data: {"Classroom":"E" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}
// -----------------------------------------------------
function Search_F_Building() {
	  $.ajax({
		   url: "../Building/F_Building.php",
		   data: {"Classroom":"F" },
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			
			console.log(data);
			$("#section11").html(data);
		   }
	  })
}
// ------------------------------------------

function Search_Class_Data(_data){
	var time = Get_Time();
	$.ajax({
		   url: "../Data/Data.php",
		   data: {"Data":_data, "Time":time},
		   type: "POST",
		   datatype: "JSON",
		   error: function(){},
		   success: function(data) {
			console.log(_data);
			$("#section12").html(data);
		   }
	  })
}


function Get_Time(){
	var Time = new Date();
	var Month = (Time.getMonth()+1);
	var Day = Time.getDate();
	var H = Time.getHours();
	var M = Time.getMinutes();
	var S = Time.getSeconds();
	return (Time.getFullYear() +"-"+Appendzero(Month) +"-"+ Appendzero(Day) +" " + Appendzero(H)+":"+Appendzero(M)+":"+Appendzero(S));
}

function Appendzero(obj)
    {
        if(obj<10) return "0" +""+ obj;
        else return obj;
    }


// --------------------學生-----------------------

function Search_date_building() {
var date = $("#datepicker").val();//框框的ID
var sss = $
var Class = $("#Class_Name").val();
 
 $.ajax({
   url: "../Student/Student_table.php",
   data: {
        "datepicker":date,
		"Class_Name":Class},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
		// console.log(data);
		$("#section_S").html(data);
   } 
  });
  return ;
 }
// --------------------管理員審核-----------------------
//未審核 通過 不通過按鈕
function SearchReview(_Status){

	$.ajax({
	   url: "../Review/Review_Status.php?Status="+_Status,
	   datatype: "JSON",
	   error: function(){},
	   success: function(data) {
		
		console.log(_Status);
		$("#sectionRe").html(data);
	   }
  })
}
//點擊按鈕通過 
function Point_Button(_Review,_ID,_ChangeStatus){
	
	$.ajax({
		url: "../Review/Review_Status.php?Review=" + _Review + "&ID=" + _ID + "&ChangeStatus=" + _ChangeStatus,
		datatype: "JSON",
		error: function(){},
		success: function(data) {
		console.log(_Review);
		console.log(_ID);
		console.log(_ChangeStatus);
		console.log('#btn_' + _ChangeStatus +'_');
		$('#btn_' + _ChangeStatus +'_'+ _ID).prop("disabled", true);
	  }
  })
}



