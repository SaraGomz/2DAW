<?php
session_start();

$_SESSION["contador"] +=10;

echo"Hola".$_SESSION["nombre"]." esta es la página 2 el contador tiene ahora mismo: ".$_SESSION["contador"];

?>

<a href="./02cook.php">Página 0</a>
<a href="./02cookP2.php">Página 2</a>