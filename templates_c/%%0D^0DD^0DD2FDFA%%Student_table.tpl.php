<?php /* Smarty version 2.6.30, created on 2018-10-05 06:28:06
         compiled from Student/Student_table.tpl */ ?>
<link rel="stylesheet" href="../../templates/css/Project.css">

<?php $_from = $this->_tpl_vars['Data_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Data']):
?>
<?php if ($this->_tpl_vars['Data'] != 0): ?>
		<div class="ta" onclick="Search_Class_Data (<?php echo $this->_tpl_vars['Data']['Curriculum_ID']; ?>
)">
			<?php echo $this->_tpl_vars['Data']['Course_name']; ?>

		</div>
 <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<div class="qw"id="dialog" title="借用教室"  >

</div>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
 
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" /> -->