<?php
/**
 * PHP soporta los siguientes tipos de datos:
 * String
 * Integer
 * Float
 * Bolean
 * Array
 * Object
 * Null
 * Resource
 */
// String
$saludo = "Hola";
echo $saludo." Bievenidos a ". 'PHP';
ECHO "<br>";

// Integer
echo "<hr>";
$x = 2020;
var_dump($x);
echo "<br>";

// Float
echo "<hr>";
$y = 10.5672;
var_dump($y);
echo "<br>";

// Bolean
echo "<hr>";
$verdadero = true;
$falso = false;
var_dump($verdadero);
echo "<br>";

// Array
echo "<hr>";
$colores = array("Rojo", "Verde", "Azul", "Negro", "Blanco");
var_dump($colores);
echo "<br>";

// Object
echo "<hr>";
class Carro {
    public $color;
    public $modelo;

    public function __construct($color, $modelo) {
        $this->color = $color;
        $this->modelo = $modelo;
    }
    public function mensaje() {
        return "Mi carro es un " . $this->modelo . " " . $this->color;
    }
    public function detenerse() {
        return "Deteniendose...";
    }
}
// Objeto 1
$miCarro = new Carro("Rojo", "Chevrolet");
echo $miCarro->mensaje();
echo "<br>";
echo $miCarro->detenerse();
echo "<br>";
// Objeto 2
$miCarro = new Carro("Blanco", "Toyota");
echo $miCarro->mensaje();
echo "<br>";

// Null
echo "<hr>";
$valor = 4;
$valor = null; // Es diferente a decir $valor = " ";
var_dump($valor);

// Resource
echo "<hr>";
/**
 * Recursos externos a PHP
 * Base de Datos
 * Funciones
 * etc.
 */
 ?>