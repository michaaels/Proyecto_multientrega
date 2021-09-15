    <form action="" class="form_login" id="form_login">
            <div class="row ">
                <div class="col-md-6"
                    <div class="col-md-5">
                        <div class="text-center mt-7"> <img src="../Imagenes/contenedores.jpg" width="100%"> </div>
                </div>

                <div class="col-md-6">
                <!-- Usuario -->
                    <label for="text" class="form_label">Usuario</label>
                    <div>
                        <input id="user_login" type="text" class="form_input" id="correo" placeholder="queDelivery">
                    </div>

                <!-- Contraseña -->
                    <label for="password" class="form_label">Contraseña</label>
                    <div>
                        <input id="pass_login" type="password" class="form_input" id="password" placeholder="****">
                    </div>

                <!-- Botones -->
                <div class="col-md-20">
                    <a class="form_btn" id=botonCrearCuenta onclick="login_panel()"">Inciar Sesión</a>
                    <a class="form_btn" id=botonCrearCuenta href="../html/Registro.html">Registrarse</a>
                </div>
            </div>
        </form>


