<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "archi.db";


$consulta= new SQLite3 ($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
$consulta -> close();


}

?>;
