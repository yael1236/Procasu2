<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
$servername = "localhost"; // La dirección del servidor de MySQL
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$database = "procasu"; // Nombre de la base de datos


$NomComite= isset($_POST['NomComite']) ? $_POST['NomComite'] : '';
$foto0= isset($_POST['foto0']) ? $_POST['foto0'] : '';
$NomInt0= isset($_POST['NomInt0']) ? $_POST['NomInt0'] : '';
$Puesto0= isset($_POST['Puesto0']) ? $_POST['Puesto0'] : '';
$RFC0= isset($_POST['RFC0']) ? $_POST['RFC0'] : '';
$Correo0= isset($_POST['Correo0']) ? $_POST['Correo0'] : '';
$NumContac0= isset($_POST['NumContac0']) ? $_POST['NumContac0'] : '';
$ContacAdd0= isset($_POST['ContacAdd0']) ? $_POST['ContacAdd0'] : '';
$foto1= isset($_POST['foto1']) ? $_POST['foto1'] : '';
$NomInt1= isset($_POST['NomInt1']) ? $_POST['NomInt1'] : '';
$Puesto1= isset($_POST['Puesto1']) ? $_POST['Puesto1'] : '';
$RFC1= isset($_POST['RFC1']) ? $_POST['RFC1'] : '';
$Correo1= isset($_POST['Correo1']) ? $_POST['Correo1'] : '';
$NumContac1= isset($_POST['NumContac1']) ? $_POST['NumContac1'] : '';
$ContacAdd1= isset($_POST['ContacAdd1']) ? $_POST['ContacAdd1'] : '';
$foto2= isset($_POST['foto2']) ? $_POST['foto2'] : '';
$NomInt2= isset($_POST['NomInt2']) ? $_POST['NomInt2'] : '';
$Puesto2= isset($_POST['Puesto2']) ? $_POST['Puesto2'] : '';
$RFC2= isset($_POST['RFC2']) ? $_POST['RFC2'] : '';
$Correo2= isset($_POST['Correo2']) ? $_POST['Correo2'] : '';
$NumContac2= isset($_POST['NumContac2']) ? $_POST['NumContac2'] : '';
$ContacAdd2= isset($_POST['ContacAdd2']) ? $_POST['ContacAdd2'] : '';
$foto3= isset($_POST['foto3']) ? $_POST['foto3'] : '';
$NomInt3= isset($_POST['NomInt3']) ? $_POST['NomInt3'] : '';
$Puesto3= isset($_POST['Puesto3']) ? $_POST['Puesto3'] : '';
$RFC3= isset($_POST['RFC3']) ? $_POST['RFC3'] : '';
$Correo3= isset($_POST['Correo3']) ? $_POST['Correo3'] : '';
$NumContac3= isset($_POST['NumContac3']) ? $_POST['NumContac3'] : '';
$ContacAdd3= isset($_POST['ContacAdd3']) ? $_POST['ContacAdd3'] : '';
$foto4= isset($_POST['foto4']) ? $_POST['foto4'] : '';
$NomInt4= isset($_POST['NomInt4']) ? $_POST['NomInt4'] : '';
$Puesto4= isset($_POST['Puesto4']) ? $_POST['Puesto4'] : '';
$RFC4= isset($_POST['RFC4']) ? $_POST['RFC4'] : '';
$Correo4= isset($_POST['Correo4']) ? $_POST['Correo4'] : '';
$NumContac4= isset($_POST['NumContac4']) ? $_POST['NumContac4'] : '';
$ContacAdd4= isset($_POST['ContacAdd4']) ? $_POST['ContacAdd4'] : '';
$foto5= isset($_POST['foto5']) ? $_POST['foto5'] : '';
$NomInt5= isset($_POST['NomInt5']) ? $_POST['NomInt5'] : '';
$Puesto5= isset($_POST['Puesto5']) ? $_POST['Puesto5'] : '';
$RFC5= isset($_POST['RFC5']) ? $_POST['RFC5'] : '';
$Correo5= isset($_POST['Correo5']) ? $_POST['Correo5'] : '';
$NumContac5= isset($_POST['NumContac5']) ? $_POST['NumContac5'] : '';
$ContacAdd5= isset($_POST['ContacAdd5']) ? $_POST['ContacAdd5'] : '';
$foto6= isset($_POST['foto6']) ? $_POST['foto6'] : '';
$NomInt6= isset($_POST['NomInt6']) ? $_POST['NomInt6'] : '';
$Puesto6= isset($_POST['Puesto6']) ? $_POST['Puesto6'] : '';
$RFC6= isset($_POST['RFC6']) ? $_POST['RFC6'] : '';
$Correo6= isset($_POST['Correo6']) ? $_POST['Correo6'] : '';
$NumContac6= isset($_POST['NumContac6']) ? $_POST['NumContac6'] : '';
$ContacAdd6= isset($_POST['ContacAdd6']) ? $_POST['ContacAdd6'] : '';
$foto7= isset($_POST['foto7']) ? $_POST['foto7'] : '';
$NomInt7= isset($_POST['NomInt7']) ? $_POST['NomInt7'] : '';
$Puesto7= isset($_POST['Puesto7']) ? $_POST['Puesto7'] : '';
$RFC7= isset($_POST['RFC7']) ? $_POST['RFC7'] : '';
$Correo7= isset($_POST['Correo7']) ? $_POST['Correo7'] : '';
$NumContac7= isset($_POST['NumContac7']) ? $_POST['NumContac7'] : '';
$ContacAdd7= isset($_POST['ContacAdd7']) ? $_POST['ContacAdd7'] : '';
$foto8= isset($_POST['foto8']) ? $_POST['foto8'] : '';
$NomInt8= isset($_POST['NomInt8']) ? $_POST['NomInt8'] : '';
$Puesto8= isset($_POST['Puesto8']) ? $_POST['Puesto8'] : '';
$RFC8= isset($_POST['RFC8']) ? $_POST['RFC8'] : '';
$Correo8= isset($_POST['Correo8']) ? $_POST['Correo8'] : '';
$NumContac8= isset($_POST['NumContac8']) ? $_POST['NumContac8'] : '';
$ContacAdd8= isset($_POST['ContacAdd8']) ? $_POST['ContacAdd8'] : '';
$foto9= isset($_POST['foto9']) ? $_POST['foto9'] : '';
$NomInt9= isset($_POST['NomInt9']) ? $_POST['NomInt9'] : '';
$Puesto9= isset($_POST['Puesto9']) ? $_POST['Puesto9'] : '';
$RFC9= isset($_POST['RFC9']) ? $_POST['RFC9'] : '';
$Correo9= isset($_POST['Correo9']) ? $_POST['Correo9'] : '';
$NumContac9= isset($_POST['NumContac9']) ? $_POST['NumContac9'] : '';
$ContacAdd9 = isset($_POST['ContacAdd9']) ? $_POST['ContacAdd9'] : '';

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "conecion exitosa";
// Puedes ejecutar consultas SQL aquí
$cs = $conn -> query("INSERT INTO `comite`(`ID`, `NomComite`, `foto0`,`NomInt0`, `Puesto0`, `RFC0`, `Correo0`, `NumContac0`, `ContacAdd0`, `foto1`, `NomInt1`, `Puesto1`, `RFC1`, `Correo1`, `NumContac1`, `ContacAdd1`, `foto2`, `NomInt2`, `Puesto2`, `RFC2`, `Correo2`, `NumContac2`, `ContacAdd2`, `foto3`, `NomInt3`, `Puesto3`, `RFC3`, `Correo3`, `NumContac3`, `ContacAdd3`, `foto4`, `NomInt4`, `Puesto4`, `RFC4`, `Correo4`, `NumContac4`, `ContacAdd4`, `foto5`, `NomInt5`, `Puesto5`, `RFC5`, `Correo5`, `NumContac5`, `ContacAdd5`, `foto6`, `NomInt6`, `Puesto6`, `RFC6`, `Correo6`, `NumContac6`, `ContacAdd6`, `foto7`, `NomInt7`, `Puesto7`, `RFC7`, `Correo7`, `NumContac7`, `ContacAdd7`, `foto8`, `NomInt8`, `Puesto8`, `RFC8`, `Correo8`, `NumContac8`, `ContacAdd8`, `foto9`, `NomInt9`, `Puesto9`, `RFC9`, `Correo9`, `NumContac9`, `ContacAdd9`) VALUES ('[value-1]','$NomComite','$foto0','$NomInt0', '$Puesto0', '$RFC0', '$Correo0', '$NumContac0', '$ContacAdd0', '$foto1', '$NomInt1', '$Puesto1', '$RFC1', '$Correo1', '$NumContac1', '$ContacAdd1', '$foto2', '$NomInt2', '$Puesto2', '$RFC2', '$Correo2', '$NumContac2', '$ContacAdd2', '$foto3', '$NomInt3', '$Puesto3', '$RFC3', '$Correo3', '$NumContac3', '$ContacAdd3', '$foto4', '$NomInt4', '$Puesto4', '$RFC4', '$Correo4', '$NumContac4', '$ContacAdd4', '$foto5', '$NomInt5', '$Puesto5', '$RFC5', '$Correo5', '$NumContac5', '$ContacAdd5', '$foto6', '$NomInt6', '$Puesto6', '$RFC6', '$Correo6', '$NumContac6', '$ContacAdd6', '$foto7', '$NomInt7', '$Puesto7', '$RFC7', '$Correo7', '$NumContac7', '$ContacAdd7', '$foto8','$NomInt8', '$Puesto8', '$RFC8', '$Correo8', '$NumContac8', '$ContacAdd8', '$foto9', '$NomInt9', '$Puesto9', '$RFC9', '$Correo9', '$NumContac9', '$ContacAdd9')");

// Cerrar la conexión
$conn->close();
?>
