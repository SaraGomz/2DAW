<?php
session_start(); 
if (isset($_POST["enviar"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["contador"] = 0;
    echo "<a href='./02cookP2.php'>Pag2</a>";   
}

?>

<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <button type="submit" name="enviar">Enviar</button>
</form>