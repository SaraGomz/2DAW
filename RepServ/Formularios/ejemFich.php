<?php 
if (isset($_POST['enviar'])) {

    $dir_subida = "./";
    $fichero_subido= $dir_subida . basename($_FILES['fichero_usuario']['name']);
    
    if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
        echo("fichero subido con éxito");
    
        }else {
            echo("el fichero no se ha podido subir");
        }
}

?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="hidden" name="max_file_size" value="30000">
    <label for="fichero">Adjunta foto</label>
    <input type="file" name="fichero_usuario"><br>
    <input type="submit" name="enviar">
</form>