
<?php include_once("nav.php") ?>

<div class="d-flex">
    <!--datos -->
    <section>
        <div class="container d-flex">
            <div class="row ">
                <div class="col-5 p-5 ">
                    <div>
                        <h5 class="mb-3 mx-4 font-weight-bold" style="color: var(--procasu1);"><img src="../../Iconos/Icono-Usuario.png" alt="Usuario" width="25px" class="mx-2">Datos del Usuario</h5>
                    </div>
                    <div class="form-group">
                        <div class="card " style="width: 22rem; margin-right: 6rem; height: 320px; background-color: var(--procasu1);">
                            <img src="..." class="card-img-top" alt="...">
                        </div>
                        <br>
                        <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <form class="mx-2 my-5">
                        <div class="mb-3">
                            <label for="nombre" class="form-label ">Nombre de la razón social</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="nombre">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rfc" class="form-label">RFC</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="rfc">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="direccion">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombreComercial" class="form-label">Nombre comercial</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nombreComercial">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombreColaboradores" class="form-label">Número de colaboradores</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nombreColaboradores">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sector" class="form-label">Sector</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="sector">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="principales" class="form-label">Principales productos o servicios</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="principales">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Nombre del contacto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="contacto">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="numcontacto" class="form-label">Número de contacto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="numcontacto">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="email">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="numempresa" class="form-label">Número de la empresa</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="numempresa">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="responsable" class="form-label">Nombre del responsable</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="responsable">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="direcgen" class="form-label">Nombre del director general</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="direcgen">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="emaildirecgen" class="form-label">Correo del director general</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="emaildirecgen">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="add" class="form-label">Contacto adicional (opcional)</label>
                            <div class="input-group">
                                <input type="text" class="form-control " id="add">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>



</div>


</div>




</div>


</div>
<?php include_once("footer.php"); ?>