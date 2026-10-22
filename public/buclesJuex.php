<?php
$linea = fgets(STDIN);

$datos = explode(" ", trim($linea));

$suma = 0;
$contador = 0;

while ($datos[$contador] != 0) {

    $suma += $datos[$contador];
    $contador++;

}

echo "Se han sumado $contador números, dando como resultado un total de $suma";



?>
