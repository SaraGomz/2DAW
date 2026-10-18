<?php 
$arrayPalabras = ["abcd","abc","de","hjjj","g","wer"];
$max = 1;
$min = 1;

echo "<h1> Ejer 1</h1>";

foreach ($arrayPalabras as $key => $value) {
    $cant = strlen($value);
    echo "La palabra en la posición ".$key." tiene en total ".$cant." letras<br>";
    if ($cant <= $min ) {
        $min = $arrayPalabras[$key];
    }else if ($cant >= $max) {
        $max = $arrayPalabras[$key];
    }
    }
    echo "<br><br> La palabra más larga es: ".$max." tiene ".strlen($max)." letras";
    echo "<br><br> La palabra más corta es: ".$min." tiene ".strlen($min)." letras<br><br>";

    echo "<h1> Ejer 2</h1>";

    for ($i=1; $i < 11; $i++) { 
        for ($j=1; $j < 11; $j++) { 
            $tabla[$i][$j] = $i * $j;
        }
    }
?>

<table style="border: 1px solid">
    <?php for ($i=1; $i < 11 ; $i++) { 
        
        ?>
        <tr style = "">
            <?php for ($j=1; $j < 11 ; $j++) { 
                if ($i == 1) {?>    
                    <td style="border: 1px solid; background-color: blue; color: white; " ><?php echo $tabla[$i][$j]?></td>
                <?php }elseif ($j == 1) {?>
                    <td style="border: 1px solid; background-color: red; color: white; " ><?php echo $tabla[$i][$j]?></td>
                <?php }else { ?>
                    <td style="border: 1px solid;" ><?php echo $tabla[$i][$j]?></td>
                <?php } ?>
            <?php } ?>   
        </tr>
    <?php }?>
</table>

<?php 

echo "<h1> Ejer 3</h1>";

for ($i=0; $i < 50; $i++) { 
    $numeros[] = rand(0,100);
}

print_r($numeros);
echo "<h3>Ordenado de menor a mayor</h3>";

$ordAsc = $numeros;
sort($ordAsc);
$suma = 0;

foreach ($ordAsc as $key => $value) {
    echo $value." ";
    $suma += $value;
    }               

$ordDesc = $numeros;
rsort($ordDesc);

echo "<h3>Ordenado de mayor a menor</h3>";

foreach ($ordDesc as $key => $value) {
    echo $value." ";
    }
    echo "<br><br> La suma de todos los números es: ".$suma;

?>
