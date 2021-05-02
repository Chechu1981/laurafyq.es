<script src="./js/material.js" type="text/javascript"  ></script>
<p></p<><form name="fichero" enctype="multipart/form-data" method="post" id="fichero" onKeyPress="if (event.keyCode === 13 && node.type !== 'TEXTAREA')event.returnValue = false;" >
    <span >TÍTULO</span><br/>
    <input type="text" name="nombre" id="nombre" /><p></p>
    <span  >DESCRIPCIÓN</span><br/>
    <textarea name="descripcion" id="descripcion" class="textarea" ></textarea><p></p>
    <span >TIPO</span>
    <select type="text" name="tipo" id="tipo" >
        <option></option>
        <option>PRESENTACION</option>
        <option>TEMA</option>
        <option>EJERCICIOS</option>
    </select><p></p>
    <span>CURSO</span>
    <select type="text" name="curso" id="curso" >
        <option></option>
        <?php
        include_once '../conexion/bbdd.php';
        $sentencia = mysqli_query($conn, "SELECT * FROM cursos");
        while ($fila = mysqli_fetch_row($sentencia)) {
            ?>
            <option value="<?php echo $fila[2] . substr($fila[1], 0, 3) ?>"><?php echo $fila[2] . 'º ' . $fila[1] ?></option>
        <?php } ?>
    </select> <p></p>
    <input type="file" id="archivo" multiple="true" name="archivo" data-browse-on-zone-click="true" /> 
    <p></p>
    <button id="enviar" type="button" >Publicar</button>
</form>

<div id="mensaje"></div>

<iframe style='display:none;border: none' id="edicionModal" width="850px" height="550px"></iframe>
<p></p>
<div id="cargarMaterial"></div>
<div id="snackbar">¡¡ Material publicado con éxito !!</div>
<div id="snackbarEliminar">¡¡ Fila eliminada !!</div>
<div id="snackbarCargando">Cargando</div>
<?php
$arrayNombres = "";
$senUnidades = mysqli_query($conn, "SELECT DISTINCT nombre FROM material ORDER BY nombre ASC");
while ($fila = mysqli_fetch_row($senUnidades)) {
    $arrayNombres = $arrayNombres . '"' . $fila[0] . '",';
}
?>
<script>
    /* $(nombre).autocomplete({
        source: [<?php echo $arrayNombres ?>]
    }); */
</script>
