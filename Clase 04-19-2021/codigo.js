$(document).ready(function () {
    $("#hmantenimiento").click(function () {
        //alert("Sí");
        $("#mantenimiento").slideDown();
        $("#hmantenimiento").css("color", "yellow");
    })
    $("#hreparacion").click(function () {
        $("#reparacion").slideDown();
        $("#hreparacion").css("color", "yellow");
    })
    $("#someter").click(function () {
        //alert("si");
        var nombre = document.getElementById("nombreForm").value;
        if (nombre == "" || nombre == null) {
            alert("No puede dejar el encasillado del nombre en blanco.");
        } else {
            alert("Los datos se sometieron exitosamente.");
        }
    })
})
