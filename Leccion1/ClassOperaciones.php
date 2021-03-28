<?php 
/**
 * 
 */
class Operacion
{
	public $cantidadUno = 0;
	public $cantidadDos = 0;
	public $resultado = 0;
	function __construct($intCant1, $intCant2)
	{
		# code...
		$this->cantidadUno = $intCant1;
		$this->cantidadDos = $intCant2;

	}
	public function getSuma()
	{
		# code...
		$this->resultado = $this->cantidadUno + $this->cantidadDos;
		return $this->resultado;
	}
	public function getResta()
	{
		# code...
		$this->resultado = $this->cantidadUno - $this->cantidadDos;
		return $this->resultado;
	}
	public function getMultiplicacion()
	{
		# code...
		$this->resultado = $this->cantidadUno * $this->cantidadDos;
		return $this->resultado;
	}
	public function getDivision()
	{
		# code...
		$this->resultado = $this->cantidadUno / $this->cantidadDos;
		return $this->resultado;
	}
}
 ?>