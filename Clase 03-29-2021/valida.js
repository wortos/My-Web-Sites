function funValida() {
    //alert("Se llamó");
    var validado = validoCampos();
    if (validado == false) {
        alert("No debe dejar los campos en blanco.");
    } else {
        alert("Usted llenó todos los campos.");
        var name = document.getElementById("nombre").value;
        localStorage.setItem("ejemplo", name);
        window.location.href = "confirmacion.html";
    }
}

function validoCampos() {
    var name = document.getElementById("nombre").value;
    var email = document.getElementById("correo").value;
    if (name == "" || email == "") {
        return false;
    } else {
        return true;
    }
}