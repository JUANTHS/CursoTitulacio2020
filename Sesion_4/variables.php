<?php
# Declaracion de variables
$txt = "Hola a todos";
/*  Los nombre de las variables con el signo $
    Los nombres de las variables deben empezar con una letra o _
    No pueden iniciar con un numero y solo pueden  contener caracteres alfanumericos
    Los nombre de variables son sensibles a mayusculas y minisculas
*/
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$a = 5;
$b = 3;

echo "La suma de: " , ($a + $b);
#

# Alcance de las variables

// Global

$c = 5; // Variable global
function pruebaGlobal() {
    // Utilizar n dentro de esta funcion marcará error.
    echo "<p>Variables c dentro de la función es: $c</p>";
}

pruebaGlobal();

echo "Variable c fuera de la funcion es: $c</p>";

// Local

$z = 5; // Variable global

function pruebaLocal() {
    $z = 5; // Variable local
    // Utilizar n dentro de la funcion marcará error.
    echo "<p>Variable z dentro de la funcion es: $z</p>";
}

pruebaLocal();

echo "Variable z fuera de la función es: $z</p>";




?>