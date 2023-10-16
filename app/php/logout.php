<?php
session_start(); // Iniciar la sesión

// Cerrar la sesión
session_unset();
session_destroy();


// Cerrar la conexión con la base de datos SQLite3

$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");

$con -> close();
?>