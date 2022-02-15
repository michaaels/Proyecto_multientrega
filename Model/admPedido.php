<?php

class administradorPedido{

  public $CNX; //conexion a BD
  public $id_paquete;
  public $nombre;
  public $apellido;
  public $correo;
  public $transporte; 
  public $jornada;
  public $detalle;
  public $descripcion;
  public $nom_empresa;
  
    
  
  public function __construct(){
    try{
      $this->CNX = conexion::conectar();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function listar(){
    try {
      $query = " Select pc.id_paquete,u.nombre,u.apellido,u.correo,r.id_repartidor,t.trans_det,h.horario_laboral_det, p.prod_det,
      ep.nom_empresa, es.est_det  FROM paquete_cabecera pc INNER join cliente c on c.id_cliente=pc.id_cliente INNER join usuario u on 
      u.id_usuario=c.id_usuario INNER join repartidor r on r.id_repartidor=pc.id_repartidor INNER join transporte t on t.id_transporte=r.id_transporte
      INNER join estado e on e.id_estado=r.id_estado INNER join horario_laboral h on h.id_horario_laboral=r.id_horario_laboral 
      INNER join producto p on p.id_producto=pc.id_producto INNER join empresa ep on ep.id_empresa =p.id_empresa INNER join estado es on es.id_estado=pc.id_estado 
      where es.est_det ='Por confirmar'";
      $smt = $this->CNX->prepare($query);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function Repartidor(){
    try {
      $query = "SELECT r.id_repartidor,u.cedula,u.nombre,u.apellido,u.fecha_reg,e.est_det
      FROM repartidor r INNER JOIN usuario u on r.id_usuario = u.id_usuario INNER join transporte tr
      on tr.id_transporte = r. id_transporte  INNER join horario_laboral h on h. id_horario_laboral= r.id_horario_laboral
      INNER jOIN estado e on e.id_estado= r.id_estado WHERE e.est_det='Disponible'" ; 
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
    $query = "SELECT * FROM paquete_cabecera where id_paquete=?";
    $smt = $this->CNX->prepare($query);
    $smt->execute(array($id));
    return $smt->fetch(PDO::FETCH_OBJ);
  } catch (Exception $e) {
    die($e->getMessage());
  }
}

  public function setAdmSolicitud ($data){
    try {
      $query = "UPDATE paquete_cabecera set id_estado=? WHERE  id_paquete=?";
      $this->CNX->prepare($query)->execute(array($data->id_estado,$data->id_paquete));
    } catch (\Exception $e) {
      die($e->getMessage());
    }

  }

}
 ?>