function validacion() {
	var nombre,
		apellidos,
		tipo,
		numero,
		depart,
		distrito,
		domicilio,
		email,
		telefono;

	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	tipo = document.getElementById("tipo").selectedIndex;
	numero = document.getElementById("numero").value;
	depart = document.getElementById("depart").selectedIndex;
	distrito = document.getElementById("distrito").value;
	domicilio = document.getElementById("domicilio").value;
	email = document.getElementById("email").value;
	telefono = document.getElementById("telefono").value;

	var response = grecaptcha.getResponse();


	// subject = document.getElementById("subject").value;
	// opcion = document.getElementById("opcion").value;
	// descripcion = document.getElementById("descripcion").value;
	// monto = document.getElementById("monto").value;
	// tipoderq = document.getElementById("tipoderq").value;
	// fecha = document.getElementById("fecha").value;
	// message = document.getElementById("message").value;
	elemento = document.getElementById("terminos");

	if (nombre === "") {
		alert("Escriba su Nombre");
		return false;
	} else if (apellidos === "") {
		alert("Escriba sus Apellidos");
		return false;
	} else if (tipo == null || tipo == 0) {
		alert("Seleccione Tipo De Documento");
		return false;
	} else if (numero === "") {
		alert("Ingrese su numero de DNI");
		return false;
	} else if (depart == null || depart == 0) {
		alert("Seleccione Departamento");
		return false;
	} else if (distrito === "") {
		alert("Escriba su Distrito");
		return false;
	} else if (domicilio === "") {
		alert("Escriba su direccion");
		return false;
	} else if (telefono === "") {
		alert("Ingrese su Telefono");
		return false;
	} else if (email === "") {
		alert("Escriba su Correo Electronico");
		return false;
	} else if (!elemento.checked) {
		alert("Debes aceptar los términos y condiciones");
		return false;
	}

	if (response.length === 0) {
		alert("Por favor verifica el reCAPTCHA.");
		return false; // detiene el envío del formulario
	}

	return true;
}

//	var validarRadio = function (e) {
// 		if (formulario.opcion[0].cheked == true || formulario.opcion[1].cheked == true) {
// 		}else{
// 			alert("Seleccione Opcion");
// 			e.preventDefault();
// 		}

//abrir nueva ventana emergente

function abrirVentana(url) {
	window.open(
		url,
		"nuevo",
		"directories=no, location=no, menubar=no, scrollbars=no, statusbar=no, tittlebar=no, resizable=no, status=no, width=485, height=550"
	);
}

// function validar() {
// 	var nombre, apellidos, tipo, numero, depart, distrito, domicilio, email, telefono, subject, opcion, descripcion, monto, tipo-de-rq, fecha, message, expresion;
// 	nombre = document.getElementById("nombre").value;
// 	apellidos = document.getElementById("apellidos").value;
// 	tipo = document.getElementById("tipo").value;
// 	numero = document.getElementById("numero").value;
// 	depart = document.getElementById("depart").value;
// 	distrito = document.getElementById("distrito").value;
// 	domicilio = document.getElementById("domicilio").value;
// 	email = document.getElementById("email").value;
// 	telefono = document.getElementById("telefono").value;
// 	subject = document.getElementById("subject").value;
// 	opcion = document.getElementById("opcion").value;
// 	descripcion = document.getElementById("descripcion").value;
// 	monto = document.getElementById("monto").value;
// 	tipo-de-rq = document.getElementById("tipo-de-rq").value;
// 	fecha = document.getElementById("fecha").value;
// 	message = document.getElementById("message").value;

// 	if (nombre === "") {
// 		alert("El campo Nombre esta vacio");
// 		return false;
// 	}
// 	else if (apellidos === "") {
// 		alert("El campo Apellido esta vacio");
// 		return false;
// 	}
// }

//esta funcion validar que los terminos este selecionado.

// function valida()
// {
// 	if (document.fvalida.condiciones.checked==false)
// 			{
// 			alert("Tiene que aceptar las condiciones.")
// 			document.fvalida.condiciones.focus()
// 		return 0;
// 			}
// }
// function() {
// 	var formulario = document.getElementsByName('formulario')[0],
// 		elementos = formulario.elements,
// 		button = document.getElementById('enviar');

// 	var validarnombre = function(e) {
// 		if (formulario.nombre.value == 0) {
// 			alert("Completa el Campo Nombre");
// 			e.preventDefault();
// 		}
// 	};
// 	var validarRadio = function (e) {
// 		if (formulario.opcion[0].cheked == true || formulario.opcion[1].cheked == true) {
// 		}else{
// 			alert("Seleccione Opcion");
// 			e.preventDefault();
// 		}
// 	};
// 	var validarcheckbox = function (e) {
// 		if (formulario.terminos.cheked == false) {
// 			alert("Acepte los Terminos");
// 			e.preventDefault();
// 		}
// 	};
