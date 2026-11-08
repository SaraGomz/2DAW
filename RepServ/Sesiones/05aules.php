<?php
session_start();

if (!isset($_SESSION["sesion"])) {
    header("Location: ./05sesion.php");
}

if (time() > $_SESSION["temporal"]) {
    session_unset();
    session_destroy();
    header("Location: ./05sesion.php");
}else{


?>
<div>
    <h1>Curso Aules</h1>
    <h3><?= $_SESSION["sesion"]["usuario"] ?></h3>
    <a href="./05logout.php">Logout</a>
</div>

<?php
if ($_SESSION["sesion"]["rol"] == "ROLE_ALUMNO") {
?>
    <div class="contenedor-modulos">
        <div class="caja-modulo fondo-php">PHP</div>
        <div class="caja-modulo fondo-js">JS</div>
        <div class="caja-modulo fondo-despliegue">Despliegue</div>
    </div>
<?php
}else{
?>
    <div class="contenedor-modulos">
        <div class="caja-modulo fondo-php">PHP PROFE</div>
        <div class="caja-modulo fondo-js">JS PROFE</div>
        <div class="caja-modulo fondo-despliegue">Despliegue PROFE</div>
    </div>
<?php
}
?>


<?php 
}?>

<style>
        /* Contenedor general para poner los cuadrados en fila */
        .contenedor-modulos {
            display: flex;
            gap: 20px; /* Espacio entre los cuadrados */
            margin-top: 20px;
        }

        /* Estilo base para los cuadrados */
        .caja-modulo {
            width: 150px;
            height: 150px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 1.2rem;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Colores de fondo individuales estilo Aules/Moodle */
        .fondo-php {
            background-color: #0f6cbf; /* Azul Aules */
        }

        .fondo-js {
            background-color: #f0ad4e; /* Amarillo / Naranja Moodle */
        }

        .fondo-despliegue {
            background-color: #5cb85c; /* Verde Moodle */
        }
    </style>