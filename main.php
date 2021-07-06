<?php
	include"../../libs/Smarty.class.php";
	$Smarty = new Smarty();
	$Smarty -> template_dir = "../../templates/tpl/";
	$Smarty -> compile_dir = "../../templates_c/";
	$Smarty -> config_dir = "../../configs/";
	$Smarty -> cache_dir = "../../cache/";
	$Smarty -> left_delimiter = '<{';
	$Smarty -> right_delimiter = '}>';
	
	
?>