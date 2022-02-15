<?php

class administradorGanancia{

  public $CNX; //conexion a BD
    
  
  public function __construct(){
    try{
      $this->CNX = conexion::conectar();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function listar(){
    try {
      $query = "select `transaccion`.`trans_id` AS `trans_id`,`transaccion`.`paquete_id` AS `envio_id`,
        `transaccion`.`paquete_precio` AS `envio_precio`,`transaccion`.`empresa_id` AS `cod_empresa`,
        `transaccion`.`empresa_ruc` AS `ruc_empresa`,`transaccion`.`empresa_porcentaje_valor` AS `porcentaje_empresa`,
        `transaccion`.`empresa_ganancia` AS `ganancia_empresa`,`transaccion`.`repartidor_usuario_id` AS `cod_repartidor`,
        `transaccion`.`repartidor_nombre` AS `nomb_repartidor`,`transaccion`.`repartidor_apellido` AS `ape_repartidor`,
        `transaccion`.`repartidor_porcentaje_valor` AS `porcentaje_repartidor`,
        `transaccion`.`repartidor_ganancia` AS `ganancia_repartidor`,`transaccion`.`cliente_id` AS `cod_cliente`,
        `transaccion`.`cliente_nombre` AS `nomb_cliente`,`transaccion`.`cliente_apellido` AS `ape_cliente`,
        `transaccion`.`trans_feching` AS `reg_transaccion` 
        from `transaccion` group by `transaccion`.`empresa_id` order by `transaccion`.`trans_id`";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}
 ?>