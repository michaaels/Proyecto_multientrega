<?php
include_once("../Config/conexion.php");

class login_model
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function verificar_login()
    {
        $sql = "CALL validar_login(?,?,@id_user,@id_tipo_user,@nombre)";
        $rs = $this->db->prepare($sql);
        $rs->execute(array($_POST["user_log"], $_POST["pass_log"]));
        $rs->closeCursor();//permite ejecutar otra sentencia
        $rs_out = $this->db->query('select @id_user,@id_tipo_user,@nombre')->fetch();
        if (isset($rs_out['@id_user'])) {

            session_start();
            $_SESSION['login_valid'] = 0;
            $_SESSION['nombre_usuario'] = $rs_out['@nombre'];
            $_SESSION['id_tuser'] = $rs_out['@id_tipo_user'];

            include_once "../index.php";

        }else{
            header('Location: ../index.php');
            $_SESSION['login_valid'] = 1;
        }
    }
}

