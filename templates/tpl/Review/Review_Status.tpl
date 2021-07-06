<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="Page_down">

	
	<{foreach item=foo from=$all_Status}>
		<div class="frame">
			<div class="Date"><{$foo.Date}></div>
			<div class="Start_Time"><{$foo.Start_Time}>  ~</div>
			<div class="End_Time"><{$foo.End_Time}></div>
			<div class="Student_ID"><{$foo.Student_ID}></div>
			<div class="Student_Name"><{$foo.Student_Name}></div>
			<div class="Loaction"><{$foo.Location}></div>
			<div class="Reason"><p title="<{$foo.Reason}>"><{$foo.Reason}></p></div>
			<div class="Status">
				<{if $foo.Status eq 'UnPass'}>
					<button id="btn_Pass_<{$foo.Student_ID}>" name="Pass" class="button_pass"
					onclick="Point_Button('<{$foo.Status}>','<{$foo.Student_ID}>','Pass')">通過</button>
				<{elseif $foo.Status eq 'Pass'}>
					<button id="btn_UnPass_<{$foo.Student_ID}>" name="Pass" class="btuuon_unpass"
					onclick="Point_Button ('<{$foo.Status}>','<{$foo.Student_ID}>','UnPass')">不通過</button>
				<{else}>
					<button id="btn_Pass_<{$foo.Student_ID}>" name="Pass" class="R_button_pass"
					onclick="Point_Button('<{$foo.Status}>','<{$foo.Student_ID}>','Pass')">通過</button>
					<button id="btn_UnPass_<{$foo.Student_ID}>" name="Pass" class="R_btuuon_unpass"
					onclick="Point_Button ('<{$foo.Status}>','<{$foo.Student_ID}>','UnPass')">不通過</button>
				<{/if}>
			</div>
		</div>				 
	<{/foreach}>

</div>

</body>
</html>
