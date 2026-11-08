<?php 
echo("<h1>Ejercicio 1</h1>");

$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach ($eu as $pais => $ciudad) {
    echo("<table>
            <tr>
                <td>La capital de $pais</td>
                <td> es $ciudad<td>
            </tr>
        </table>");
}

echo("<h1>Ejercicio 2</h1>");
$ajed = [];
for ($i=0; $i < 9; $i++) { 
    for ($j=0; $j < 9; $j++) { 
        $ajed[$i][$j] = $i + $j;
    }
}
?>
    <table style="width: 15%; height:30%; border: 1px solid black; ">
        <?php foreach ($ajed as $fila){ ?>
            <tr>
                <?php foreach ($fila as $column){ 
                    if ($column % 2 == 0) {
                        ?>
                        <td style="background-color:white;border: 1px solid black;"></td>
                        <?php
                    }else {
                        ?>
                        <td style="background-color: black; border: 1px solid black;"></td>
                        <?php
                    }?>
                <?php }; ?>
            </tr>
        <?php }; ?>
    </table>
    
<?php
echo("<h1>Ejercicio 3</h1>");


$letras = ["abcd","abc","de","hjjj","g","wer"];
$min = 100;
$max = 0;
$palmax = "";
$palmin = "";

foreach ($letras as $key => $value) {
    $cant = strlen($value);
    echo("En la posición $key tenemos $value <br>");
    if ($cant <= $min) {
        $min = $cant;
        $palmin = $value;
    }elseif ($cant >= $max) {
        $max = $cant;
        $palmax = $value;
    }
}

echo("La palabra más pequeña es $palmin tiene $min letras<br>");
echo("La palabra más grande es $palmax tiene $max letras");


echo("<h1>Ejercicio 4</h1>");
$arrayGen = [];
for ($i=0; $i < 100 ; $i++) { 
    $arrayGen[$i] = rand(1,2);
    if ($arrayGen[$i] == 1) {
        $arrayGen[$i] = "M";
    }else {
        $arrayGen[$i] = "F";
    }
}

$resultado = array_count_values($arrayGen);

print_r($resultado);


echo("<h1>Ejercicio 5</h1>");

$comunidades = array(
array("comunidad" => "Andalucía", "provincias" => array("Córdoba" => 7223, "Huelva" => 1611, "Cádiz" => 480, "Sevilla" => 12990, "Málaga" => 16458, "Granada" => 8622, "Jaén" => 322, "Almería" => 8266)),
array("comunidad" => "Aragón", "provincias" => array("Huesca" => 251, "Teruel" => 1633, "Zaragoza" => 2512)),
array("comunidad" => "Asturias", "provincias" => array("Oviedo" => 256)),
array("comunidad" => "Baleares", "provincias" => array("Baleares" => 503)),
array("comunidad" => "Canarias", "provincias" => array("Santa Cruz de Tenerife" => 153, "Las Palmas de Gran Canaria" => 2451)),
array("comunidad" => "Cantabria", "provincias" => array("Santander" => 6511)),
array("comunidad" => "Castilla La-Mancha", "provincias" => array("Albacete" => 121, "Ciudad Real" => 4241, "Cuenca" => 221, "Guadalajara" => 3211, "Toledo" => 4211)),
array("comunidad" => "Castilla y León", "provincias" => array("León" => 231, "Zamora" => 5231, "Salamanca" => 2311, "Valladolid" => 231, "Palencia" => 7621, "Ávila" => 321, "Segovia" => 251, "Burgos" => 5321, "Soria" => 1251)),
array("comunidad" => "Cataluña", "provincias" => array("Barcelona" => 19240, "Gerona" => 11535, "Lérida" => 6052, "Tarragona" => 255)),
array("comunidad" => "Extremadura", "provincias" => array("Cáceres" => 3405, "Badajoz" => 210)),
array("comunidad" => "Galicia", "provincias" => array("A Coruña" => 1512, "Ourense" => 1612, "Lugo" => 1930, "Pontevedra" => 124)),
array("comunidad" => "Madrid", "provincias" => array("Madrid" => 248000)),
array("comunidad" => "Murcia", "provincias" => array("Murcia" => 2100)),
array("comunidad" => "Navarra", "provincias" => array("Pamplona" => 19587)),
array("comunidad" => "Comunidad Valenciana", "provincias" => array("Valencia" => 19587, "Alicante" => 5342, "Castellon" => 466)),
array("comunidad" => "País Vasco", "provincias" => array("Bilbao" => 124, "San Sebastián" => 8124, "Vitoria" => 259)),
array("comunidad" => "La Rioja", "provincias" => array("Logroño" => 1081))
);

foreach ($comunidades as $comunidad) {
    $total = 0;
    echo ("<h2>Comunidad ".$comunidad["comunidad"]."</h2>");
        foreach ($comunidad["provincias"] as $provincias => $dato) {
            if ($dato <= 500 ) {
            ?>
                <h3 style="color:green"><?=$provincias ?> tiene = <?=$dato?> rayos</h3>
            <?php }else {
                ?>
                <h3 style="color:red"><?=$provincias ?> tiene = <?=$dato?> rayos</h3>
                <?php
            }

            $total += $dato;
        }
        echo("<h3>Rayos totales = $total</h3>");
}



?>

