function cleanFile(fileName){
  var cadenaTilde ="áéíóúüñÁÉÍÓÚÜÑ¿?çÇ";
  var cadenaIso = "aeiouunAEIOUUN__cc";
  let str = "";
  let cambio = false;
  for(i = 0;i<fileName.length;i++){
    cambio = false;
    for(h = 0;h<cadenaIso.length;h++){
      if(cadenaTilde[h] == fileName[i]){
        str += cadenaIso[h];
        cambio = true;;
      }
    }
    if(!cambio){
      str += fileName[i];
    }
  }
  return str;
}


$(document).ready(function () {
    var y = document.getElementById("snackbarCargando");
    $('#cargarMaterial').load('./backend/tablaMaterial.php');
    $('#enviar').click(function (e) {
        var archivo = document.getElementById('archivo');
        var size = cleanFile(archivo.files[0].size);
        var nombref = cleanFile(archivo.files[0].name);
        var type = archivo.files[0].type;
        var formulario = $('#fichero').serializeArray();
        formulario.push({name: 'nombreFichero', value: nombref});
        formulario.push({name: 'extension', value: type});
        formulario.push({name: 'tamano', value: size});
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "./backend/guardar.php",
            data: formulario,
            beforeSend: function (xhr) {
                y.className = "show";
            },
            success: function () {
                document.getElementById("fichero").reset();
                $('#cargarMaterial').load('./backend/tablaMaterial.php');
                y.className = "";
                var x = document.getElementById("snackbar");
                x.className = "show";
                setTimeout(function () {
                    x.className = x.className.replace("show", "");
                }, 3000);
            },
            error: function (request, error, errorThrown) {
                document.getElementById("fichero").reset();
                $('#cargarMaterial').load('./backend/tablaMaterial.php?error');
                y.className = "";
                var x = document.getElementById("snackbar");
                x.className = "show";
                setTimeout(function () {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }
        });

        var datos = new FormData();
        datos.append('archivo', $('#archivo')[0].files[0]);
        $.ajax({
            type: "post",
            dataType: "html",
            url: "./backend/guardarFichero.php",
            contentType: false,
            data: datos,
            processData: false,
        }).done(function (respuesta) {
            //
        }).fail(function( jqXHR, textStatus, errorThrown ) {

            if (jqXHR.status === 0) {
          
              alert('Not connect: Verify Network.');
          
            } else if (jqXHR.status == 404) {
          
              alert('Requested page not found [404]');
          
            } else if (jqXHR.status == 500) {
          
              alert('Internal Server Error [500].');
          
            } else if (textStatus === 'parsererror') {
          
              alert('Requested JSON parse failed.');
          
            } else if (textStatus === 'timeout') {
          
              alert('Time out error.');
          
            } else if (textStatus === 'abort') {
          
              alert('Ajax request aborted.');
          
            } else {
          
              alert('Uncaught Error: ' + jqXHR.responseText);
          
            }
        });
        return false;
    });
});
