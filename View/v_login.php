<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../Resources/css/login.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">

        <!-- Icono -->
        <div class="fadeIn first">
            <img src="../Resources/Imagenes/logo.svg" id="icon" alt="logo"/>
            <h1>Login</h1>
        </div>

        <!-- Formulario Login -->
        <form action="../Controller/c_login.php" method="POST">
            <input type="text" id="login" class="fadeIn second" name="user_log" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="pass_log" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
        </form>

        <div id="formFooter">
            <a class="underlineHover" href="../inicio.php">INICIO</a>
        </div>

    </div>
</div>
</body>
</html>