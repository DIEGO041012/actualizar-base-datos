<?php

include('conexion.php');
$pdo=connect();//Esta variable almacena la funcion de conectar
//Crear la consulta de agregar alumno
try//try captura datos
{
    $sql="INSERT INTO alumno (nombres,apellidos,email,telefono) VALUES (:nombres,:apellidos,:email,:telefono)";
    $query=$pdo->prepare($sql);
    $query->bindParam(':nombres', $_POST['nombres'], PDO::PARAM_STR);//bindParam es un metodo para pasar valores 
	$query->bindParam(':apellidos', $_POST['apellidos'], PDO::PARAM_STR);//PARAM_STR representa un tipo de dato-Varchar-char etc
	$query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
	$query->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
	$query->execute();//pasa valores para ejecutar setencias
}
catch (PDOException $e)
{
    echo 'PDOException: '.$e->getMessage();
}
include('lista_alumnos.php');


?>