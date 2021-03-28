<?php 
 function autoload($clase){

 	//echo $clase.'<br>';
 	$url = "".str_replace("\\","/", $clase.".php");
 	//echo $url."<br>";
 	require_once ($url);
 	//echo $class.".php"."<br>";
 }

 spl_autoload_register('autoload');

 ?>