<?php

    session_start();
    
        if(isset($_SESSION['$Email'])){
        header("location: app/php/registro.php");
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body style="background-color: #dddd;">
<!--ACTUALIZADO 270902023 -->
<main> 
<div class=" mb-3" style="max-width: 100%; max-height: 50rem; background-color: #dddd;">
  <div class="row g-0" style="background-color: #dddd;">
    <div class="col-md-6">
      <img src="img/PROCASU.jpg" class="img-fluid rounded-start" style="height: 100%; margin-left: 2rem;" alt="...">
    </div>
    <div class="col-md-6" style="background-color: #dddd; align-content: center; ">
    <br><br>
      <div style="margin: 3rem;">
      <div>
      <h1 class="fw-light h1 mb-4 text-center">¡Bienvenido!</h1>
      
      </div>
      <p style="text-align: center; font-size:xx-large;">Iniciar Sesión</p>
                        <form action="app/php/login.php" method="POST">
                            <input type="text" class="form-control form-control-user mb-3" placeholder="Correo Electrónico" name="Email">
                            <input type="password"  class="form-control form-control-user mb-3" placeholder="Contraseña" name="password" >

                            <div class="form-group" v-html="datos">
                            </div>
                            <button style="font-size:1.4rem; padding:.2rem;" class="btn btn-primary form-control form-control-user1 my-3" type="submit" value="Iniciar sesión">Inicio</button>
                        </form>
                        <hr>
                        <div style="display: flex;">
                        <div class="text-center">
                          <a href="docs/AvisoPrivacidad.pdf">Aviso de Privacidad</a>
                        </div>
                        <div class="text-center" style="margin-left:70%;">
                          <a href="docs/Vx-PR-ESR__php echo $Fecha; ____php echo $nomEmp; __ (7).pdf">Politicas</a>
                        </div>
                   </div>
                    </div>
    </div>
  </div>
</div>
</main>
<div>
  
</div>
</body>
<footer >    
<div style="display: flex;">
    <img src="img/PROCASUpie.jpeg" alt="proc" style="height: 2.3rem; margin:.5rem; ">
    <div style="width: 33rem; padding-top:.3rem; margin-left:1rem;">
    <p style="font-size: .7rem; margin-top:.9rem; padding-left:.3rem; border-left:solid #ffff;">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO</p>
    </td>
   
    </div>
</div>
</footer>
</html>