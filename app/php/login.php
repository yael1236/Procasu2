<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();
$con = new SQLite3("../data/Usuarios.db") or die("Problemas para conectar");
$user = $_POST['user1'];
$password = $_POST['password1'];
$query = "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$password'";
$result = $con->query($query);
if ($result->fetchArray()) {
    // Inicio de sesión exitoso
    header("location: inicio.php");
    echo "Bienvendido";
} else {
    // Credenciales incorrectas
    echo "Credenciales incorrectas";
    header("location: ../../index.php");
    
}
$con -> close();
?>
