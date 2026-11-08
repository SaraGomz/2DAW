<?php
require "./06funciones.php";

$usuariosArray=[ ['usuario'=>'cris','password'=>'1111', 'nombre'=>'Cristina Pérez','estado'=>'A','rol'=>'U'],
 ['usuario'=>'juan','password'=>'2222', 'nombre'=>'Juan García','estado'=>'A','rol'=>'U'],
 ['usuario'=>'ana','password'=>'333', 'nombre'=>'Ana Fuertes','estado'=>'B','rol'=>'U'],
 ['usuario'=>'admin','password'=>'999', 'nombre'=>'Administrador','estado'=>'A','rol'=>'AD'],
];


if (isset($_POST["enviar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo "<h2 style='color: red;'>Rellena los campos</h2>";
    }else{
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        login($usuario,$password,$usuariosArray);
    }
}

?>


<form action="" method="post">
    <input type="text" name="usuario" placeholder="usuario"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="checkbox" name="">Recordar <br>

    <button type="submit" name="enviar">Enviar</button>
</form>
