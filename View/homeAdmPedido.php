<?php
    include_once BASE_PATH . "View/header.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Solicitud</title>
    <link rel="stylesheet" type="text/css" href="../Resources/css/materialize.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col m12">
          <div class="card black z-depth-6 white-text center-align">
            <h2>Solicitudes de Pedidos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12">
          <table class="table-responsive z-depth-3">
          <tr class="black">
            <th class="white-text center-align"rowspan="2">Id</th>
            <th class="white-text center-align"colspan="3">Cliente</th>
            <th class="white-text center-align"colspan="3">Repartidor</th>
            <th class="white-text center-align"colspan="2">Producto</th>
            <th class="white-text center-align"rowspan="2">Estado del Pedido</th>
            <th class="white-text center-align"rowspan="2">Aceptar/Rechazar</th>
          </tr>
				  <tr class="black">
					  <th class="white-text center-align">Nombre</th>
					  <th class="white-text center-align">Apellido</th>
            <th class="white-text center-align">Correo</th>
            <th class="white-text center-align">Id Repartidor</th>
            <th class="white-text center-align">Transporte</th>
            <th class="white-text center-align">Jornada</th>
            <th class="white-text center-align">Producto</th>
            <th class="white-text center-align">Empresa Proveedora</th>
            
			    </tr>
            <?php  foreach ($this->MODEL->listar() as $k) : ?>
              <tr>
                <td><?php echo $k->id_paquete; ?></td>
                <td><?php echo $k->nombre; ?></td>
                <td><?php echo $k->apellido; ?></td>
                <td><?php echo $k->correo; ?></td>
                <td><?php echo $k->id_repartidor; ?></td>
                <td><?php echo $k->trans_det; ?></td>
                <td><?php echo $k->horario_laboral_det; ?></td>
                <td><?php echo $k->prod_det; ?></td>
                <td><?php echo $k->nom_empresa; ?></td>
                <td><?php echo $k->est_det; ?></td>
                     
                
                <td>
                  <a href="?c=nuevo&id=<?php echo $k->id_paquete; ?>" class="btn green z-depth-3">Modificar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <div class="row">
        <div class="col m12">
        <h2>Información del repartidor</h2>
          <table class="table-responsive z-depth-3">
            <tr class="black">
              <th class="white-text center-align">Id</th>
              <th class="white-text center-align">Cedula</th>
              <th class="white-text center-align">Nombre</th>
              <th class="white-text center-align">Apellido</th>
              <th class="white-text center-align">Fecha Registro</th>
              <th class="white-text center-align">Estado</th>
            </tr>
            <?php  foreach ($this->MODEL->Repartidor() as $k) : ?>
              <tr>
                <td><?php echo $k->id_repartidor; ?></td>
                <td><?php echo $k->cedula; ?></td>
                <td><?php echo $k->nombre; ?></td>
                <td><?php echo $k->apellido; ?></td>
                <td><?php echo $k->fecha_reg; ?></td>
                <td><?php echo $k->est_det; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          </div>
          </div>
      </div>
    </div>
    
  </body>
</html>