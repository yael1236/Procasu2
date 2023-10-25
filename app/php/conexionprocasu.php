<?php
$servername = "localhost"; // La dirección del servidor de MySQL
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$database = "procasu"; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a MySQL";


// Puedes ejecutar consultas SQL aquí

// Cerrar la conexión
$conn->close();
?>
