<link rel="stylesheet" href="../../templates/css/Project.css">

<{foreach item=Data from=$Data_array}>
<{if $Data != 0}>
		<div class="ta" onclick="Search_Class_Data (<{$Data.Curriculum_ID}>)">
			<{$Data.Course_name}>
		</div>
 <{/if}>
<{/foreach}>

<div class="qw"id="dialog" title="借用教室"  >

</div>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
 
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" /> -->
