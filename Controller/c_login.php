<?php
if (isset($_POST["user_log"]) && isset($_POST["pass_log"])) {

    include_once("../Model/m_login.php");
    $validar = new login_model();
    $validar->verificar_login();

} else {
    header("location: ../index.php");
}
?>