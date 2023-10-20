<!DOCTYPE html>
<html lang="es">

  <head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="../../css/stylein.css">
  <link rel="stylesheet" href="../../style-nav.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- Bootstrap Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<meta charset="UTF-8">
  <title>Riesgos</title>
  </head>
    <body>
    <!--<body onload="alert('Intrucciones')"> -->
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
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
    <img src="img/logo Procasu.png" alt="logo" width="150px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <div class="" style="margin-top: 1rem; margin-left: 3rem;">
    <p class="text-sm-left">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABLIDAD ENLA CADEIA DE SUMANISTRO</p>
    </div>
    </div>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 content">
    <li class="nav-item dropdown">
    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="Iconos/Icono-Usuario.png " class="img-fluid rounded-circle avatar mr-2" alt="imagen" />
    usuario
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Mi perfil</a>
    <a class="dropdown-item" href="#">Expediente</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Cerrar sesión</a>
    </div>
   </li>
    </ul>
    </nav>
    <!-- fin de la barra de navegacion--> 
                              <!-- VARIABLES -->   
                              <?php 
                              $MProbable=9;
                              $Probable= 7;
                              $Raravez= 5;
                              $Improbable = 3;
                              $Alto = 6;
                              $Moderado = 4;
                              $Bajo =  2;
                              $mult = $Bajo * $Improbable;

                              ?>
                              <!-- Tabla -->
                             <main style="height: 41.3rem; width:auto;">
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
                             <table class="table table-sm table-bordered table-striped mt-0">
                              <tr>
														  <th class="text-center" scope="col">Codigo</th>
														  <th class="text-center" scope="col">Criterio</th>
														  <th class="text-center" scope="col" >Área/proceso</th>
														  <th class="text-center" scope="col">Indicador</th>
														  <th class="text-center" scope="col">Riesgo</th>
														  <th class="text-center" scope="col" style="width:auto;">Factor de riesgo</th>
                              <th class="text-center" scope="col">Raíz</th>
                              <th class="text-center" scope="col">Consecuencia</th>
                              <th class="text-center" scope="col">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> <b>Control1</b></button>         
                              <!-- Modal -->
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
                              </th>
                              <th class="text-center" scope="col">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><b>Control 2</b></button>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
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
                              </th>
                              <th class="text-center" scope="col">
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><b>Control 3</b></button>
                             <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">  Datos</h5>
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
                              </th>
                              <th class="text-center" scope="col"><div class="btn-group">Probabilidad</th>
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
														  <td class="border-3">etc</td>
														  <td class="border-3">etc</td>
                              <td class="border-3">etc</td>
														  <td class="border-3">
                              <div class="input-group">
                              <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value='.$MProbable.'>Muy Probable</option>
                              <option value='.$Probable.'>Probable</option>
                              <option value='.$Raravez.'>Rara vez</option>
                              <option value='.$Improbable.'>Improbable</option>
                              </select>    
                              </div>
                              </div>
                              </td>
                              <td class="border-3">
                              <div class="input-group">
                              <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value='.$Alto.'>Alto</option>
                              <option value='.$Moderado.'>Medio</option>
                              <option value='.$Bajo.'>Bajo</option>
                              </select>   
                              </div>
                              </div>
                              </td>
                              
														  <td class="border-3" style="text-align: right;" >
                              <?php

                              if ($mult == 6) {
                                  echo "Bajo.";
                              } //elseif ($) {
                                //  echo ".";
                             // } else {
                               //   echo ".";
                              //}
                              ?>
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
                              <div class="mt-5 h3" style="text-align:right;">
                              <a href="inicio.php" class="a">
                              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                              </svg>Regresar </a>               
                              </main>
                              <!-- PIE -->
                              <footer >
                              <br>
					                    <p class="text-center" style="width: 100%;">Copyright <sup>©</sup> 2023-2024 Procasu todos los derechos reservados </p>
                              </footer>
                              </div> 
    <!-- FUN NAV --> 
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
    </div>
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body> 
</html>