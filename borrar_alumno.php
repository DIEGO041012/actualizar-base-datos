<?php

include("conexion.php");
$pdo=connect();
try
{
    $sql="DELETE FROM alumno WHERE id = :id";
    $query= $pdo->prepare($sql);
    $query->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
    $query->execute();
}
catch(PDOException $e)
{
    echo 'PDOException: '. $e->getMessage();
}
include('lista_alumnos.php');

?>