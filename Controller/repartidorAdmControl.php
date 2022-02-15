<?php
  include_once  BASE_PATH . '/Model/admRepartidor.php';
class control{

  public $MODEL;

  public function __construct(){
    $this->MODEL = new administracionRepartidor();
  }

  public function index(){
    include_once  BASE_PATH . '/View/homeAdmRepartidor.php';
  }
  
  public function nuevo(){
    $alm = new administracionRepartidor();
    if(isset($_REQUEST['id'])){
      $alm= $this->MODEL->cargarID($_REQUEST['id']);

    }
    include_once  BASE_PATH . '/View/saveAdmRepartidor.php';
  }
  public function guardar(){
    $alm = new administracionRepartidor();
    $alm->id_repartidor = $_POST['txtID'];
    $alm->id_estado  = $_POST['cmbEstado'];

    $this->MODEL->setAdmSolicitud($alm);

    header("Location: index.php");
}


}

 ?>