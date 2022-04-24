<?php 

require_once "./clases/Empleado.php";
require_once "./clases/EmpleadoTemporal.php";
require_once "./clases/EmpleadoFijo.php";
require_once "./clases/EmpleadoHoras.php";

use MisClases\EmpleadoTemporal;
use MisClases\Empleado;
use MisClases\EmpleadoFijo;
use MisClases\EmpleadoHoras;
use \DateTime;

//funcion polimorfica imprime cualquier tipo de empleado
//mientras derive la clase Empleado. Notese el primer parámetro
//de la función
function imprimirEmpleado(Empleado $empleado,string $titulo){
    print $titulo."\n";
    print $empleado;
    print "\nSalario \n";
    print $empleado->calcularSueldo();
    print "\n\n";
}

try{
    
    $empleado=new EmpleadoTemporal(
        "123456789",
        "Jesús Gomez",
        30,"IT",
        DateTime::createFromFormat('d-m-Y', '10-12-2020'),
        DateTime::createFromFormat('d-m-Y', '10-10-2022')
    );
    
    imprimirEmpleado($empleado,"Empleado Temporal");
    
    $empleadoFijo=new EmpleadoFijo(
        "366566239",
        "Antonio Gonzalez",
        25,"Contabilidad",
        2015);
    
    imprimirEmpleado($empleadoFijo,"Empleado Fijo");

    $empleadoHoras=new EmpleadoHoras(
        "366566239",
        "Dolores Martin",
        45,
        "Limpieza",250);
    imprimirEmpleado($empleadoHoras,"Empleado Horas");
   
}catch(Exception $e) {
    print $e->getMessage();
}




