<?php

    session_start();
    
        if(isset($_SESSION['$user'])){
        header("location: app/php/registro.php");
    }



?>
<!--Indexjos-->
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="css/stylesMJ.css" rel="stylesheet">
    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
    <title>PROCASU</title>
  </head>
  <body>
    <section class="contact-box">
      <div class="row no-gutters">
        <div class="col-xl-7 col-lg-12 register-bg">

        </div>
        <div class="col-xl-5 col-lg-12 d-flex">
          <div class="container algin-self-center">
            <br><br><br><br><br>
            <h1 class="font-weight-bold text-center">¡BIENVENIDOS!</h1>
            <br>
            <h2 class="font-weight text-center">Inicie sesión</h2>
            <br>
          <div class="content m-2 p-2">
            <form class="text-center">
              <div class="form-row mb-3 ">
                  <div class="form-group col-md-8 "> 
                  
                  <div style="display: flex;">
                  <img src="img/Icono-Usuario.png" alt="" style="width: auto; height: 3rem;">
                  <input type="user" id="user1" name="user1" class="form-control form-control-user mb-3" placeholder="Usuario" v-model="txtuser"> 
                  </div>
                  <div style="display: flex;">
                  <img src="img/Icono Candado B-C.png" alt="" style="width: auto; height: 3rem;">
                  <input type="password" id="password1" name="password1" class="form-control form-control-user mb-3" placeholder="Contraseña" v-model="txtPws">
                  </div>   
                </div>
                
              </div>

            </form>
          </div>


            <div class="form-group">
              <form action="app/php/inicio.php" method="post">
              <button name="entrar" class="btn bnt-outline-dark d-inline-block text-dark mr-2 mb-3 " type="submit"> ENTRAR</button>
              <br>
              <br>
            </div>
            <div class="container algin-self-center text-center">
            <div class="a-p form-group col-md-12">
              <br>
		          <a  class="text-dark font-weight-bold" href="app/php/menu.php" target="_blank text-center" ><u>Aviso de Privacidad</u></a>
		
		          <a class="a-p2 text-dark font-weight-bold" style="margin-left: 3rem;" target="_blank" href="app/php/menu.php"><u>Política de Confidencialidad</u></a>
		        </div>
            

          </div>
          

        </div>

      </div>
     
    </section>
      <section style="background-color: white; padding-top: 1rem; " >
      <div class="setings">
                  <div style="display: flex;">
                  <a href="https://maps.app.goo.gl/UQnWxhPEntNmdiJn8"><img src="./img/Icono-de-dirección---ubicación.png" alt="proc" style="height: 1.9rem; padding-right:.5rem;" ></a><p class="font-weight-bold p-.9 text-color: primary;">MONTERREY</p>
                  </div>
                  <div class="ml-2" style="display: flex;    padding-left: .7rem;">
                  <a style="color:black;" href="tel:+52 55-4123-29116"><img src="./img/Icono-Telefono.png" alt="proc" style="height: 1.9rem; padding-right:.5rem;"></a><p class="p-.9">55-4123-29116</p>
                  </div>
                  <div class="ml-2" style="display: flex;    padding-left: .7rem;">
                  <a href="mailto: atencion@procasu.com.mx?Subject=Soy%20un%20nuevo%20usuario."><img src="./img/Icono-Correo.png" alt="proc" style="height: 1.9rem; padding-right:.5rem;"></a><p class="p-.9">atencion@procasu.com.mx</p>
                  </div>
                  <div class="ml-2" style="display: flex;    padding-left: .7rem;">
                  <a href="http://localhost/PROCASU/registro.php"><img src="./img/Icono-Sitio-web.png" alt="proc" style="height: 1.9rem; padding-right:.4rem;"></a><p class="p-.9">www.procasu.net</p>  
                  </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
  <footer class="container-fluid pie">
		<br>
    <div style="display: flex;">
      <img src="img/PROCASUpie.jpeg" alt="proc" style="height: 2.5rem;"> 
      <div style="padding-top:.8rem;">
      <div class="form-group col-12 md-36">
        <p class="text-center">|PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO Copyright<sup>©</sup> 2023-2024.| PROCASU Todos los derechos reservados </p>
        
      
      </div>
    </div>
    
    
			</footer>
  
</html>
