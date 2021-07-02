function validaFormulario() {
  var validado = validoCampos();
  if (validado == false) {
    alert('No debe dejar campos en blanco');
  } else {
    window.location.href="confirmado.html";
  }
}

function validoCampos() {
  var nombre = document.getElementById('nombre').value;
  var email = document.getElementById('email').value;
  if (nombre =="" || email=="") {
    return false;
  } else {
    return true;
  }
}
