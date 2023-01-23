<?php

$host = "localhost";
$dbname = "prueba01";
$username = 'postgres';
$password = '1234';
$conexion = null;
$consulta = null;


// Variables de formulario
$form_consulta = $_REQUEST['inputCaller'];

// Coneccion a la bbdd
$conexion = pg_connect("host=$host dbname=$dbname user=$username password=$password");
if($conexion){
    echo "Conexion correcta";
}else{
    echo "Ha ocurrido un rpoblema";
}

// Ingresar consulta al query
$query = ("$form_consulta");

// Ejecutar orden
$consulta = pg_query($conexion, $query);
if($consulta){
    if(pg_num_rows($consulta)>0){
        echo "<p>Listado de personas <br>";
        echo "---------------------------</p>";
        while($obj=pg_fetch_object($consulta)){
            echo $obj."<br>";
        }
    }
}
pg_close();


?>