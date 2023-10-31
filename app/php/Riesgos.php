<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/style-nav.css">
    <title>PROCASU</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg  " style="width: 102rem;">
        <a class="navbar-brand" href="#">
            <img src="../../img/logo Procasu.png" alt="logo" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="" style="margin-top: 1rem; margin-left: 3rem;">
                    <p class="text-sm-left">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO </p>
                </div>
        </div>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 content">
            <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../Iconos/Icono-Usuario.png " class="img-fluid rounded-circle avatar mr-2" alt="imagen" />
                    usuario
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="perfil1.php">Mi perfil</a>
                    <a class="dropdown-item" href="#">Expediente</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="d-flex" >

        <div id="sidebar-container" class=" d-inline-block  d-flex ">
            <div class="menu ">
                <br>
                <a href="#" class="m-3 d-inline-block btn  d-block  " style="padding:1rem; background-color: var(--procasu3); text-align: center; ">
                    <img src="../../Iconos/Herramientas PROCASU.png" alt="herramientas" class="iconos " style="margin-right: .5rem;">
                    Herramientas PROCASU
                </a>
                <br>
                <a href="#" class="m-3 d-inline-block btn d-block   " style="padding:1rem; background-color: var(--procasu3); margin-left: rem;  ">
                    <img src="../../Iconos/Biblioteca Digital.png" alt="herramientas" class="iconos " style="margin-right: 3rem;">
                    Biblioteca Digital
                </a>
                <br>
                <a href="conoce.php" class="m-3 d-inline-block btn d-block " style="padding:1rem; background-color: var(--procasu3);   ">
                    <img src="../../Iconos/Conoce PROCASU.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    Conoce PROCASU
                </a>
                <br>
                <a href="#" class="m-3 d-inline-block btn  d-block " style="padding:1rem; background-color: var(--procasu3); ">
                    <img src="../../Iconos/Necesitas Ayuda.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    ¿Necesitas Ayuda?
                </a>
            </div>
        </div>





