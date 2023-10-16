<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$buscar = isset($_POST['buscar']) ? $_POST['buscar'] : '';
// Conexion a Data
$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");

// Consulta a SQL
$cs = $con -> query("INSERT INTO buscar (buscar) VALUES ('$buscar')");

// Close Conexion
$con -> close();

// html
echo "
<script>
    window.location='../../buscador.php'
</script>


";

?>