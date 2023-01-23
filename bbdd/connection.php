<?php

// Variables de conexion
$host = "localhost";
$dbname = "prueba01";
$username = 'postgres';
$password = '1234';
$conexion = null;
$consulta = null;

// Coneccion a la bbdd
$conexion = pg_connect("host=$host dbname=$dbname user=$username password=$password");
if($conexion){
    echo "Conexion correcta";
}else{
    echo "Ha ocurrido un rpoblema";
}

?>