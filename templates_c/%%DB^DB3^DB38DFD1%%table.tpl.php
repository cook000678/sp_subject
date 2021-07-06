<?php /* Smarty version 2.6.30, created on 2018-10-02 03:17:47
         compiled from index/table.tpl */ ?>
<!doctype html>
<html>
<head>
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="../../templates/css/Project.css"> 
</head>

<form action="table.php" method="post" class="elegant-aero">

<label>
<span>借用時間 :</span>
<input id="Date" class='input' name="Date" placeholder="" value=""/>
</label>
<label>
<span></span>
<select id="Start_Time"  name="Start_Time">
    <option type="text" style="font-size:15px" value=""></option>
	<option type="text" style="font-size:15px" value="8:10">8:10</option>
	<option type="text" style="font-size:15px" value="9:10">9:10</option>
	<option type="text" style="font-size:15px" value="10:10">10:10</option>
	<option type="text" style="font-size:15px" value="11:10">11:10</option>
	<option type="text" style="font-size:15px" value="12:10">12:10</option>
	<option type="text" style="font-size:15px" value="13:10">13:10</option>
	<option type="text" style="font-size:15px" value="14:10">14:10</option>
	<option type="text" style="font-size:15px" value="15:10">15:10</option>
	<option type="text" style="font-size:15px" value="16:10">16:10</option>
</select>
</label>
<label>
<span></span>
<select id="End_Time" name="End_Time">
	<option type="text" style="font-size:15px" value=""></option>
	<option type="text" style="font-size:15px" value="9:00">9:00</option>
	<option type="text" style="font-size:15px" value="10:00">10:00</option>
	<option type="text" style="font-size:15px" value="11:00">11:00</option>
	<option type="text" style="font-size:15px" value="12:00">12:00</option>
	<option type="text" style="font-size:15px" value="13:00">13:00</option>
	<option type="text" style="font-size:15px" value="14:00">14:00</option>
	<option type="text" style="font-size:15px" value="15:00">15:00</option>
	<option type="text" style="font-size:15px" value="16:00">16:00</option>
	<option type="text" style="font-size:15px" value="17:00">17:00</option>
</select>
</label>

<label>
<span>學號 :</span>
<input id="Student_ID" type="text" name="Student_ID" placeholder="例:40418213" value=""/>
</label>
<label>
<span>姓名 :</span>
<input id="Student_Name" type="text" name="Student_Name" placeholder=""  value=""/>
</label>
<label>
<span>借用教室 :</span>
<input id="Location" type="text" name="Location" placeholder="03-B0604"  value=""/>
</label>
<label>
<span>借用原因 :</span>
<textarea id="Reason" name="Reason" placeholder=""  value=""></textarea>
</label>


<label>
<span>&nbsp;</span>
<input type="submit" class="button" value="送出" />
</label>

<!-- ------------------------- -->
	<script src="../../templates/UIjs/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">

	<script>
	console.log($("#Date" ));
	$(function() {
		$( "#Date" ).datepicker({
		dateFormat: 'yy-mm-dd'
		});
		
	});
	</script>	

</form>
</html> 