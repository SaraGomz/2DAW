<?php 
if (isset($_POST["enviar"])) {
    $dir_subida = "./subida";
    $fichero_subido = $dir_subida . basename($_FILES['img']['name']);
    $archivos = scandir($dir_subida);

    if (move_uploaded_file($_FILES['img']['tmp_name'] , $fichero_subido)) {
        echo("Fichero subido correctamente");
    }else{
        echo("Ha ocurrido un problema al subir el fichero");
    }
}

?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="img" id="">
    <button type="submit" name="enviar">Enviar</button>
</form>