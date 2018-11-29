$(document).ready(function() {
		$("#registerForm").validate({
			rules : {
				username : {
					required : true,
					email: true
				},

				password : {
					maxlength : 20,
					minlength : 8,
					required : true
				},

				repassword : {
					maxlength : 20,
					required : true,
					equalTo : "#password"
				}

			}, //fin de las reglas, rules

			messages : {
				username : {
					required : "Campo obligatorio",
					email: "Introduce un email válido"
				},

				password : {
					maxlength : "Máximo 20 caracteres",
					minlength : "Mínimo de 8 carácteres",
					required : "Campo obligatorio"
				},

				repassword : {
					maxlength : "Máximo 20 caracteres",
					required : "Campo obligatorio",
					equalTo : "Las contraseñas no coinciden"
				}
			}, //fin de los mensajes

		}); //fin validate
	}); //fin ready

/*function ValidateEmail(email){
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(email.value.match(mailformat)){
		document.formulario.username.focus();
		return true;
	}
	else{
		alert("Introduce una direccion de correo valida");
		document.formulario.username.focus();
		return false;
	}

	{{ URL::to('/login') }}
}*/

/*var inputEmail = document.getElementById("email");
var boton = document.getElementById("boton");

inputEmail.oninput = function(){
	if(validarEmail(this.value)){
		this.style.color = "green";
		

	}else{
		this.style.color = "red";
		boton.disabled=true;
	}
}*/

/*var numeroTlf = document.getElementById("tlf");
numeroTlf.oninput = function(){
	if(validarNumero(this.value)){
		this.style.color = "green";
		boton.disabled=false;

	}else{
		this.style.color = "red";
		boton.disabled=true;
	}
}*/

/*
function validarEmail(email){
	
	if(
		email.includes("@") && 
		email.includes(".") && 
		email.length > 2 && 
		email.indexOf(" ") == -1 &&

		email.indexOf("@") == email.lastIndexOf("@") &&
		email.indexOf("@") < email.lastIndexOf(".") && 

		email.lastIndexOf(".")+2 < email.length && 
		email.lastIndexOf(".")+7 > email.length &&
		email.lastIndexOf(".") - email.lastIndexOf("@") > 1
		){

		 
		return true;

		}
	return false;

}*/
/*function validarNumero(numero){
	numero.trim();
	if(numero.length == 9 && Number.isInteger(parseInt(numero)) && numero.indexOf(".") == -1 && numero > 0 && numero < 1000000000){
		return true;
	}else{
		return false;
	}
}*/
	
