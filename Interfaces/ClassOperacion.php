<?php 
require_once ("Operacion.php");
require_once ("operacionesbasicas.php");
/**
 * 
 */
class Calcular implements Operacion,Operacion_Basica
{
	
	public function raiCuadrada(float $numero):float
	{
		$total = sqrt($numero);
		return $total;
	}
	public function potencia(int $numero, int $potencia):int
	{
		$total2 = pow($numero,$potencia);
		return $total2;
	}
	public function opBasica(float $cant1,float $cant2, string $operacion):float
	{
		if($operacion=="+"){
			$result =$cant1 + $cant2;
		}else if ($operacion=="-"){
			$result =$cant1 - $cant2;
		}else if ($operacion=="*"){
			$result =$cant1 * $cant2;
		}else if ($operacion=="/"){
			$result =$cant1 / $cant2;
		}else{
			$result = "Operacion no validaintenta de nuevo";
		}
		return $result;
	}
	
}

 ?>