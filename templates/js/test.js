function Search_date_building() {//框框的ID
 var student_Building = $("#Building_name").val();
 var student_Class = $("#Classroom_name").val();
  
 $.ajax({
   url: "../Student/Student_table.php",
   data: {
		"Building_name":student_Building,
		"Classroom_name":student_Class},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
		console.log(data);
		$("#section_S").html(data);
   } 
  });
  return ;
 }
//---------------------------------------------------
 function Search_Class_Data(table){
	 console.log("aa");
	$("#dialog").css({"display":""});
	
	$.ajax({
		   url: "../Student/table.php", 
		   type: "GET",
		   error: function(){},
		   success: function(data) {
			   $("#dialog").html(data);
		   }
		    
	  })
	  $("#dialog").dialog({
			width: "40%",
			maxWidth: "768px"}).prev(".ui-dialog-titlebar").css("background","#D2E9FF");;
}
