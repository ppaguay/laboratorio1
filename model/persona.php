<?php
class Persona
{
	
    public $id;
    public $Nombre;
    public $Apellido;
    public $Sexo;
    
    public $FechaNacimiento;
    
    public $Correo;

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getApellido() {
        return $this->Apellido;
    }

    function getSexo() {
        return $this->Sexo;
    }

    function getFechaNacimiento() {
        return $this->FechaNacimiento;
    }

    function getCorreo() {
        return $this->Correo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }

    function setFechaNacimiento($FechaNacimiento) {
        $this->FechaNacimiento = $FechaNacimiento;
    }

    function setCorreo($Correo) {
        $this->Correo = $Correo;
    }


        

	
}