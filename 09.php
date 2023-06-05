<?php
include 'includes/header.php';

// Getters y Setters
class Empleado { 

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase
    // public, private, protected

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get - Para obtener un valor
        Set - Para modificar un valor
    */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getDepartamento()
    {
        return $this->departamento;
    }
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

}

$pedro = new Empleado('Pedro', 'Vázquez', 'TI', 'pedrovqz69@email.com', 006);
$pedro->setNombre("Antonio");

$pedro->setCodigo('2030');
$pedro->setDepartamento('Soporte');

echo $pedro->getCodigo();
echo $pedro->getNombre();
echo $pedro->getDepartamento();
echo $pedro->getEmail();
