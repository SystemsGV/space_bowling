	
	//esta funcion solo es para dar color a los campos de texto.
	function validacion(id)
		{
			var elem=document.getElementById(id);
			if (elem.checkValidity())
				elem.style.borderColor="deepskyblue";
			else
				elem.style.borderColor="red";
		}
	
	//esta funcion validar que los terminos este selecionado.
	function valida()
	{	
		if (document.fvalida.condiciones.checked==false)
				{
				alert("Tiene que aceptar las condiciones.")
				document.fvalida.condiciones.focus()
			return 0;
				}	
	}
	
	//validar los COMBOX SELECT
	
	
	
	
	
	

	//function enviado()
	//{
	//var nombreValido=document.getElementById('nombre').checkValidity();
	//var apellidoValido=document.getElementById('apellidos').checkValidity();
	//var apellidoValido=document.getElementById('tipo').checkValidity();
	//var apellidoValido=document.getElementById('numero').checkValidity();
	//var apellidoValido=document.getElementById('apellidos').checkValidity();
	//var apellidoValido=document.getElementById('depart').checkValidity();
	//var apellidoValido=document.getElementById('domicilio').checkValidity();
	//var apellidoValido=document.getElementById('telefono').checkValidity();

	//if (nombreValido && apellidoValido)
		//alert("LA INFORMACION  FUE ENVIADA EXITOSAMENTE...")
	//else
		//alert("POR FAVOR INGRESE INFORMACION REQUERIDA...")
	//}

//abrir nuea ventana emergente

function abrirVentana(url) {
    window.open(url,"nuevo", "directories=no, location=no, menubar=no, scrollbars=no, statusbar=no, tittlebar=no, resizable=no, status=no, width=485, height=550");
}

