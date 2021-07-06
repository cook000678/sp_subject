<?php /* Smarty version 2.6.30, created on 2018-10-03 06:38:53
         compiled from index/Review_Status.tpl */ ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="Page_down">

	
	<?php $_from = $this->_tpl_vars['all_Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foo']):
?>
		<div class="frame">
			<div class="Date"><?php echo $this->_tpl_vars['foo']['Date']; ?>
</div>
			<div class="Start_Time"><?php echo $this->_tpl_vars['foo']['Start_Time']; ?>
  ~</div>
			<div class="End_Time"><?php echo $this->_tpl_vars['foo']['End_Time']; ?>
</div>
			<div class="Student_ID"><?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
</div>
			<div class="Student_Name"><?php echo $this->_tpl_vars['foo']['Student_Name']; ?>
</div>
			<div class="Loaction"><?php echo $this->_tpl_vars['foo']['Location']; ?>
</div>
			<div class="Reason"><p title="<?php echo $this->_tpl_vars['foo']['Reason']; ?>
"><?php echo $this->_tpl_vars['foo']['Reason']; ?>
</p></div>
			<div class="Status">
				<?php if ($this->_tpl_vars['foo']['Status'] == 'UnPass'): ?>
					<button id="btn_Pass_<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
" name="Pass" class="button_pass"
					onclick="Point_Button('<?php echo $this->_tpl_vars['foo']['Status']; ?>
','<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
','Pass')">通過</button>
				<?php elseif ($this->_tpl_vars['foo']['Status'] == 'Pass'): ?>
					<button id="btn_UnPass_<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
" name="Pass" class="btuuon_unpass"
					onclick="Point_Button ('<?php echo $this->_tpl_vars['foo']['Status']; ?>
','<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
','UnPass')">不通過</button>
				<?php else: ?>
					<button id="btn_Pass_<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
" name="Pass" class="R_button_pass"
					onclick="Point_Button('<?php echo $this->_tpl_vars['foo']['Status']; ?>
','<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
','Pass')">通過</button>
					<button id="btn_UnPass_<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
" name="Pass" class="R_btuuon_unpass"
					onclick="Point_Button ('<?php echo $this->_tpl_vars['foo']['Status']; ?>
','<?php echo $this->_tpl_vars['foo']['Student_ID']; ?>
','UnPass')">不通過</button>
				<?php endif; ?>
			</div>
		</div>				 
	<?php endforeach; endif; unset($_from); ?>

</div>

</body>
</html>