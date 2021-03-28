<?php 
require_once ("ClassOperacion.php");
$objraiz = new calcular();
echo $objraiz->raiCuadrada(78);
echo "<br>";
echo $objraiz->potencia(3,8);
echo "<br>";
echo $objraiz->opBasica(23,8,"/");
 ?>