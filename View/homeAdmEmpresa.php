<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Resources/css/materialize.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col m12">
          <div class="card black z-depth-6 white-text center-align">
            <h2>EMPRESAS</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12">
          <table class="table-responsive z-depth-3">
            <tr class="black">
              <th class="white-text center-align">Id</th>
              <th class="white-text center-align">Nombre</th>
              <th class="white-text center-align">RUC</th>
              <th class="white-text center-align">Correo</th>
              <th class="white-text center-align">Teléfono</th>
              <th class="white-text center-align">Tipo</th>
              <th class="white-text center-align">Horarios</th>
              <th class="white-text center-align">Forma de Pago</th>
              <th class="white-text center-align">Estado</th>
              <th class="white-text center-align">Aceptar/Rechazar</th>
              <!--<th class="white-text center-align">Rechazar</th>-->
            </tr>
            <?php  foreach ($this->MODEL->listar() as $k) : ?>
              <tr>
                <td><?php echo $k->id_empresa; ?></td>
                <td><?php echo $k->nom_empresa; ?></td>
                <td><?php echo $k->ruc; ?></td>
                <td><?php echo $k->correo; ?></td>
                <td><?php echo $k->num_telefono; ?></td>
                <td><?php echo $k->tipo_emp_det; ?></td>
                <td><?php echo $k->horario_laboral_det; ?></td>
                <td><?php echo $k->metodo_pag_det; ?></td>
                <td><?php echo $k->est_det; ?></td>
               
                <td>
                  <a href="?c=nuevo&id=<?php echo $k->id_empresa; ?>" class="btn green z-depth-3">Modificar Estado de Solicitud</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col m12">
          <div class="card black z-depth-6 white-text center-align">
            <h2>PRODUCTOS</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m12">
          <table class="table-responsive z-depth-3">
            <tr class="black">
              <th class="white-text center-align">Id</th>
              <th class="white-text center-align">Producto</th>
              <th class="white-text center-align">Categoría</th>
              <th class="white-text center-align">Precio</th>
              <th class="white-text center-align">Stock</th>
              <th class="white-text center-align">Empresa</th>
              <!--<th class="white-text center-align">Rechazar</th>-->
            </tr>
            <?php  foreach ($this->MODEL->listarProductos() as $k) : ?>
              <tr>
                <td style="text-align:center"><?php echo $k->id_producto; ?></td>
                <td style="text-align:center"><?php echo $k->prod_det; ?></td>
                <td style="text-align:center"><?php echo $k->categ_prod_det; ?></td>
                <td style="text-align:center"><?php echo $k->precio; ?></td>
                <td style="text-align:center"><?php echo $k->stock; ?></td>
                <td style="text-align:center"><?php echo $k->nom_empresa; ?></td>
               
                
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>