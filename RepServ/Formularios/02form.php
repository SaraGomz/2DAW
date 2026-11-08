<?php
$num1 = 0;
$num2 = 0;

if (isset($_POST["suma"])) {
    datos($num1, $num2);
    $resultado = $num1 + $num2;
    echo($resultado);
}
if (isset($_POST["resta"])) {
    datos($num1, $num2);
    $resultado = $num1 - $num2;
    echo($resultado);
}
if (isset($_POST["division"])) {
    datos($num1, $num2);
    $resultado = $num1 / $num2;
    echo($resultado);
}
if (isset($_POST["mult"])) {
    datos($num1, $num2);
    $resultado = $num1 * $num2;
    echo($resultado);
}



function datos(&$num1, &$num2){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
}

?>
<h1>Ejercicio 2 - Calculadora</h1>

<form action="" method="post">
    <input type="number" name="num1" >
    <input type="number" name="num2" >
    <button type="submit" name="suma">+</button>
    <button type="submit" name="resta">-</button>
    <button type="submit" name="division">/</button>
    <button type="submit" name="mult">*</button>
</form>
