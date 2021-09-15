    <form action="" class="formulario" id="validacionRegistro">
        <!-- Grupo: Usuario -->
        <div class="form_grupo" id="grupo_usuario">
            <label for="usuario" class="form_label">Usuario</label>
            <div class="form_grupo-input">
                <input type="text" class="form_input" name="usuario" id="usuario" placeholder="queDelivery123">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="form_grupo" id="grupo_nombre">
            <label for="nombre" class="form_label">Nombre</label>
            <div class="form_grupo-input">
                <input type="text" class="form_input" name="nombre" id="nombre" placeholder="Juan Mora">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Contraseña -->
        <div class="form_grupo" id="grupo_password">
            <label for="password" class="form_label">Contraseña</label>
            <div class="form_grupo-input">
                <input type="password" class="form_input" name="password" id="password">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
        </div>

        <!-- Grupo: Contraseña 2 -->
        <div class="form_grupo" id="grupo_password2">
            <label for="password2" class="form_label">Repetir Contraseña</label>
            <div class="form_grupo-input">
                <input type="password" class="form_input" name="password2" id="password2">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">Ambas contraseñas deben ser iguales.</p>
        </div>

        <!-- Grupo: Correo Electronico -->
        <div class="form_grupo" id="grupo_correo">
            <label for="correo" class="form_label">Correo Electrónico</label>
            <div class="form_grupo-input">
                <input type="email" class="form_input" name="correo" id="correo" placeholder="correo@correo.com">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <!-- Grupo: Teléfono -->
        <div class="form_grupo" id="grupo_telefono">
            <label for="telefono" class="form_label">Teléfono</label>
            <div class="form_grupo-input">
                <input type="text" class="form_input" name="telefono" id="telefono" placeholder="4491234567">
                <i class="form_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form_input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: Terminos y Condiciones -->
        <div class="form_grupo" id="grupo_terminos">
            <label class="form_label">
                <input class="form_checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto los Terminos y Condiciones
            </label>
        </div>

        <div class="form_mensaje" id="form_mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el registro correctamente. </p>
        </div>

        <div class="form_grupo form_grupo-btn-enviar">
            <button type="submit" class="form_btn">Registrar</button>
            <p class="form_mensaje-exito" id="form_mensaje-exito">Registro enviado exitosamente!</p>
        </div>
    </form>
</main><main>
		<form action="" class="formulario" id="validacionRegistro">
			<!-- Grupo: Usuario -->
			<div class="form_grupo" id="grupo_usuario">
				<label for="usuario" class="form_label">Usuario</label>
				<div class="form_grupo-input">
					<input type="text" class="form_input" name="usuario" id="usuario" placeholder="queDelivery123">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="form_grupo" id="grupo_nombre">
				<label for="nombre" class="form_label">Nombre</label>
				<div class="form_grupo-input">
					<input type="text" class="form_input" name="nombre" id="nombre" placeholder="Juan Mora">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Contraseña -->
			<div class="form_grupo" id="grupo_password">
				<label for="password" class="form_label">Contraseña</label>
				<div class="form_grupo-input">
					<input type="password" class="form_input" name="password" id="password">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="form_grupo" id="grupo_password2">
				<label for="password2" class="form_label">Repetir Contraseña</label>
				<div class="form_grupo-input">
					<input type="password" class="form_input" name="password2" id="password2">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="form_grupo" id="grupo_correo">
				<label for="correo" class="form_label">Correo Electrónico</label>
				<div class="form_grupo-input">
					<input type="email" class="form_input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="form_grupo" id="grupo_telefono">
				<label for="telefono" class="form_label">Teléfono</label>
				<div class="form_grupo-input">
					<input type="text" class="form_input" name="telefono" id="telefono" placeholder="4491234567">
					<i class="form_validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form_input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<!-- Grupo: Terminos y Condiciones -->
			<div class="form_grupo" id="grupo_terminos">
				<label class="form_label">
					<input class="form_checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="form_mensaje" id="form_mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el registro correctamente. </p>
			</div>

			<div class="form_grupo form_grupo-btn-enviar">
				<button type="submit" class="form_btn">Registrar</button>
				<p class="form_mensaje-exito" id="form_mensaje-exito">Registro enviado exitosamente!</p>
			</div>
		</form>
	</main>