<?php 
    require_once "./clases/Empleado.php";

    final class EmpleadoTemporal extends Empleado {
        public function __construct(string $nif,string $nombre,int  $edad,string $departamento) {
            parent::__construct($nif,$nombre,$edad,$departamento);

            
        }

        public function calcularSueldo(){

        }


       
    }

?>

