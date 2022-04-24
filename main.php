<?php 

require_once "./clases/Empleado.php";
require_once "./clases/EmpleadoTemporal.php";
require_once "./clases/EmpleadoFijo.php";

try{
    $empleado=new EmpleadoTemporal("123456789","Jesús Gomez",30,"it");
   // print $empleado->getNombre()." Se ejecuto";
    print $empleado;
    print "\n";
    $empleado->setEdad(50);
    print $empleado;
    print "\n";
    $empleadoFijo=new EmpleadoFijo("366566239","Anotonio Gonzalez",25,"Contabilidad",2015);
    print "\nEmpleado fijo \n";
    print $empleadoFijo;
    print "\nSalario \n";
    print $empleadoFijo->calcularSueldo();
    print "\n";
}catch(Exception $e) {
    print $e->getMessage();
}



