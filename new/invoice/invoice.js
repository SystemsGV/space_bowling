"use strict";

(function () {
	const inputs = document.querySelectorAll(".contact-input"),
		toggleBtn = document.querySelector(".theme-toggle"),
		allElements = document.querySelectorAll("*"),
		f = document.getElementById("invoiceForm");

	const invoiceDateInput = document.getElementById("invoiceDate");

	var cleave = new Cleave(invoiceDateInput, {
		date: true,
		delimiter: "/",
		datePattern: ["d", "m", "Y"],
	});

	const today = new Date();
	const day = String(today.getDate()).padStart(2, "0");
	const month = String(today.getMonth() + 1).padStart(2, "0");
	const year = today.getFullYear();

	const todayFormatted = `${day}/${month}/${year}`;

	cleave.setRawValue(todayFormatted);

	toggleBtn.addEventListener("click", () => {
		document.body.classList.toggle("dark");
		allElements.forEach((el) => {
			el.classList.add("transition");
			setTimeout(() => {
				el.classList.remove("transition");
			}, 1000);
		});
	});

	inputs.forEach((ipt) => {
		ipt.addEventListener("focus", () => {
			ipt.parentNode.classList.add("focus");
			ipt.parentNode.classList.add("not-empty");
		});

		ipt.addEventListener("blur", () => {
			if (ipt.value == "") {
				ipt.parentNode.classList.remove("not-empty");
			}
			ipt.parentNode.classList.remove("focus");
		});
	});

	const Toast = Swal.mixin({
		toast: true,
		position: "top",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		},
	});
	f.addEventListener("submit", function (e) {
		e.preventDefault(); // Evitar el envío del formulario

		let v = true;
		let errorMessage = ""; // Mensaje de error acumulado

		// Validación del tipo de documento
		const dt = document.getElementById("documentType");
		if (!dt.value) {
			v = false;
			errorMessage = "El tipo de documento es obligatorio";
		}

		// Validación del correo electrónico
		const ie = document.querySelector('input[name="invoiceEmail"]');
		if (!ie.value) {
			v = false;
			errorMessage = "El correo electrónico es obligatorio";
		} else {
			const ep = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			if (!ep.test(ie.value)) {
				v = false;
				errorMessage = "El correo electrónico no es válido";
			}
		}

		const ts = document.getElementById("invoiceAmount");
		if (!ts.value) {
			v = false;
			errorMessage = "El campo Importe Total es obligatorio";
		}

		// Validación del número de documento
		const d = document.querySelector('input[name="invoiceDoc"]');
		if (!d.value) {
			v = false;
			errorMessage = "El número de documento es obligatorio";
		} else if (d.value.length < 8 || d.value.length > 12) {
			v = false;
			errorMessage =
				"El número de documento debe tener entre 8 y 12 caracteres";
		}

		// Resto de las validaciones ...

		if (!v) {
			Toast.fire({
				icon: "error",
				title: errorMessage, // Mostrar el mensaje de error acumulado
			});
			return; // Detener la validación si hay algún error
		}

		// Mostrar el spinner y ocultar el texto del botón
		const button = document.querySelector(".btn");
		const buttonText = button.querySelector(".button-text");
		const spinner = button.querySelector(".spinner");

		buttonText.style.display = "none";
		spinner.style.display = "inline-block";

		// Si todo está validado correctamente, envía el formulario via fetch
		fetch("sendInvoice", {
			method: "POST",
			body: new FormData(this),
		})
			.then((response) => {
				if (response.ok) {
					return response.json(); // Parsear la respuesta como JSON
				} else {
					throw new Error("Error en la solicitud");
				}
			})
			.then((data) => {
				if (data.status === "success") {
					Toast.fire({
						icon: data.status,
						title: data.message,
					});

					this.reset();
				} else {
					Toast.fire({
						icon: data.status,
						title: data.message,
					});
				}
			})
			.catch((error) => {
				console.error("Error:", error);
				alert(
					"Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo."
				);
			})
			.finally(() => {
				// Ocultar el spinner y mostrar el texto del botón
				buttonText.style.display = "inline";
				spinner.style.display = "none";
			});
	});
})();
