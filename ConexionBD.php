<?php
//Archivo de conexión a la base de datos.
$nombreServidor='localhost';
$usuario='root';
$contraseña='';
$baseDatos='Administracion';

try{
    //Establece la conexión.
    $conexionBD=mysqli_connect($nombreServidor,$usuario , $contraseña, $baseDatos);
    //Recoge la excepción si la conexión no se ha podido realizar.
}catch(Exception $exception){
    $mesaje= "<p class='mensaje'>No es posible realizar la conexión con la base de datos.<br>".
            $exception->getMessage()."</p>";
    die();
}