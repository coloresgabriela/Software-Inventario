<?php
    $servidor = "localhost";
    $nombredeusuario = "root";
    $password = "root";

    $conexion = new mysqli( $servidor, $nombreusuario, $password);
    if($conexion->connect_error){
    	die("conexion fallida: " . $conexion->connect_error);
    }

    $sql = "CREATE DATABASE todolistDB";
    if($conexion->query($sql) === true){
    	echo"Base de datos creada correctamente... ";

    }else{
    	echo"error a crear base de datos: " . $conexion->eror);
    }


    ?>



    <?php
$con = mysql_connect('localhost','root','','inventarios');
$consulta = 'select * from inventarios';
$ejecuta = mysql_query($consulta);
?>