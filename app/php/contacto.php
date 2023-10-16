<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $errors = array();

    if (empty($nombre)) {
        $errors[] = 'El campo nombre es obligatorio';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'La dirección de correo electrónico no es válida';
    }

    if (empty($asunto)) {
        $errors[] = 'El campo asunto es obligatorio';
    }

    if (empty($mensaje)) {
        $errors[] = 'El campo mensaje es obligatorio';
    }

    if (count($errors) == 0) {

        $msj = "De: $nombre <a href='mailto:$email'>$email</a><br>";
        $msj .= "Asunto: $asunto<br><br>";
        $msj .= "Cuerpo del mensaje:";
        $msj .= '<p>' . $mensaje . '</p>';
        $msj .= "--<p>Información enviada desde el formulario </p>";

        $mail = new PHPMailer(true);

        try {
           // $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = ' smtp.gmail.com ';
            $mail->SMTPAuth = true;
            $mail->Username = '21307004@utfv.edu.mx';
            $mail->Password = 'marianasanchez160311';
            $mail->Port = 587;

            $mail->setFrom('marianasanchez30330@gmail.com', 'Emisor');
            $mail->addAddress('21307004@utfv.edu.mx', 'Receptor');
            //$mail->addReplyTo('otro@dominio.com');

            $mail->isHTML(true);
            $mail->Subject = 'Formulario de contacto';
            $mail->Body =$msj;

            $mail->send();

            $respuesta = 'Correo enviado';
        } catch (Exception $e) {
            $respuesta = 'Mensaje ' . $mail->ErrorInfo;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="./PHPMailer/css/stylesMJ.css">
    <link rel="stylesheet" href="../../style-nav.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Bootstrap Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<meta charset="UTF-8">
	
    <title>Contacto</title>
</head>

<div class="d-flex" id="content-wrapper">

    <!-- MENU -->
    <div id="sidebar-container" class="bg-primary" style=" top:0; height:auto;">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">PROCASU</h4>
            </div>
            <div class="menu">
            <a href="#" class="m-3 d-inline-block btn  d-block  " style="padding:1rem; background-color: var(--procasu3); text-align: center; ">
                    <img src="../../img/Icono-Herramientas-PROCASU.png" alt="herramientas" class="iconos " style="margin-right: .5rem;">
                    Herramientas PROCASU
                </a>
                <br>
                <br>
                <a href="#" class="m-3 d-inline-block btn d-block   " style="padding:1rem; background-color: var(--procasu3); margin-left: rem;  ">
                    <img src="../../img/Icono-Biblioteca-Digital.png" alt="herramientas" class="iconos " style="margin-right: 3rem;">
                    Biblioteca Digital
                </a>
                <br>
                <a href="#" class="m-3 d-inline-block btn d-block " style="padding:1rem; background-color: var(--procasu3);   ">
                    <img src="../../img/Icono-Conoce-PROCASU.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    Conoce PROCASU
                </a>
                <br>
                <a href="../php/contacto.php" class="m-3 d-inline-block btn  d-block " style="padding:1rem; background-color: var(--procasu3); ">
                    <img src="../../img/Icono-Necesitas-Ayuda.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    ¿Necesitas Ayuda?
                </a>
            </div>
        </div>
    <!-- Fin MENU -->
        <div class="w-100">

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg style="color: blue;" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
                    nombre usuarios
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../php/perfil.php">Mi perfil</a>
                      <a class="dropdown-item" href="../php/expediente.php">Expediente</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../index.php">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <main style="height:auto; width:auto;">
          <div style="display: flex; margin:none; padding:none; height:90%; ">
        <div class="container py-3">
            <header class="mb-4 border-bottom">
                <h1 class="fs-4">Contacto</h1>
            </header>

            <?php
            if (isset($errors)) {
                if (count($errors) > 0) {
            ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php
                                foreach ($errors as $error) {
                                    echo $error . '<br>';
                                }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <form style="margin-left: 1rem;" class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                        
                        <div class="form-group col-12 col-sm-6">
                            <label for="nombre" class="form-label"> Nombre</label>
                            <input type="text" style="width: 21.5rem;" class="form-control" id="nombre" name="nombre" required autofocus>
                        </div>
                        <div >
                        <div class="form-group col-12 col-sm-6">
                            <label for="email" class="form-label"> Correo electrónico</label>
                            <input type="email" style="width: 21.5rem;" class="form-control" id="email" name="email" required>
                        </div>
                    
                        <div class="form-group col-12 col-sm-6">
                            <label for="asunto" class="form-label"> Asunto</label>
                            <input type="text" style="width: 21.5rem;" class="form-control" id="asunto" name="asunto" required>
                        </div>
                        </div>
                        <div >
                        <div class="form-group col-12 col-sm-6">
                            <label for="mensaje" class="form-label"> Mensaje</label>
                            <textarea class="form-control" style="width: 21.5rem;" id="mensaje" name="mensaje" rows="5" required></textarea>
                        </div>
                        <div class="form-group col-12 col-sm-6 col-lg-4">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg container-fluid">Enviar</button>
                        </div>
                        </div>
                    </form>         
								</div>
                                <section style="width: 18rem; height:10rem; color:black; font-size:1.6rem;">
									<div class="container aline:left;">
										<div class="row">
											<div class="col-2 text-right">
											<i class="bi bi-whatsapp"></i>
											</div>
											<div class="col-10 p-0" ><a style="color:black;" href="https://wa.me/5541232916">Whatsapp PROCASU</a>
                                            </div>
											<div class="col-2 text-right" class="iconos">
                                            <img src="../../Iconos/Icono-Telefono.png" width="35px">
											</div>
											<div class="col-9 p-6"><a style="color:black;" href="tel:+52 55-4123-29116">Línea PROCASU</a></div>
											</div>
                                            <span style="font-size:0.9rem;">Contactate con nosotros al número que aparece abajo.</span>
                                            <br>
                                            <span style="font-size: 17px; font-weight: bold;">55-4123-29116</span><br>
                                            <small style="font-size:0.9rem;">Horario de atención al cliente:</small><br>
                                             <small style="font-size:0.9rem;">Lunes - Viernes de 09:00: 18:00</small>
                                         </div>
                                         </section>
            </div>
									</div>
								</div>
        
            <?php if (isset($respuesta)) { ?>
                <div class="row py-3">
                    <div class="col-lg-6 col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $respuesta; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php } ?>

            
            
      
          </main>
         
    
          <!-- Fin Navbar -->

       

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
</body>
<footer >
            <br>
					<p class="text-center">Copyright <sup>©</sup> 2023-2024 Procasu todos los derechos reservados </p>
				
            </footer>

</html>
    