<?php 
	/**
	 * 
	 */
	require_once ("autoload.php");
	class Usuario extends Conexion
	{
		private $strNombre;
		private $intTelefono;
		private $stremail;
		private $conexion;
		
		public function __construct()
		{
			# code...
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}
		public function insertUsuario(string $usuario, int $telefono, string $correo){

			$this->strNombre = $usuario;
			$this->intTelefono = $telefono;
			$this->stremail = $correo;

			$sql = "INSERT INTO usuario(nombre, telefono, email) VALUES (?,?,?)";
			$insert = $this->conexion->prepare($sql);
			$arrData = array($this->strNombre,$this->intTelefono,$this->stremail);
			$resInsert = $insert->execute($arrData);
			$idInsert = $this->conexion->lastInsertId();
			return $idInsert;

		}
		public function getUsuarios()
		{
			$sql = "SELECT * FROM usuario";
			$execute = $this->conexion->query($sql);
			$request = $execute->fetchall(PDO::FETCH_ASSOC);
			return $request;
		}
		public function updateUser(int $id, string $nombre, int $telefono, string $email)
		{
			$this->strNombre = $nombre;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id ";
			$update = $this->conexion->prepare($sql);
			$arrData = array($this->strNombre,$this->intTelefono,$this->strEmail);
			$resExecute = $update->execute($arrData);
			return $resExecute;
		}

		public function getUser(int $id)
		{
			$sql = "SELECT * FROM usuario  WHERE id = ? ";
			$arrWhere = array($id);
			$query = $this->conexion->prepare($sql);
			$query->execute($arrWhere);
			$request = $query->fetch(PDO::FETCH_ASSOC);
			return $request;
		}

		public function deluser(int $id)
		{
			$sql = "DELETE FROM usuario WHERE id = ? ";
			$arrWhere = array($id);
			$delete = $this->conexion->prepare($sql);
			$del = $delete->execute($arrWhere);
			return $del;
		}
	}

 ?>