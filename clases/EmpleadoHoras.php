<?php 
    namespace MisClases; 


    require_once "./clases/Empleado.php";

    final class EmpleadoHoras extends Empleado {
        const PRECIO_HORA=9.39;
        private int $horas;

        public function __construct(
            string $nif,
            string $nombre,
            int $edad,
            string $departamento,
            int $horas) {
            
                parent::__construct(
                    $nif,
                    $nombre,
                    $edad,
                    $departamento);
                
                $this->horas=$horas;
            
        }

        public function setNumeroHoras(int $horas){
            $this->horas=$horas;
        }
        public function getNumeroHoras():int {
            return (int)$this->horas;
        }
        public function calcularSueldo():float {
            return (float)self::PRECIO_HORA*$this->horas;
        }

        public function __toString()
        {
            return (string)parent::__toString()." / ".$this->getNumeroHoras();
        }

       
    }

?>

