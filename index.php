<?php 

function calcularBaskara($a, $b, $c) {

    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Não existem raízes reais.";
    }


    $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
    $raiz2 = (-$b - sqrt($delta)) / (2 * $a);


    return array($raiz1, $raiz2);
}

$a = 1;
$b = -3;
$c = 2;

$raizes = calcularBaskara($a, $b, $c);

if (is_array($raizes)) {
    echo "Raiz 1: " . $raizes[0] . "<br>";
    echo "Raiz 2: " . $raizes[1] . "<br>";
} else {
    echo $raizes;
}

?>



