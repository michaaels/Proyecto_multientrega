const formulario = document.getElementById('validacion');
const inputs = document.querySelectorAll('#validacionRegistro input');	

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
			
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();

		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo_${campo}`).classList.remove('form_grupo-incorrecto');
		document.getElementById(`grupo_${campo}`).classList.add('form_grupo-correcto');
		document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo_${campo} .form_input-error`).classList.remove('form_input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo_${campo}`).classList.add('form_grupo-incorrecto');
		document.getElementById(`grupo_${campo}`).classList.remove('form_grupo-correcto');
		document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo_${campo} .form_input-error`).classList.add('form_input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value != inputPassword2.value){
		document.getElementById(`grupo_password2`).classList.add('form_grupo-incorrecto');
		document.getElementById(`grupo_password2`).classList.remove('form_grupo-correcto');
		document.querySelector(`#grupo_password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo_password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo_password2 .form_input-error`).classList.add('form_input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo_password2`).classList.remove('form_grupo-incorrecto');
		document.getElementById(`grupo_password2`).classList.add('form_grupo-correcto');
		document.querySelector(`#grupo_password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo_password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo_password2 .form_input-error`).classList.remove('form_input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked ){
		formulario.reset();

		document.getElementById('form_mensaje-exito').classList.add('form_mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('form_mensaje-exito').classList.remove('form_mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.form_grupo-correcto').forEach((icono) => {
			icono.classList.remove('form_grupo-correcto');
		});
	} else {
		document.getElementById('form_mensaje').classList.add('form_mensaje-activo');
	}
});

function login_panel(){
var user=document.getElementById('user_login');
var pass=document.getElementById('pass_login');

if(user.value.length>0 && pass.value.length>0)

	switch (user.value) {
		case 'admin':
			mostrar('admin_panel')
			ocultar('user_panel')
			break;
		case 'user':
			mostrar('user_panel')
			ocultar('admin_panel')
			break;
		default:
			ocultar('admin_panel')
			ocultar('user_panel')
			break;
	}
}

function mostrar(id) {
	list = document.getElementById(id);
	list.style.display = '';
}

function ocultar(id) {
	list = document.getElementById(id);
	list.style.display = 'none';
}

