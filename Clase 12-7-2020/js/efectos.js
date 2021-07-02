$(document).ready(function () {
    $("#restablece").click(function () {
        //alert("Funciona");
        $(".escondido").slideDown();
    });
    $("#submit").click(function () {
        //alert("Funciona");
        var nombre = document.getElementById("FirstName").value;
        if (nombre == "" || nombre == null) {
            alert("No puede dejar el encasillado de nombre vacío.");
        } else {
            alert("Los datos se sometieron correctamente.");
        }
    });
});