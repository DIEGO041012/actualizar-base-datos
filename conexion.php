<?php



function connect()
{
    $hostname="localhost";
    $name="bdcliente";
    $user="root";
    $password="";
    return new PDO('mysql:host='.$hostname.';dbname='.$name,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //En el array muestra si hay un modo de error
    //Si hay un modo de error con el nombre de la base de datos
}


?>
