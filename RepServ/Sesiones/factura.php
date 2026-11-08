<?php 
session_start();

require './vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "<h2>Factura pdf Ejercicio 4</h2><hr>";

if (isset($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $key => $value) {
        $subtotal = $_SESSION["carrito"][$key]["precio"] * $_SESSION["carrito"][$key]["cantidad"];
        $html .= "<p>{$key} - Cantidad: {$value['cantidad']} - Precio: {$value['precio']} - Subtotal: {$subtotal}</p><hr>";
    }
}
$html .= "Total: {$_SESSION['total']}";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream("factura.pdf",["Attachment" => false])

?>