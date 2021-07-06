//js
//輸入文字顯示下方
function getkeyword(){
 var word = document.getElementById("word");
 document.getElementById("enterword").innerHTML = word.value;
 //新增進html dom物件
 }
function returnkeyword(){
 document.getElementById("word").value = document.getElementById("enterword").innerHTML;
 //新增進html dom物件
 }
//新增class讓文自置中
function addCssInHtml(){
 $(".color_range").addClass("text");
 //在class名稱為color_range的屬性上加上class
}
function InHtml(){
 $(".color_range").removeClass("text");
 //在class名稱為color_range的屬性上加上class
}

//搜尋學生所上的課跟成績
function searchScore() {
 var student_name = $("#student_name").val();
 if (student_name.trim() != "") {
  $.ajax({
   url: "score_section.php",
   data: {"student_name": student_name},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
    
    console.log(data);
    $("#section").html(data);
   }
  })
 } else {
  return;
 }
}

function searchSex() {
 var student_Sex = $("#student_Sex").val();
 if (student_Sex.trim() != "") {
  $.ajax({
   url: "Sex.php",
   data: {"student_Sex": student_Sex},
   type: "POST",
   datatype: "JSON",
   error: function(){},
   success: function(data) {
    
    console.log(data);
    $("#section").html(data);
   }
  })
 } else {
  return;
 }
}
// ----------------------------------------------------
