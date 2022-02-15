<?php
  include_once BASE_PATH . 'Model\admPedido.php';
class control{

  public $MODEL;

  public function __construct(){
    $this->MODEL = new administradorPedido();
  }

  public function index(){
    include_once BASE_PATH . 'View/homeAdmPedido.php';
  }
  
  public function nuevo(){
    $alm = new administradorPedido();
    if(isset($_REQUEST['id'])){
      $alm= $this->MODEL->cargarID($_REQUEST['id']);

    }
    include_once BASE_PATH . 'View/saveAdmPedido.php';
  }
  public function guardar(){
    $alm = new administradorPedido();
    $alm->id_paquete= $_POST['txtID'];
    $alm->id_estado= $_POST['cmbEstado'];

    $this->MODEL->setAdmSolicitud($alm);

    header("Location: ../index.php");

}
}
?>