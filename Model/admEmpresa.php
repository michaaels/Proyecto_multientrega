<?php

class administracionEmpresa{

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
      $query = "SELECT e.id_empresa, e.nom_empresa, e.ruc, e.correo, e.num_telefono, t.tipo_emp_det, h.horario_laboral_det, m.metodo_pag_det, es.est_det 
      FROM empresa e 
      INNER JOIN tipo_empresa t ON e.id_empresa= t.id_tipo_empresa 
      INNER JOIN horario_laboral h ON h.id_horario_laboral= e.id_horario_laboral 
      INNER JOIN metodo_pago m ON m.id_metodo_pago= e.id_metodo_pago
      INNER JOIN estado es ON es.id_estado= e.id_estado;"; 
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function listarProductos(){
    try {
      $query = "SELECT p.id_producto, p.prod_det, ca.categ_prod_det, p.precio, p.stock, e.nom_empresa, es.est_det 
      FROM producto p 
      INNER JOIN categoria_producto ca ON ca.id_categ_prod= p.id_categ_prod 
      INNER JOIN empresa e ON e.id_empresa= p.id_empresa 
      INNER JOIN estado es ON es.id_estado= p.id_estado;"; 
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
      $query = "SELECT * FROM empresa where id_empresa=?";
      $smt = $this->CNX->prepare($query);
      $smt->execute(array($id));
      return $smt->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
  public function setAdmSolicitud  ($data){
    try {
      $query = "UPDATE empresa set id_estado=? WHERE  id_empresa=?";
      $this->CNX->prepare($query)->execute(array($data->id_estado,$data->id_empresa));


    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

}
 ?>