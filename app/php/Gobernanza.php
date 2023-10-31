
      <?php include_once("../../app/php/nav.php") ?> 
        <form  class="form" method="POST" action="../../includes/upload.php" autocomplete="off">
        <br><br>
        <div class="container text-center">
        <div class="row">
        <div class="col" >
        <div class="card" style="width: 18rem;">
        <div class="card-header">
        <h5>Alcance </h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
        Objetivos para el Desarrollo Sostenible de la Agenda 2023 - 1 Fin de la pobreza.
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <div class="card-header">
        <h5>Indicador </h5> 
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <label class="form-label aling-center">
        <textarea  name="indicador" id="indicador" class="form-control" style="width: 13rem;" rows="3" required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <div class="card-header">
        <h5>Objetivos</h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <label class="form-label aling-center">
        <textarea  name="objetivos" id="objetivos" class="form-control" style="width: 13rem;" rows="3" required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div> 
        <div class="w-100 d-none d-md-block"></div>
        <br><br><br>
        <div class="container text-center">
        <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
        <div class="card-header">
        <h5>Expectativas </h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <label class="form-label aling-center">
        <textarea  name="Expectativas" id="Expectativas" class="form-control" style="width: 13rem;" rows="3" required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div> 
        <div class="col ">
        <div class="card" style="width: 28.5rem;">
        <div class="card-header">
        <h5>Evidencia  </h5> 
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <div class="container text-center">
        <div class="row">
        <div class="col-6 col-sm-4"><input type="file" style="padding: 5px; height:4rem; width: 120% ; text-align: center;" name="archivo" id="archivo" class="form-control mb-4" required></div>
        <div class="col-6 col-sm-4"><input type="file" style="padding: 5px; height:4rem; width: 120% ; text-align: center;" name="archivo1" id="archivo1" class="form-control mb-4" required></div>
        <div class="col-6 col-sm-4"><input type="file" style="padding: 5px; height:4rem; width: 120% ; text-align: center;" name="archivo2" id="archivo2" class="form-control mb-4" required></div>
        <!-- Force next columns to break to new line -->
        <br>
        <div class="w-100"></div>
        <div class="col-5 col-sm-4">    
        <spam>Descripcion</spam>
        <label class="form-label aling-center">
        <textarea  name="descripcion" id="descripcion" class="form-control" type="text" class="form-control" style="width:120%; height:3rem;" placeholder="Descripcion" required>
        </textarea>
        </label>
        </div>
        <div class="col-6 col-sm-4">
        <spam>Descripcion</spam>
        <label class="form-label aling-center">
        <textarea  name="descripcion 1" id="descripcion1" class="form-control" type="text" class="form-control" style="width:120%; height:3rem;"  placeholder="Descripcion"required>
        </textarea>
        </label>
        </div>
        <div class="col-7 col-sm-4">
        <spam style="color:black;">Descripcion</spam>
        <label class="form-label aling-center">
        <textarea  name="descripcion2" id="descripcion2" class="form-control" type="text" class="form-control" style="width:120%; height:3rem;"  title="Descripcion" required>
        </textarea>
        </label>
        </div>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" style="width: 18rem;">
        <div class="card-header">
        <h5>Objetivo Estratégico</h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <label class="form-label aling-center">
        <textarea  name="objetivosE" id="objetivosE" class="form-control" style="width: 13rem;" rows="3"  required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="w-100 d-none d-md-block" ></div>
        <br><br><br>
        <div class="container text-center">
        <div class="row" >
        <div class="col">
        <div class="card" style="width: 18rem;">
        <div class="card-header" style>
        <h5>Riesgos
        <img src="../../img/signo_de_interrogacion.png" style="width:1rem;"  data-bs-toggle="tooltip" data-bs-placement="top" >
        </h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"> 
        <label class="form-label aling-center">
        <textarea  name="Riesgos" id="Riesgos" class="form-control" style="width: 13rem;" rows="3" required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col ">
        <div class="card" style="width: 20rem;" >
        <div class="card-header">
        <h5>Oportunidades</h5> 
        <ul class="list-group list-group-flush" >
        <li class="list-group-item" > 
        <label class="form-label aling-center">
        <textarea  name="Oportunidades" id="oportunidades" class="form-control" style="width: 13rem;" rows="3" required>
        </textarea>
        </label>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col ">
        <div class="card" style="width: 18rem;">
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="mt-5" style="text-align:right;">
        <button type="submit" class="btn" style="font-size: 2rem;"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
        </svg>Guardar </button>
        <div class="mt-5 h2" style="text-align:right;">
        <a href="indicadores.php" class="a">
        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem"  fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>Regresar</a>
        </div>
        </div>
        </div>
        </div>
        </div>
       
        </div>
        </div>
      </body>
      <?php include_once("../../app/php/footer.php") ?> 
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>