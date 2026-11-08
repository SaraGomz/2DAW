<?php 
session_start();
$productosPrecios = [
    "Manzana" => [
        "precio" => 1.50, 
        "cantidad" => 0
    ],
    "Plátano" => [
        "precio" => 2.00, 
        "cantidad" => 0
    ],
    "Leche" => [
        "precio" => 0.90, 
        "cantidad" => 0
    ],
    "Pan" => [
        "precio" => 1.20, 
        "cantidad" => 0
    ],
    "Arroz" => [
        "precio" => 1.80, 
        "cantidad" => 0
    ],
    "Café" => [
        "precio" => 3.50, 
        "cantidad" => 0
    ],
    "Huevos" => [
        "precio" => 2.50, 
        "cantidad" => 0
    ],
    "Queso" => [
        "precio" => 4.00, 
        "cantidad" => 0
    ],
    "Aceite" => [
        "precio" => 6.50, 
        "cantidad" => 0
    ],
    "Pasta" => [
        "precio" => 1.10, 
        "cantidad" => 0
    ]
];


if (isset($_POST["comprar"])) {
    $producto = $_POST["comprar"];
    $cantidad = (int)$_POST["cantidad"];
    foreach ($productosPrecios as $key => $value) {
        if ($key === $producto) {
            $_SESSION["carrito"][$key] = ["precio" => $value["precio"] , "cantidad" => $cantidad];
            $_SESSION["total"] += $_SESSION["carrito"][$key]["precio"] * $_SESSION["carrito"][$key]["cantidad"]; 
        }
    }
}else if (isset($_POST["reset"])) {
    session_destroy();
}else if (isset($_POST["borrar"])) {
    $productoBorrar = $_POST["borrar"];
    $_SESSION["total"] = $_SESSION["total"] - ($_SESSION["carrito"][$productoBorrar]["precio"] * $_SESSION["carrito"][$productoBorrar]["cantidad"]);
    unset($_SESSION["carrito"][$productoBorrar]);
}
?>

<?php foreach ($productosPrecios as $key => $value) {
    
    ?>
    <form action="" method="post">
    <h2><?= $key ?> precio: <?= $value["precio"] ?>$</h2>
    <input type="number" name="cantidad" placeholder="cantidad">
    <button type="submit" value="<?= $key ?>" name="comprar">Comprar</button>
    </form>
    <?php
    }?>
<form action="" method="post">
    <button type="submit" name="reset">Eliminar sesiones</button>
    <?php if (isset($_SESSION["carrito"])) {
       foreach ($_SESSION["carrito"] as $key => $value) { 
     
    ?>
    <h3><?= $key ?> > <?= $value["cantidad"] ?></h3>
    <button type="submit" name="borrar" value="<?= $key ?>">Borrar</button>
    <?php
    }
    echo "<h3>Total:". $_SESSION['total']."</h3>";
    }?>
</form>

<a href="./factura.php" target="_blank">Generar pdf recivo</a>

