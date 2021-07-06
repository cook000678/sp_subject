<!-- <link rel="stylesheet" href="../../templates/css/reset.css"> -->
<link rel="stylesheet" href="../../templates/css/Building/Building.css">


<div class="class">	
		<ul>
			<{foreach item=Classroom from=$all_Building_array}>
					
					<div class="class1" name="<{$Classroom.Classroom_table_id}>"  onclick="Search_Class_Data (<{$Classroom.Classroom_table_id}>) ">
					<!-- ,Get_Time() -->
						<{$Classroom.Building_name}>
						<{$Classroom.Classroom_name}>
					</div> 
					 
			<{/foreach}>
		</ul>
	
</div>

<!-- ------------------------------------------------------------------- -->
<div id="section12">

</div>