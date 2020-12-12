<?php
/**
* Declarar funciones en php
*/

function Saludo() {
	echo "Hola ¿cómo estan?";
}
Saludo();
echo "<hr>";

/**
* función con parametros
*/
function Suma(int $a, int $b) {
    $resultado = $a + $b;
    return $resultado;

}
echo (Suma(5, 7));

?>