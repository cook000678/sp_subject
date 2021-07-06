<ul class="three_10">
<{foreach item=Class from=$Class_array}>
<{if $Class != 0}>
<body>
	<br>
		<div class="three_11">
			<li id="Building_name"><{$Class.Building_name}></li>
		</div>
		<div class="three_11">
			<li id="Classroom_namez"><{$Class.Classroom_name}></li>
		</div>
		<div class="three_11">
			<li id="Data_time"><{$Class.Data_time}></li>
		</div>
		<div class="three_11">
			<li id="Degree"><{$Class.Degree}></li>
		</div>
	</br>
</body>
 <{/if}>
<{/foreach}>
</ul>
