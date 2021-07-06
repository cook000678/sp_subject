<div class="class">
	<link rel="stylesheet" href="../../templates/css/reset.css">
	<link rel="stylesheet" href="../../templates/css/A_Building.css">
	<!-- <h1>大樓  樓層  教室<h1> -->
	<div class="square">
		<ul>
			<{foreach item=Classroom from=$all_Building_array}>	
					<div class="class1">
						<{$Classroom.Building_name}>
						<{$Classroom.Classroom_name}>
					</div>
			<{/foreach}>
		</ul>
	</div>
</div>

	