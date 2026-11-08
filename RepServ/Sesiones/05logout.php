<?php
session_start();
session_unset();     // Borra todas las variables de sesión
session_destroy();   // Destruye la sesión por completo

header("Location: ./06sesion.php");
exit();
?>