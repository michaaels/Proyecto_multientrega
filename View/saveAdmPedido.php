<?php
    include_once BASE_PATH . "View/header.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../Resources/css/materialize.css">
  </head>
  <body>
    <div class="container">
    <form action="?c=guardar" method="post">
      <div class="row">
        <div class="col m12">
          <div class="card black z-depth-6 white-text center-align">
            <h2>Solicitudes de Pedidos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m3">  </div>
        <div class="col m3"> </div>
        <div class="col m3">
            <input type="hidden" name="txtID" value="<?php echo $alm->id_paquete; ?>">
        </div>
        <div class="col m3">  </div>
      </div>
      <!--estado detalle -->
      <div class="row">
        <div class="col m3">  </div>
        <div class="col m3">Estado de Solicitud : </div>
        <div class="row">
        <div class="col m3">
          <select name="cmbEstado">
            <?php foreach ($this->MODEL->cargarEstado() as $k) : ?>
                <option value="<?php echo $k->id_estado; ?>" <?php echo $k->id_estado == $alm->id_estado ? 'selected' : '' ?>> <?php echo $k->est_det ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col m3">  </div>
      </div>
      <div class="col m3">  </div>
      </div>
      <div class="row">
        <div class="col m3"></div>
        <div class="col m6">
          <input type="submit" name="nytm" value="Guardar" class="btn red z-depth-3">
        </div>
        <div class="col m3">  </div>
      </div>
  
    </form>
  </div>
  <script type="text/javascript" src="Resources/js/jquery-3.5.1.min.js">  </script>
  <script type="text/javascript" src="Resources/js/materialize.js">  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('select').formSelect();
    })
  </script>
  </body>
</html>