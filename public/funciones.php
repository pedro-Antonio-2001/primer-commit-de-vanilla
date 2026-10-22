<?php
function sumar(array $suma): array {
    $solucion = 0;
    for ($i = 0; $i < count($suma); $i++) {
        $solucion += $suma[$i];
    }
    return [$solucion];}


function media(array $datos) {
    $solucion = sumar($datos)[0];
    return $solucion / count($datos);
}

while ($linea = fgets(STDIN)) {
    $datos = explode(" ", trim($linea));
    $operacion = $datos[0];

    $numeros = [];
    for ($i = 1; $i < count($datos); $i++) {
        $numeros[] =$datos[$i];
    }

    if (count($numeros) < 2) {
        echo "<p>(Error) No dispongo de suficientes argumentos.</p>" . "\n";
    }else{
        switch($operacion){
            case 'suma':
                 echo "<p>La suma de los números es: " . sumar($numeros)[0] . "</p>" . "\n";
                 break;
            case 'media':
                 echo "<p>La media de los números es: " . media($numeros) . "</p>" . "\n";
                 break;
            default:
                echo "<p>(Error) Operación no permitida</p>" . "\n";
                break;
        }
    }
}
?>
