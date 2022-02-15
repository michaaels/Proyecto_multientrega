<?php

class administracionCliente{

  public $CNX; //conexion a BD
  public $id_repartidor;
  public $cedula;
  public $nombre;
  public $apellido;
  public $fecha_reg;
  public $detalle;
  
  public function __construct(){
    try{
      $this->CNX = conexion::conectar();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function listar(){
    try {
      $query = "SELECT c.id_cliente,u.cedula,u.nombre,u.apellido,u.fecha_reg,e.est_det
      FROM cliente c INNER JOIN usuario u on c.id_usuario = u.id_usuario 
      INNER jOIN estado e on e.id_estado= c.id_estado WHERE e.est_det='Por confirmar'" ; 
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarEstado(){
    try {
      $query = "SELECT * FROM estado e where e.id_tipoestado = 3  ";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarID($id){
    try {
      $query = "SELECT * FROM cliente where id_cliente=?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
      return $smt->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  public function setAdmSolicitud  ($data){
    try {
      $query = "UPDATE cliente set id_estado=? WHERE  id_cliente=?";
      $this->CNX->prepare($query)->execute(array($data->id_estado,$data->id_cliente));

    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

}
 ?>