<?php
include "SQLFunction.php";
include "../../main.php";


$b= rand(1,100);
echo $b.'<br>';
echo '這是亂數<br>';
echo '<br>';

$c = time();
echo $c.'<br>';
echo '這是時間戳<br>';


echo '<br>';
echo '<br>';
$NowTime=time();
	// echo date('Y-m-d H:i:s',$NowTime);
	$z = date('Y-m-d H:i:s',$NowTime);
echo $z.'<br>';
echo '這是現在時間';



// $servername = "localhost";






?>