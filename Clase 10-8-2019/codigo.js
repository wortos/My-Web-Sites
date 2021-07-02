$(document).ready(function () {
    $("#hmantenimiento").click(function () {
        $("#mantenimiento").slideDown();
        $("#hmantenimiento").css("color", "red");
    });
    $("#hreparacion").click(function () {
        $("#reparacion").slideDown();
        $("#hreparacion").css("color", "red");
    });
    $("#someter").click(function () {
        var nombre = document.getElementById("formNombre").value;
        if (nombre == "" || nombre == null) {
            alert("No puede dejar el encasillado de nombre en blanco")
        } else {
            alert("Se sometieron los datos exitosamente.")
        }

    });
}); 
