<?php 

namespace MisClases; 

abstract class Empleado 
{

    protected string $nif;
    protected string $nombre;
    protected int $edad;
    protected string $departamento;
    public function __construct(string $nif,string $nombre,int  $edad,string $departamento) {
        $this->setNif($nif);
        $this->setNombre($nombre);
        $this->setEdad($edad);
        $this->setDepartamento($departamento);

    }
    
    abstract public function calcularSueldo();

    public function setNif(string $nif){
        if(strlen($nif)!==9) {
            throw new Exception("El nif debe contener 9 caracteres",10);
        }
        $this->nif=$nif;
    }

    public function setNombre(string $nombre){
        if(strlen($nombre)==0){
            throw new Exception("El nombre no puede estar vacio",10);
        }
        $this->nombre=$nombre;
    }

    
    public function setEdad(int $edad){
        if(intval($edad)<16 || $edad>67) {
            throw new Exception("La edad debe estar comprendida entre 16 y 67 años. No seas explotador.",10);
        }

        $this->edad=$edad;
    }

    public function setDepartamento(string $departamento){
        if(strlen($departamento)===0){
            throw new Exception("No se ha informado el departamento",10);
        }
        $this->departamento=$departamento;
    }

    public function getNif():string{
      //  print $this->nif;
        return (string)$this->nif;
    }
    public function getNombre():string{
        return (string)$this->nombre;
    }

    public function getEdad():string{
        return (string)$this->edad;
    }

    public function getDepartamento():string{
        return (string)$this->departamento;
    }

    public function __toString()
    {
        return (string)"Datos / ".$this->getNif()." / ".$this->getNombre()." / ".$this->getEdad()." / ".$this->getDepartamento();
    }

    
}

?>