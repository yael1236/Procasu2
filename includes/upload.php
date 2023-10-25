<?php
// Comprobar si se ha cargado un archivo
if (isset($_docs['archivo'])) 
    //extract($_POST);
    $indicador  = $_POST['indicador'];
    $objetivos = $_POST['objetivos'];
    $Expectativas = $_POST['Expectativas'];
    $archivo = $_POST['archivo'];
    $archivo1 = $_POST['archivo1'];
    $archivo2 = $_POST['archivo2'];
    $objetivosE = $_POST['objetivosE'];
    $Riesgos = $_POST['Riesgos'];
    $Oportunidades = $_POST['Oportunidades'];
    // Definir la carpeta de destino
    $carpeta_destino = "docs/";

    // Obtener el nombre y la extensión del archivo
    //$nombre_archivo = basename($_docs["archivo"]["name"]);
   // $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "doc" || $extension == "mp4" || $extension == "jpg"|| $extension == "jpge") {


        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_docs["archivo"] . $archivo)) {
        if (move_uploaded_file($_docs["archivo1"] . $archivo1)) {
        if (move_uploaded_file($_docs["archivo2"] . $archivo2)) {
            // Insertar la información del archivo en la base de datos
            include "db.php";
            $con0 = new SQLite3("INSERT INTO files.db (indicador, objetivos, Expectativas, archivo, archivo1, archivo2, objetivosE, Riesgos,Oportunidades) 
            VALUES ( '$indicador', '$objetivos','$Expectativas','$','$archivo','$archivo1','$archivo2','$objetivosE','$Riesgos','$Oportunidades')"); 
            $resultado = new SQLite3($conexion, $con0);
            // Insertar en la segunda base de datos
            $con1 =new SQLite3("INSERT INTO Riesgos (riesgo) VALUES ('$Riesgos')") ;
            if ($con1->query($con1) !== TRUE) {
             echo "Error al insertar en la base de datos 2: " . $con1->error;
}
            $con2 =new SQLite3("INSERT INTO ObjetivoS (obj) VALUES ('$objetivosE')") ;
            if ($con2->query($con2) !== TRUE) {
             echo "Error al insertar en la base de datos 2: " . $con2->error;
}
 
            $con3 =new SQLite3("INSERT INTO Oportnidades (oportunidades) VALUES ('$oportunidades')") ;
            if ($con3->query($con3) !== TRUE) {
             echo "Error al insertar en la base de datos 2: " . $con3->error;
}
$conn1->close();
$conn2->close();
$conn3->close();

 
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('../app/php/Gobernanza');
                </script>";
            } else {

                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('../app/php/Gobernanza');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('../app/php/Gobernanza');
            </script>";
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, DOC y DOCX.');
        location.assign('../app/php/Gobernanza');
        </script>";
    }
}
}
?>
