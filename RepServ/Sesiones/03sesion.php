<?php 
session_start();
if (isset($_POST["add"])) {
    if (empty($_POST["producto"]) || empty($_POST["cantidad"])) {
        echo "<h2 style='color: red;'>Introduce los valores</h2>";
    }else{

        $producto = $_POST["producto"];
        $cantidad = $_POST["cantidad"];
        
        if (isset($_SESSION["carrito"][$producto])) {
            $_SESSION["carrito"][$producto]["cantidad"] += $cantidad;
            }else{
                $_SESSION["carrito"][$producto] = ["producto" => $producto, "cantidad" => $cantidad];
            }    
    }            
}else if (isset($_POST["reset"])) {
    unset($_SESSION["carrito"]);
}else if (isset($_POST["borrar"])) {
    $productoBorrar = $_POST["borrar"];
    unset($_SESSION["carrito"][$productoBorrar]);
}
?>

<form action="" method="post">
    <input type="text" name="producto" placeholder="producto">
    <input type="number" name="cantidad" placeholder="cantidad">
    <button type="submit" name="add">Añadir</button>
    <button type="submit" name="reset">Reset</button>
</form>
<h2 style="color: red;"></h2>
<?php 
if (isset($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $key => $value) {
        echo "<form action='' method='post'><h3><cantidad:>". $value["producto"] ." cantidad: ". $value["cantidad"]." </h3>";
        echo "<button type='submit' name='borrar' value='".$value["producto"]."'>Eliminar</button></form>";
    }    
}       


?>