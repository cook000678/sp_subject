function searchScore() {
 var student_Building = $("#serch_Building").val(); 
 var student_name = $("#serch_class").val(); 
 var student = $("#datepicker").val();
 var student_time = $("#time").val();
 
 console.log(student_Building);

 if (student_name.trim() != "") {
  $.ajax({
   url: "../History/work_2.php",
   data: {
		"serch_Building": student_Building,
		"serch_class": student_name,
        "datepicker":student,
		"time":student_time},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
		console.log(data);
		$("#section12").html(data);
   }
  });
 } 
 else 
 {
  return ;
 }
 
}

// --------------------------------------分析----------------

function search() {
 var student_Building = $("#serch_Building").val();
 var student = $("#datepicker").val();
 var student_time = $("#time").val();

 $.ajax({
   url: "../Analysis/Analysis_1.php",
   data: {
		"serch_Building":student_Building,
        "datepicker":student,
		"time":student_time},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
		console.log(data);
		$("#section12").html(data);
   } 
  });
  return ;
 }
