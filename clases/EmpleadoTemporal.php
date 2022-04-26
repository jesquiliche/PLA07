<?php
    namespace MisClases; 
    require_once "./clases/Empleado.php";
    use \Datetime;
    use \Exception;

    final class EmpleadoTemporal extends Empleado {
        const SALARIO=1349.27;
        private DateTime $fechaAlta;
        private DateTime $fechaBaja;

        public function __construct(
            string $nif,
            string $nombre,
            int $edad,
            string $departamento,
            DateTime $fechaAlta,
            DateTime $fechaBaja) {

                if($fechaAlta>$fechaBaja) 
                    throw new Exception("La fecha de alta no puedes ser mayor que la fecha de baja", 1);
                parent::__construct($nif,$nombre,$edad,$departamento);
                $this->setFechaAlta($fechaAlta);
                $this->setFechaBaja($fechaBaja);
           
        }

        public function setFechaAlta(DateTime $fechaAlta){
            $this->fechaAlta=$fechaAlta;
            
        }

        public function setFechaBaja(DateTime $fechaBaja){
            $this->fechaBaja=$fechaBaja;
        }

        public function getFechaAlta():string {
            return $this->fechaAlta->format("d/m/Y");
        }

        public function getFechaBaja():string{
            return $this->fechaBaja->format("d/m/Y");
        }

        public function calcularSueldo():float
        {
            return self::SALARIO;
        }

        public function __toString()
        {
            return (string)parent::__toString()." / ".$this->getFechaAlta()." / ".$this->getFechaBaja();
        }
    }

?>

