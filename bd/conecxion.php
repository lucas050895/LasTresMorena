<?php
// CONECXION A LA BASE DE DATOS (MYSQL)
    // $conexion = mysqli_connect("localhost","root","","lucasconde");
    $server = 'localhost';
    $database = 'LasTresMorenas';
    $username = 'root';
    $password ='';

    //FORMA ORIENTADA A OBJETO
    $conexion = new mysqli($server,$username,$password, $database);
    //COMPROBAR CONECXION
    if($conexion->connect_errno){
        die("Fallo la conecxion:  {$conexion->connect_error}");
    };

?>