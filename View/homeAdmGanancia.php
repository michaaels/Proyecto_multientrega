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
            <h2>Transacciones por Empresa</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12">
          <table class="table-responsive z-depth-3">
            <tr class="black">
              <th class="white-text center-align">Cod. Transaccion</th>
              <th class="white-text center-align">Cod. Envio</th>
              <th class="white-text center-align">Precio de Envio</th>
              <th class="white-text center-align">Cod. Empresa</th>
              <th class="white-text center-align">Ruc Empresa</th>
              <th class="white-text center-align">Porc. Empresa</th>
              <th class="white-text center-align">Ganan. Empresa</th>
              <th class="white-text center-align">Cod. Repartidor</th>
              <th class="white-text center-align">Nomb. Repartidor</th>
              <th class="white-text center-align">Ape. Repartidor</th>
              <th class="white-text center-align">Porc. Repartidor</th>
              <th class="white-text center-align">Ganan. Repartidor</th>
              <th class="white-text center-align">Cod. Cliente</th>
              <th class="white-text center-align">Nomb. Cliente</th>
              <th class="white-text center-align">Ape. Cliente</th>
              <th class="white-text center-align">Reg. Transaccion</th>
              <!--<th class="white-text center-align">Rechazar</th>-->
            </tr>
            <?php foreach ($this->MODEL->listar() as $k) : ?>
              <tr>
                <td><?php echo $k->trans_id; ?></td>
                <td><?php echo $k->envio_id; ?></td>
                <td><?php echo $k->envio_precio; ?></td>
                <td><?php echo $k->cod_empresa; ?></td>
                <td><?php echo $k->ruc_empresa; ?></td>
                <td><?php echo $k->porcentaje_empresa; ?></td>
                <td><?php echo $k->ganancia_empresa; ?></td>
                <td><?php echo $k->cod_repartidor; ?></td>
                <td><?php echo $k->nomb_repartidor; ?></td>
                <td><?php echo $k->ape_repartidor; ?></td>
                <td><?php echo $k->porcentaje_repartidor; ?></td>
                <td><?php echo $k->ganancia_repartidor; ?></td>
                <td><?php echo $k->cod_cliente; ?></td>
                <td><?php echo $k->nomb_cliente; ?></td>
                <td><?php echo $k->ape_cliente; ?></td>
                <td><?php echo $k->reg_transaccion; ?></td>
               
                <!-- <td>
                  <a href="?c=nuevo&id=<?php echo $k->id_repartidor; ?>" class="btn green z-depth-3">Modificar Estado de Solicitud</a>
                </td> -->
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>