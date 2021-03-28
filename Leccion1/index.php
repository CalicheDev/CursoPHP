<?php 
require_once ("ClassOperaciones.php");

$operacion1 = new Operacion (8,9);

$totalsuma = $operacion1->getSuma();
echo "Tolta suma: ".$totalsuma;
echo "<br>";

$totalresta = $operacion1->getResta();
echo "Tolta resta: ".$totalresta;
echo "<br>";

$totalMultiplicacion = $operacion1->getMultiplicacion();
echo "Tolta Multiplicacion: ".$totalMultiplicacion;
echo "<br>";

$totalDivision = $operacion1->getDivision();
echo "Tolta Division: ".$totalDivision;
echo "<br>";
 ?>