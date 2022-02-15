<?php
session_start();
echo 'entro logout';
//session_unset();
session_destroy();

header("location: ../View/v_login.php");
?>