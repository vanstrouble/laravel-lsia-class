<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado;

$empleado->nombre = "Pedro";
$empleado->apellido = "Vázquez";
$empleado->departamento = "Desarrollo";

echo "<pre>";
var_dump($empleado);
echo "</pre>";


$empleado2 = new Empleado;

$empleado2->nombre = "Aideé";
$empleado2->apellido = "Correa";
$empleado->departamento = "Ambiental";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";