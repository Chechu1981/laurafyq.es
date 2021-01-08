function eliminar(fila) {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "./backend/eliminar.php",
        data: {id: fila},
        success: function () {
            $('#cargarMaterial').load('./backend/tablaMaterial.php');
            var x = document.getElementById("snackbarEliminar");
            x.className = "show";
            setTimeout(function () {
                x.className = x.className.replace("show", "");
            }, 3000);
        },
        error: function (request, error, errorThrown) {
            $('#cargarMaterial').load('./backend/tablaMaterial.php');
            var x = document.getElementById("snackbarEliminar");
            x.className = "show";
            setTimeout(function () {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    });
}