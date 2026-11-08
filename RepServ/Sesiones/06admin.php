<?php
session_start();

if (isset($_SESSION["usuario"])) {
    
}else{
    header("Location: ./06sesion.php");
}


?>

<h1>Bienvenido a tu zona de usuario <?= $_SESSION["usuario"]["nombre"] ?></h1>
<a href="./05logout.php">LogOut</a>