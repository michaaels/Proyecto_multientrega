<?php

class administracionRepartidor{

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
      $query = "SELECT r.id_repartidor,u.cedula,u.nombre,u.apellido,u.fecha_reg,e.est_det
      FROM repartidor r INNER JOIN usuario u on r.id_usuario = u.id_usuario INNER join transporte tr
      on tr.id_transporte = r. id_transporte  INNER join horario_laboral h on h. id_horario_laboral= r.id_horario_laboral
      INNER jOIN estado e on e.id_estado= r.id_estado WHERE e.est_det='Por confirmar'" ; 
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
/*
  public function cargarRepartidor(){
    try {
      $query = "SELECT * FROM repartidor";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarUsuario(){
    try {
      $query = "SELECT * FROM usuario";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarTranporte(){
    try {
      $query = "SELECT * FROM transporte";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function cargarHorarioLaboral(){
    try {
      $query = "SELECT * FROM horario_laboral";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

    public function Cancelar($id){
    try {
      $query = "Esta seguro de cancelar el registro?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }
*/
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
      $query = "SELECT * FROM repartidor where id_repartidor=?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
      return $smt->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  public function setAdmSolicitud  ($data){
    try {
      $query = "UPDATE repartidor set id_estado=? WHERE  id_repartidor=?";
      $this->CNX->prepare($query)->execute(array($data->id_estado,$data->id_repartidor));


    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

}
 ?>