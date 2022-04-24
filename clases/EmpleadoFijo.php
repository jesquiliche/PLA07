<?php 
    require_once "./clases/Empleado.php";

    final class EmpleadoFijo extends Empleado {
        const SALARIO_BASE=1091.13;
        const COMPLEMENTO=192.85;
        private int $anoAlta;

        public function __construct(string $nif,
            string $nombre,int $edad,
            string $departamento,int $ano) {
            
                parent::__construct($nif,
                $nombre,$edad,$departamento);

                $this->setAnoAlta($ano);
        }

        public function setAnoAlta(int $ano){
            $this->anoAlta=$ano;
        }

        public function getAnoAlta():int{
            return (int)$this->anoAlta;
        }
        public function calcularSueldo():float{
            $Year = date("Y");
            $numAnos=$Year-$this->anoAlta;
            return (float)self::SALARIO_BASE+(self::COMPLEMENTO*$numAnos);
        }

        public function __toString()
        {
            return (string)parent::__toString()." / ".$this->anoAlta." / ".$this->calcularSueldo();       
        }
            
       
    }

?>

