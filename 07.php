<?php
include 'includes/header.php';

// Métodos
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function nombreEmpleado()
    {
        echo $this->nombre . " " . $this->apellido;
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}



$pedro = new Empleado('Pedro', 'Vázquez', 'TI', 'pedrovqz69@email.com', 006);

$aidee = new Empleado('Aideé', 'Correa', 'IA', 'aidee.covi@email.com', 007);

echo "<pre>";
var_dump($pedro);
echo "</pre><br>";

echo "<pre>";
var_dump($aidee);
echo "</pre><br>";

echo $pedro->nombreEmpleado();
echo $aidee->nombreEmpleado();
