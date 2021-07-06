<?php /* Smarty version 2.6.30, created on 2018-10-05 05:37:57
         compiled from History/history2.tpl */ ?>
<ul class="three_10">
<?php $_from = $this->_tpl_vars['Class_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Class']):
?>
<?php if ($this->_tpl_vars['Class'] != 0): ?>
<body>
	<br>
		<div class="three_11">
			<li id="Building_name"><?php echo $this->_tpl_vars['Class']['Building_name']; ?>
</li>
		</div>
		<div class="three_11">
			<li id="Classroom_namez"><?php echo $this->_tpl_vars['Class']['Classroom_name']; ?>
</li>
		</div>
		<div class="three_11">
			<li id="Data_time"><?php echo $this->_tpl_vars['Class']['Data_time']; ?>
</li>
		</div>
		<div class="three_11">
			<li id="Degree"><?php echo $this->_tpl_vars['Class']['Degree']; ?>
</li>
		</div>
	</br>
</body>
 <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>