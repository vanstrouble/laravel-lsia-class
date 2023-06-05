<?php
include 'includes/header.php';

// Constructor property Promotion
class Empleado { 
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
}


$pedro = new Empleado('Pedro', 'Vázquez', 'TI', 'pedrovqz69@email.com', 006);
$aidee = new Empleado('Aideé', 'Correa', 'IA', 'aidee.covi@email.com', 007);

echo "<pre>";
var_dump($pedro);
echo "</pre><br>";

echo "<pre>";
var_dump($aidee);
echo "</pre><br>";