</body>    <!-- fin de la barra de navegacion--> 
                              <!-- VARIABLES -->   
                              <?php 
                              $MProbable=9;
                              $Probable= 7;
                              $Raravez= 5;
                              $Improbable = 3;
                              $Alto = 6;
                              $Moderado = 4;
                              $Bajo =  2;
                              $Critico;
                              $mult= $Improbable * $Bajo;
                              $mult= $Probable * $Bajo;
                              $mult= $Raravez * $Bajo;
                              $mult= $MProbable * $Bajo;
                              
                              

                              ?>
                              <!-- Tabla -->
                             <main style="height: 41.3rem; width:60%;">
                              <div >
                              <div >
                              <div class="row">
                              <div style="margin: 1.5rem ;">
                              <div class="card" style="width:auto;">
                              <div class="card-header">
                              <h5>riesgos </h5>
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> 
                              <label class="form-label aling-center">
                             <table class="table table-sm table-bordered table-striped mt-0" >
                              <tr>
														  <th class="text-center" scope="col">Codigo</th>
														  <th class="text-center" scope="col">Criterio</th>
														  <th class="text-center" scope="col" >Área/proceso</th>
														  <th class="text-center" scope="col">Indicador</th>
														  <th class="text-center" scope="col">Riesgo</th>
														  <th class="text-center" scope="col" style="width:auto;">Factor de riesgo</th>
                              <th class="text-center" scope="col">Raíz</th>
                              <th class="text-center" scope="col">Consecuencia</th>
                              <th class="text-center" scope="col">Control 1</th>
                              <th class="text-center" scope="col">Control 2</th>
                              <th class="text-center" scope="col">Control 3 </th>
                              <th class="text-center" scope=" ">Probabilidad</th>
                              <th class="text-center" scope="col">Impacto</th>
                              <th class="text-center" scope="col">Evaluacion</th>
                              <th class="text-center" scope="col">Responsable</th>
												      </tr>
                              <tr>
													   <td scope="row"></td>
													    <td class="border-3">criterio</td>
											        <td class="border-3">social </td>
											        <td class="border-3"> gobernanza </td>
                              <td class="border-3">alto</td>
														  <td class="border-3">etc</td>
														  <td class="border-3">etc</td>
                              <td class="border-3">etc</td>
														  <td class="border-3">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> <b>Click</b></button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Subir informacion</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <form action="#">
                              <div>
                              <label for="">Accion</label>
                              <input type="text" placeholder=''>
                              </div>
                              <hr>
                              <div>
                              <label for="">Responsable</label>
                              <input type="text" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de seguimineto</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de cumplimiento</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Evidencia</label>
                              <input type="file">
                              </div>
                              </div> 
                              </div>
                              </div>
                              </div>
                              </td>
														  <td class="border-3">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> <b>Click</b></button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Subir informacion</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <form action="#">
                              <div>
                              <label for="">Accion</label>
                              <input type="text" placeholder=''>
                              </div>
                              <hr>
                              <div>
                              <label for="">Responsable</label>
                              <input type="text" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de seguimineto</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de cumplimiento</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Evidencia</label>
                              <input type="file">
                              </div>
                              </div> 
                              </div>
                              </div>
                              </div>
                              </td>
                              <td class="border-3">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> <b>Click</b></button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Subir informacion</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <form action="#">
                              <div>
                              <label for="">Accion</label>
                              <input type="text" placeholder=''>
                              </div>
                              <hr>
                              <div>
                              <label for="">Responsable</label>
                              <input type="text" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de seguimineto</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Fecha de cumplimiento</label>
                              <input type="date" style="margin-top: 1rem;">
                              </div>
                              <hr>
                              <div>
                              <label for="">Evidencia</label>
                              <input type="file">
                              </div>
                              </div> 
                              </div>
                              </div>
                              </div>
                              </td>
														  <td class="border-3">
                              <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value='.$MProbable.'>Muy Probable</option>
                              <option value='.$Probable.'>Probable</option>
                              <option value='.$Raravez.'>Rara vez</option>
                              <option value='.$Improbable.'>Improbable</option>
                              </select>    
                              
                              </div>
                              </td>
                              <td class="border-3" >
                              <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value='.$Alto.'>Alto</option>
                              <option value='.$Moderado.'>Medio</option>
                              <option value='.$Bajo.'>Bajo</option>
                              </select>   
                              
                              </div>
                              </td>
                              
														  <td class="border-3" style="text-align: right;" >
                              <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value='.$Critico.'>Critico</option>
                              <option value='.$Alto.'>Alto</option>
                              <option value='.$Moderado.'>Medio</option>
                              <option value='.$Bajo.'>Bajo</option>
                              </select>   
                              </div>
                              </div>
                              </td>
														  <td class="border-3">etc</td>
														  </tr>
                              </table>
                              </label>
                              </li>
                              </ul>
                              </div>
                              </div>
                              </div>
                              </div>
                              <!-- SALTO Y BOTON  -->
                              <br><br><br><br><br><br><br><br><br><br>
                              <div class="mt-5 h3" style="display:flex; padding-left:73.5rem;">
                              
                              <a href="inicio.php" class="a" style="display: flex;">
                              <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                              </svg>
                                </div>
                              Regresar </a>               
                              </main>
                              </div> 
</div>
  </body> 
  <footer class="footer  " style="width: 101rem;">
    <div class="row">

        
        <div class="cont">
            <a class="">
                <img src="../../img/Logotipo Blanco.png" alt="Logo" width="150px" style="margin-left: 2rem;">
            </a>
            <a class="">
                <p class="text-sm-left derechos">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO </p>
            </a>
            <a class="m-3">
                <small style="color: var(--procasu3); margin-top: 3rem; margin-left: 3rem;">&copy; 2023-2024 <b>Procasu</b> Todos los Derechos Reservados.</small>
            </a>
        </div>

    </div>
    
</footer>
</html>