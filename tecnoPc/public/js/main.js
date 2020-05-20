//Contraseña
var contra = document.getElementById("password");
var minus = document.getElementById("minus");
var mayus = document.getElementById("mayus");
var numero = document.getElementById("numero");
var largo = document.getElementById("largo");
//Nombre
var nombremsj = document.getElementById("name")
var nombre = document.getElementById("nombre");
//Apellido
var apellidomsj = document.getElementById("surname")
var apellido = document.getElementById("apellido");

function validacion(){
   	//valido el nombre
  }
  nombremsj.onfocus = function() {
  document.getElementById("nombreError").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
nombremsj.onblur = function() {
  document.getElementById("nombreError").style.display = "none";
}

nombremsj.onkeyup = function(){
  var nombrecampo = "^([A-Z][a-z]+)+$";
  if(nombremsj.value.match(nombrecampo)) {
    nombre.classList.remove("invalid");
    nombre.classList.add("valid");
  } else {
    nombre.classList.remove("valid");
    nombre.classList.add("invalid");
}
}
    //valido el Apellido

    function validacion(){
      }
      apellidomsj.onfocus = function() {
      document.getElementById("apellidoError").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    apellidomsj.onblur = function() {
      document.getElementById("apellidoError").style.display = "none";
    }

    apellidomsj.onkeyup = function(){
      var apellidocampo = "^([A-Z][a-z]+)+$";
      if(apellidomsj.value.match(apellidocampo)) {
        apellido.classList.remove("invalid");
        apellido.classList.add("valid");
      } else {
        apellido.classList.remove("valid");
        apellido.classList.add("invalid");
    }
    }


    //valido el email

    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    email.onblur = function(){
      if (this.value.trim() == '') {
        alert('El campo no puede estar vacio');
      } else if (!regexEmail.test(this.value)) {
        alert('El campo no tiene un formato valido');
      }
    

}
contra.onfocus = function() {
  document.getElementById("mensaje").style.display = "block";
}
//Valida contraseña
contra.onblur = function() {
  document.getElementById("mensaje").style.display = "none";
}

contra.onkeyup = function() {

  var minusculas = /[a-z]/g;
  if(contra.value.match(minusculas)) {
    minus.classList.remove("invalid");
    minus.classList.add("valid");
  } else {
    minus.classList.remove("valid");
    minus.classList.add("invalid");
}

  var mayusculas = /[A-Z]/g;
  if(contra.value.match(mayusculas)) {
    mayus.classList.remove("invalid");
    mayus.classList.add("valid");
  } else {
    mayus.classList.remove("valid");
    mayus.classList.add("invalid");
  }

  var numeros = /[0-9]/g;
  if(contra.value.match(numeros)) {
    numero.classList.remove("invalid");
    numero.classList.add("valid");
  } else {
    numero.classList.remove("valid");
    numero.classList.add("invalid");
  }

  if(contra.value.length >= 8) {
    largo.classList.remove("invalid");
    largo.classList.add("valid");
  } else {
    largo.classList.remove("valid");
    largo.classList.add("invalid");
  }
}

registro.onsubmit = function(event){
  if (nombrecampo.value.trim() == '') {
    alert('El campo nombre es obligatorio')
    event.preventDefault();
  } else if (apellidocampo.value.trim() == '') {
    alert('El campo apellido es obligatorio')
    event.preventDefault();
  } else if (email.value.trim() == '') {
    alert('El campo email es obligatorio')
    event.preventDefault();
  }

}
