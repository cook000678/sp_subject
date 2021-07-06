<?php /* Smarty version 2.6.30, created on 2018-10-12 10:12:39
         compiled from Building/A_Building.tpl */ ?>
<!-- <link rel="stylesheet" href="../../templates/css/reset.css"> -->
<link rel="stylesheet" href="../../templates/css/Building/Building.css">


<div class="class">	
		<ul>
			<?php $_from = $this->_tpl_vars['all_Building_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Classroom']):
?>
					
					<div class="class1" name="<?php echo $this->_tpl_vars['Classroom']['Classroom_table_id']; ?>
"  onclick="Search_Class_Data (<?php echo $this->_tpl_vars['Classroom']['Classroom_table_id']; ?>
) ">
					<!-- ,Get_Time() -->
						<?php echo $this->_tpl_vars['Classroom']['Building_name']; ?>

						<?php echo $this->_tpl_vars['Classroom']['Classroom_name']; ?>

					</div> 
					 
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	
</div>

<!-- ------------------------------------------------------------------- -->
<div id="section12">

</div>