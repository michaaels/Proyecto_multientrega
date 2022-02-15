<?php
  include_once BASE_PATH . 'Model/admCliente.php';
class control{

  public $MODEL;

  public function __construct(){
    $this->MODEL = new administracionCliente();
  }

  public function index(){
    include_once BASE_PATH . 'View/homeAdmCliente.php';
  }
  
  public function nuevo(){
    $alm = new administracionCliente();
    if(isset($_REQUEST['id'])){
      $alm= $this->MODEL->cargarID($_REQUEST['id']);

    }
    include_once BASE_PATH . 'View/saveAdmCliente.php';
  }
  public function guardar(){
    $alm = new administracionCliente();
    $alm->id_cliente = $_POST['txtID'];
    $alm->id_estado  = $_POST['cmbEstado'];

    $this->MODEL->setAdmSolicitud($alm);

    header("Location: index.php");
}


}

 ?>