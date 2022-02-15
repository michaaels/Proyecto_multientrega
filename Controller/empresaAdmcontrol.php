<?php
  include_once BASE_PATH . 'Model/admEmpresa.php';
class control{

  public $MODEL;

  public function __construct(){
    $this->MODEL = new administracionEmpresa();
  }

  public function index(){
    include_once BASE_PATH . 'View/homeAdmEmpresa.php';
  }
  
  public function nuevo(){
    $alm = new administracionEmpresa();
    if(isset($_REQUEST['id'])){
      $alm= $this->MODEL->cargarID($_REQUEST['id']);

    }
    include_once BASE_PATH . 'View/saveAdmEmpresa.php';
  }
  public function guardar(){
    $alm = new administracionEmpresa();
    $alm->id_empresa = $_POST['txtID'];
    $alm->id_estado  = $_POST['cmbEstado'];

    $this->MODEL->setAdmSolicitud($alm);

    header("Location: index.php");
}


}

 ?>