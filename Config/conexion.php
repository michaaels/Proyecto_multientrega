<?php
class conexion{
  public static function conectar(){
  $x = new PDO("mysql:host=databaseproyecto.crhxduid0xjg.us-east-1.rds.amazonaws.com;dbname=multientrega;charset=utf8","gp_user2","1234");
  $x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $x;
  }
}
?>


