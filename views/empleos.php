<?php
define('LIBRARIES_PATH', '../libraries/');
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');

require_once(CONTROLLER_PATH . "empresa.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Eventos.com</title>
</head>
<style>


.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 300px !important;
    margin-top: 10px;
    margin-left: 10px !important;
}

</style>

<body>
  <?php
  include(VIEWS_PATH . "navbar.php");
  ?>



  <div class="container-fluid" style="margin-top: 10%;">

    <div class="row">
      <div class="col-md-6">
        <h1>Ingrese nuevo empleo</h1>
        <form style="width: 300px; height: 400x;">
          <div class="mb-3">
            <label for="destino" class="form-label">Nombre oferta</label>
            <input type="text" value="" class="form-control" id="nombre_oferta" name="nombre_oferta" aria-describedby="textHelp">

          </div>
          <div class="mb-3">
            <label for="costo" class="form-label">Descripcion</label>
            <input type="text" value="" class="form-control" id="descripcion" name="descripcion" aria-describedby="textHelp">

          </div>
          <div class="mb-3">
            <label for="costo" class="form-label">Fecha cierre</label>
            <input type="date" value="" class="form-control" id="fecha_cierre" name="fecha_cierre" aria-describedby="numberHelp">

          </div>
          <div class="mb-3">
            <label for="contacto" class="form-label">Correo Contacto</label>
            <input type="email" value="" class="form-control" id="correo_contacto" name="correo_contacto" aria-describedby="numberHelp">

          </div>
          <button type="submit" class="btn btn-primary" onclick="registrarEmpleo()">Guardar</button>
        </form>
      </div>
      <div class="col-md-6" ">
        <h1>Empleos disponibles</h1>
        <div id="empleos" class="d-flex align-content-around flex-wrap">

      

        </div>
      </div>
    </div>
  </div>




  <script src="../js/empleos.js"></script>

</body>

</html>