<?php 
session_start();

function login($user,$password,$usuariosArray){
    $error = false;
    foreach ($usuariosArray as $key => $value) {
        if ($user == $value["usuario"] && $password == $value["password"]) {
            if ($value["estado"] != "A") {
                echo "<h3 style ='color:red;'>Usuario bloqueado</h3>";
            }else{
                $_SESSION["usuario"]= ['usuario'=>$value["usuario"],'password'=>$value["password"], 'nombre'=>$value["nombre"],'estado'=>$value["estado"],'rol'=>$value["rol"]];
                if ($value["rol"] == "U") {
                    header("Location: ./06aplicacion.php");
                }else{
                    header("Location: ./06admin.php");
                }
            }
        }else{
            $error = true;
        }
    }
    if ($error) {
        echo "<h2 style='color: red;'>Error en el usuario o en la contraseña</h2>";
    }
}


function logout(){

}
?>