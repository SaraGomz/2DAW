<?php 
if (isset($_COOKIE["entrada"])) {
    $cont = $_COOKIE["entrada"] + 1;
    setcookie("entrada", $cont, time() + 1000);
    
    echo "Hola de nuevo. Visitas: " . $_COOKIE["entrada"];
} else {
    $cont = 1;
    setcookie("entrada", $cont, time() + 1000);
    echo "¡Bienvenida! Es tu primera visita.";
}
?>