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

function validacion(){

	var nombre, apellidos

	nombre = document.getElementById("nombre").value; 
	apellidos = document.getElementById("apellidos").value;

	if (nombre == "") {
		alert("El campo Nombre esta vacio");
		document.formulario.nombre.focus();
		return false;
	}
	else if (apellidos === "") {
		alert("El campo Apellido esta vacio");
		document.formulario.terminos.focus();
		return false;
	}

	else if (document.formulario.terminos.checked==0) {

		 alert("Debes aceptar los términos y condiciones");
		}
		else{
	       document.formulario.terminos.focus(); 
      	return 0;
		 }

	}

	// 	var validarRadio = function (e) {
	// 		if (formulario.opcion[0].cheked == true || formulario.opcion[1].cheked == true) {
	// 		}else{
	// 			alert("Seleccione Opcion");
	// 			e.preventDefault();
	// 		}



//abrir nueva ventana emergente

function abrirVentana(url) {
    window.open(url,"nuevo", "directories=no, location=no, menubar=no, scrollbars=no, statusbar=no, tittlebar=no, resizable=no, status=no, width=485, height=550");
}





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
