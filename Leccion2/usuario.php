<?php 
require_once ("ClassUsuario.php");
$obusuarioUno = new Usuario("Carlos Bejarano", "cabejarao21@gmail.com","Admin");
$obusuarioDos = new Usuario("Lorena Tamayo", "lorentpr@gmail.com","Cliente");

echo $obusuarioUno->strTipo;
echo "<br>";
echo Usuario::$estado;
echo "<br>";
echo $obusuarioUno->getPerfil();
echo "<br>";
echo $obusuarioDos->getPerfil();
$obusuarioDos->setCambiarClave("123456");

echo "<br>";
echo $obusuarioDos->getPerfil();

 ?>