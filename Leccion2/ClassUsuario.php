<?php 
/**
 * 
 */
class Usuario
{
	private $strNombre;
	public $strEmail;
	public $strTipo;
	private $strClave;
	public $strFechaRegistro;
	static $estado = "Activo";
	function __construct(string $nombre, string $email, string $tipo)
	{
		# code...
		$this->strNombre = $nombre;
		$this->strEmail = $email;
		$this->strTipo = $tipo;
		$this->strClave = rand();
		$this->strFechaRegistro = date('Y-m-d H:m:s');
	}
	public function getNombre():string{
		return $this->strNombre;
	}
	public function getPerfil(){
		echo "Estos son los datos del usuario:";
		echo "<br>";
		echo "Nombre ".$this->strNombre."<br>";
		echo "Email ".$this->strEmail."<br>";
		echo "FechaRegistro ".$this->strFechaRegistro."<br>";
		echo "Clave ".$this->strClave."<br>";
		echo "Estado ".self::$estado."<br>";

	}
	public function setCambiarClave(string $pasw){
		$this->strClave = $pasw;
	}


}
 ?>