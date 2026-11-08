<?php 
session_start();
$usuariosDB = [
    [
        "usuario" => "ana",
        "password" => "1234",
        "rol" => "ROLE_ALUMNO"
    ],
    [
        "usuario" => "noa",
        "password" => "12",
        "rol" => "ROLE_PROFE"
    ]
];

if (isset($_POST["enviar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo"<h2 style='color: red;'>Rellena los campos</h2>";
    }
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];


    foreach ($usuariosDB as $key => $value) {
        if ($value["usuario"] === $usuario && $value["password"] === $password) {
            $_SESSION["sesion"] = ["usuario"=> $value["usuario"],"password" => $value["password"] , "rol" => $value["rol"]];
            if (!empty($_POST["recordar"])) {
                setcookie("usuario",$usuario,time()+60);
            }
            if ($value["rol"] === "ROLE_ALUMNO") {
                $_SESSION["temporal"] = time() + 60;
            }else{
                $_SESSION["temporal"] = time() + 120;
            }
            header("Location: ./05aules.php");   
        }
    }
}

?>

<form action="" method="post">
    <input type="text" name="usuario" value="<?= $_COOKIE["usuario"] ?? '' ?>" placeholder="usuario"><br>
    <input type="text" name="password" placeholder="contraseña"><br>
    Recordar<input type="checkbox" name="recordar"><br>
    <button type="submit" name="enviar">Enviar</button>
</form>
