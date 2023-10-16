<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$Responsable = isset($_POST['Responsable']) ? $_POST['Responsable'] : '';
$nomEmp = isset($_POST['nomEmp']) ? $_POST['nomEmp'] : '';
$Fecha = isset($_POST['Fecha']) ? $_POST['Fecha'] : '';
$ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
$PyME = isset($_POST['PyME']) ? $_POST['PyME'] : '';
$sector = isset($_POST['sector']) ? $_POST['sector'] : '';
$idex = isset($_POST['idext']) ? $_POST['idex'] : '';
$monto1 = isset($_POST['monto1']) ? $_POST['monto1'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$Hora = isset($_POST['Hora']) ? $_POST['Hora'] : '';
$fecha1 = isset($_POST['fecha1']) ? $_POST['fecha1'] : '';
$fecha2 = isset($_POST['fecha2']) ? $_POST['fecha2'] : '';
$fecha3 = isset($_POST['fecha3']) ? $_POST['fecha3'] : '';
$fecha4 = isset($_POST['fecha4']) ? $_POST['fecha4'] : '';
$numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : '';
// Conexion a Data
$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");
// Consulta a SQL
$cs2 = $con -> query("SELECT * FROM cotizacion ORDER BY id DESC LIMIT 1");
while ($resul = $cs2 -> fetchArray()) {

       $id = $resul['id'];
$cs = $con -> query("DELETE FROM cotizacion WHERE id='$id'");
}

// Close Conexion
$con -> close();

// html

echo "
<script>
       window.location='../../cotizacion.php'
</script>
";

?>