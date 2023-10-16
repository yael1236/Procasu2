<?php

    session_start();
    
        if(isset($_SESSION['$user'])){
        header("location: app/php/registro.php");
    }



?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="google-site-verification" content="qnDadobuivgM5xcw5VnpxU7Qp_18voEGWooZHQsKYUc" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title>PROCASU</title>
	<meta name="description" content="PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO" />
	

</head>
<body class="parallax">
	<div class="container-fluid fondoColor" >
		<div class="col-12 m-0 p-0">			<!-- ENCABEZADO -->
		/* The `<nav>` element with the class `navbar navbar-expand-lg navbar-light fixed-top grisNav` is
		creating a navigation bar at the top of the page. The `navbar` class sets the basic styling for
		the navigation bar, while `navbar-expand-lg` makes it expand to full width on large screens. The
		`navbar-light` class sets a light color scheme for the navigation bar, and `fixed-top` makes it
		stick to the top of the viewport even when scrolling. Finally, `grisNav` is a custom class that
		may define additional styling for the navigation bar. */
		<nav class="navbar navbar-expand-lg navbar-light fixed-top grisNav">
			<img src="img/logoNAV-01.svg" class="animated fadeInLeft" alt="Logo NAV">
		</div>
		<div class="text-bg-primary p-3" style=" margin-top: 6rem; width: 650px; margin: 0 auto; height: 748px;">
			<h1 class="fw-danger h1 mb-4 text-center " -apple-system="roboto">¡Bienvenido a PROCASU!</h1>
			<h2 class="fw-danger h2 mb-4 text-center " style="font-size: 1em;">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO</h2>
			
		<main style="width: 650px; margin: 0 auto; height: 600px; border-radius: 2.5rem; background-color: #c8c8c8;">
			<div class="row justify-content-center align-items-center vh-100 animate__animated animate__fadeIn">
				
					<div class="col-md-10 mx-auto">
						<div class="row justify-content-center align-items-center vh-100" style="margin-top: 1rem;">
							
							<h3 class="fx-danger h2 mb-4 text-center" -apple-system="roboto">INICIO DE SESIÓN</h1>
							<div class="text-center" style="position: relative; width: 100%; padding:0%;">
								<img src="img/loogin.png" class="img-fluid">
                			</div>
							<div class="mx-2 mx-md-5 my-md-5 my-3" style=" text-align: center; padding-right: 0.75rem; padding-left: 0.75rem;">
							<form action="app/php/login.php" method="post">
								<input type="user" id="user1" name="user1" class="form-control form-control-user mb-3" placeholder="Usuario" v-model="txtuser">
								<input type="password" id="password1" name="password1" class="form-control form-control-user mb-3" placeholder="Contraseña" v-model="txtPws">
								
								<button name="entrar" class="btn btn-success form-control-user1 my-8" type="submit" style=" align-items: center; width:17rem; font-size: 1.2em; font-weight: bolder;">Inicio</button>
								
							</div>
							</form>
					</div>
			</div>
		</div>
		</main>
	</div>
	
	
	<hr>
	
	<div class="a-p">
		<a href="app/php/menu.php" target="_blank">Aviso de Privacidad</a>
		
		<a class="a-p1" style="margin-left: rem;" target="_blank" href="app/php/menu.php">Política de Confidencialidad</a>
		</div>
	<footer class="container-fluid pie">
		<br>
							<p class="text-center"><sup>©</sup> CORSEC. Todos los derechos reservados. | Diseñado por: <a href="http://corsec.com.mx/" class="text-muted">corsec.com.mx</a></p>
				<br>
				<p>Necesitas ayuda contactanos por correo:  <a href="mailto:celyncabrera19@gmail.com">celyncabrera19@gmail.com</a>
				</p>
			</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	
              <script>
              new WOW().init();
              </script>
</body>
</html>