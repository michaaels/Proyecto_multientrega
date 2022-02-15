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
      <div class="row">
        <div class="col m12">
          <div class="card black z-depth-6 white-text center-align">
            <h2>Solicitudes de Registro de Repartidores</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12">
          <table class="table-responsive z-depth-3">
            <tr class="black">
              <th class="white-text center-align">Id</th>
              <th class="white-text center-align">Cedula</th>
              <th class="white-text center-align">Nombre</th>
              <th class="white-text center-align">Apellido</th>
              <th class="white-text center-align">Fecha Registro</th>
              <th class="white-text center-align">Estado</th>
              <th class="white-text center-align">Aceptar/Rechazar</th>
              <!--<th class="white-text center-align">Rechazar</th>-->
            </tr>
            <?php  foreach ($this->MODEL->listar() as $k) : ?>
              <tr>
                <td><?php echo $k->id_repartidor; ?></td>
                <td><?php echo $k->cedula; ?></td>
                <td><?php echo $k->nombre; ?></td>
                <td><?php echo $k->apellido; ?></td>
                <td><?php echo $k->fecha_reg; ?></td>
                <td><?php echo $k->est_det; ?></td>
               
                <td>
                  <a href="?c=nuevo&id=<?php echo $k->id_repartidor; ?>" class="btn green z-depth-3">Modificar Estado de Solicitud</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>