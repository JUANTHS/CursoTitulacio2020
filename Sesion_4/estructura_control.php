<?php
/**
 * Estructura switch case
 */
$estacion = "";

switch ($estacion) {
    case 'primavera':
        echo "Bienvenidos a la primavera";
        echo "<br><br>";
    break;
    case 'invierno':
        echo "Hace frío";
        echo "<br><br>";
    break;
    default:
        echo "En que estación estamos??";
        echo "<br><br>";
    break;
}
/**
 * Estructura while
 */
$a = 1;
while ($a <= 8) {
    echo "El número es: $a <br>";
    $a++;
}
echo "<br>";
/**
 * Estructura do while
 */
$y = 1;
do {
    echo "El número es: $y <br>";
    $y++;
} while ($y <= 10);

?>