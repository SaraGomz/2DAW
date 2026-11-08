<?php 

if (isset($_POST["enviar"])) {
    $resultado = total();
}

function total(){
    $total = 0;
    $numeros = $_POST["numero"];
    foreach ($numeros as $key => $value) {
        $total += $value;
    }
    return $total;
}


?>
<form action="" method="post">
    <?php for ($i=1; $i < 11; $i++) { ?>
    <label for="numero[]">Numero <?= $i ?></label>
        <input type="number" name="numero[]"><br>
    <?php } ?>
    <button type="submit" name="enviar">Calcular total</button>
</form>

<h3>Total: <?= isset($resultado) ? $resultado : '' ?></h3>