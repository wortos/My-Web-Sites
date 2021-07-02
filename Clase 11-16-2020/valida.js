function validarFormulario() {
    //alert("Lo llamó");
    var validado = validoCampos();
    if (validado == false) {
        alert("No debe dejar los encasillados en blanco.");
    } else {
        //alert("Usted entró bien los datos");
        window.location.href = "confirmacion.html";
    }
}

function validoCampos() {
    var nombre = document.getElementById("name").value;
    var correo = document.getElementById("email").value;
    if (nombre == "" || correo == "") {
        return false;
    } else {
        return true;
    }
}