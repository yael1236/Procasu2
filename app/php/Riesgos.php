<?php include_once("../../app/php/nav.php") ?> 
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
                              $Critico;
                              $mult= $Improbable * $Bajo;
                              $mult= $Probable * $Bajo;
                              $mult= $Raravez * $Bajo;
                              $mult= $MProbable * $Bajo;
                              
                              

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
                              <th class="text-center" scope="col">Control 1</th>
                              <th class="text-center" scope="col">Control 2</th>
                              <th class="text-center" scope="col">Control 3 </th>
                              <th class="text-center" scope="col">Probabilidad</th>
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
                              <div class="mt-5 h3" style="text-align:right;">
                              <a href="inicio.php" class="a">
                              <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                              </svg>Regresar </a>               
                              </main>
                              </div> 
</div>
  </body> 
  <?php include_once("../../app/php/footer.php") ?> 
</html>