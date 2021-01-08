$(document).ready(function () {
    $(guardar).click(function (e) {
        var formulario = $('#fichero').serializeArray();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../backend/update.php",
            data: formulario,
            beforeSend: function (xhr) {
            },
            success: function () {
                $('#tablaReg').load('./backend/nuevoTema.php');
            },
            error: function (request, error, errorThrown) {
                $('#tablaReg').load('./backend/nuevoTema.php');
            }
        });
        window.parent.document.getElementById('edicion').click();
    });
});