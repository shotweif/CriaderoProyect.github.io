<?php

// Variables de conexion
$host = "localhost";
$dbname = "prueba01";
$username = 'postgres';
$password = '1234';
$conexion = null;
$consulta = null;

// Variables de formulario
$form_nombre = $_REQUEST['nombre'];
$form_correo = $_REQUEST['correo'];
$form_telefono = $_REQUEST['telefono'];
$form_direccion = $_REQUEST['direccion'];

// Coneccion a la bbdd
$conexion = pg_connect("host=$host dbname=$dbname user=$username password=$password");
if($conexion){
    echo "Conexion correcta";
}else{
    echo "Ha ocurrido un rpoblema";
}

// Ingresar datos al query
$query = ("INSERT INTO clientes(nombres,correo,telefono,direccion)
             VALUES ('$form_nombre','$form_correo','$form_telefono','$form_direccion')");
    echo 'DATOS DEL CLIENTE INSERTADOS CORRECTAMENTE.';

// Ejecutar orden
$consulta = pg_query($conexion, $query);
if($consulta){
    echo 'Datos insertados correctamente';
}
pg_close();


?>