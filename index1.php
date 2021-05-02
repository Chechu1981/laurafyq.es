<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head id="recusrsos">
        <meta http-equiv="Content-Type" content="width=400, initial-scale=0" name="viewport" />
        <meta name="Description" content="Contenido didáctico de física y química de secundaria" />
        <title>Laura Royuela Romero</title>
        <link rel="icon" type="image/png" href="img/favicon-32x32.png"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/propias.css" rel="stylesheet" type="text/css"/>
        <link href="css/toast.css" rel="stylesheet" type="text/css" />
        <link href="css/menuDesplegable.css" rel="stylesheet" type="text/css" />
        <script src="vendor/jquery/jquery.js" type="text/javascript"></script>
        <script src="vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/propias.js" type="text/javascript"></script>
    </head>
   <body lang="es">
<div class="container">
    <p>&nbsp;</p>
    <p>&nbsp;</p>    
    <DIV id="PANEL_0" class="panel panel-primary text-justify">
        <DIV class="panel-heading">
            <H3 class="panel-title">Envio de solicitud</H3>
        </DIV>
        <DIV class="panel-body">
            <FORM enctype="multipart/form-data">
                <label for="file-es" role="button">Seleccionar Archivos</label>
                <input id="file-es" name="file-es[]" type="file" multiple>
                <SMALL class="form-text text-muted">Seleccionar archivos de Office 201X: docx, xlsx, pptx y pdf hasta un máximo de 5.</SMALL>
            </form>
            <p>&nbsp;</p>
            <div class="alert alert-success" role="alert"></div>
        </DIV>
    </DIV>        
</div>    
<script>
// Tipos de archivos admitidos por su extensión
  var tipos = ['docx','xlsx','pptx','pdf'];
// Contadores de archivos subidos por tipo
  var contadores=[0,0,0,0];
// Reinicia los contadores de tipos subidos
  var reset_contadores = function() {
    for(var i=0; i<tipos.length;i++) {
       contadores[i]=0;
    }
  };
// Incrementa el contador de tipo según la extensión del archivo subido	
  var contadores_tipos = function(archivo) {
    for(var i=0; i<tipos.length;i++) {
      if(archivo.indexOf(tipos[i])!=-1) {
        contadores[i]+=1;
        break;	
      }
    }
  };
// Inicializamos el plugin fileinput:
//  traducción al español
//  script para procesar las peticiones de subida
//  desactivar la subida asíncrona
//  máximo de ficheros que se pueden seleccionar	
//  Tamaño máximo en Kb de los ficheros que se pueden seleccionar
//  no mostrar los errores de tipo de archivo (cuando el usuario selecciona un archivo no permitido)
//  tipos de archivos permitidos por su extensión (array definido al principio del script)
  $('#file-es').fileinput({
      language: 'es',
      uploadUrl: '/recibe-fileinput.php',
      uploadAsync: false,
      maxFileCount: 5,
      maxFileSize: 75,
      removeFromPreviewOnError: true,
      allowedFileExtensions : tipos
  });
// Evento filecleared del plugin que se ejecuta cuando pulsamos el botón 'Quitar'
//    Vaciamos y ocultamos el div de alerta
  $('#file-es').on('filecleared', function(event) {
    $('div.alert').empty();
    $('div.alert').hide();		
  });
// Evento filebatchuploadsuccess del plugin que se ejecuta cuando se han enviado todos los archivos al servidor
//    Mostramos un resumen del proceso realizado
//    Carpeta donde se han almacenado y total de archivos movidos
//    Nombre y tamaño de cada archivo procesado
//    Totales de archivos por tipo
  $('#file-es').on('filebatchuploadsuccess', function(event, data, previewId, index) {
    var ficheros = data.files;
    var respuesta = data.response;
    var total = data.filescount;
    var mensaje;
    var archivo;
    var total_tipos='';
	
    reset_contadores(); // Resetamos los contadores de tipo de archivo
    // Comenzamos a crear el mensaje que se mostrará en el DIV de alerta
    mensaje='<p>'+total+ ' ficheros almacenados en la carpeta: '+respuesta.dirupload+'<br><br>';
    mensaje+='Ficheros procesados:</p><ul>';
    // Procesamos la lista de ficheros para crear las líneas con sus nombres y tamaños
    for(var i=0;i<ficheros.length;i++) {
      if(ficheros[i]!=undefined) {
        archivo=ficheros[i];				
        tam=archivo.size / 1024;
        mensaje+='<li>'+archivo.name+' ('+Math.ceil(tam)+'Kb)'+'</li>';
        contadores_tipos(archivo.name);  // Incrementamos el contador para el tipo de archivo subido
      } 
    };
		
    mensaje+='</ul><br/>';
    // Línea que muestra el total de ficheros por tipo que se han subido
    for(var i=0; i<contadores.length; i++)  total_tipos+='('+contadores[i]+') '+tipos[i]+', ';
    // Apaño para eliminar la coma y el espacio (, ) que se queda en el último procesado
    total_tipos=total_tipos.substr(0,total_tipos.length-2);
    mensaje+='<p>'+total_tipos+'</p>';
    // Si el total de archivos indicados por el plugin coincide con el total que hemos recibido en la respuesta del script PHP
    // mostramos mensaje de proceso correcto
    if(respuesta.total==total) mensaje+='<p>Coinciden con el total de archivos procesados en el servidor.</p>';
    else mensaje+='<p>No coinciden los archivos enviados con el total de archivos procesados en el servidor.</p>';
    // Una vez creado todo el mensaje lo cargamos en el DIV de alerta y lo mostramos
    $('div.alert').html(mensaje);
    $('div.alert').show();
  });
// Ocultamos el div de alerta donde se muestra un resumen del proceso
  $('div.alert').hide();
	
</script>
</body>
</html>