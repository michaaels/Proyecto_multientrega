<?php
define("BASE_PATH",dirname(__DIR__)."\ProyectoMultientregaCompleto/"); 
include_once 'Config/conexion.php';
error_reporting(0);
session_start();
if (isset($_SESSION['id_tuser'])){
    switch ( $_SESSION['id_tuser'] ) {
        case 1://ADMIN CLIENTE
            include_once 'Controller/clienteAdmControl.php';
            break;
        case 2://ADMIN REPARTIDOR
            include_once 'Controller/repartidorAdmControl.php';
            break;
        case 3://ADMIN PEDIDO
            include_once 'Controller/pedidoAdmControl.php';
            break;
        case 4://ADMIN EMPRESA
            include_once 'Controller/gananciaAdmControl.php';
            break;
        case 5://ADMIN EMPRESA PROVEEDOR
            include_once 'Controller/empresaAdmcontrol.php';
            break;
    }
}else{
    include_once "View/v_login.php";
}

$Controller = new control();

if(!isset($_REQUEST['c'])){
  $Controller->index();
}else{
  $action = $_REQUEST['c'];
  call_user_func(array($Controller,$action));
}
?>