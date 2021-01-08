<div class="row">
    <div class="col-sm-2  align-self-center">
        <button type="button" id="atras" class="btn btn-secondary "><img src="./img/arrow_back_ios_new-black-18dp.svg"
                alt="atras"></button>
    </div>
    <div class="col-sm-10 align-self-center">
        <p class="h1"><?php echo $_POST['curso'] ?></pack>
    </div>
</div>
<?php
include_once '../conexion/bbdd.php';
if(isset($_POST['tema'])){
    $ficheroTemas = "SELECT * FROM material WHERE curso= '" . $_POST['cursoid'] . "'AND nombre = '".$_POST['tema']."'GROUP BY nombre ORDER by nombre,tipo ASC";
}else{
    $ficheroTemas = "SELECT * FROM material WHERE curso= '" . $_POST['cursoid'] . "' GROUP BY nombre ORDER by nombre,tipo ASC";
}

$ficheroFilaTemas = mysqli_query($conn, $ficheroTemas);
$contador = 0;
require_once "iconDesign.php";   

while ($Temas = mysqli_fetch_row($ficheroFilaTemas)) { 
    $titulo = new IconDesign($Temas);?>

<div class="card text-Light bg-Light mb-3">
    <div class="card-header "><?php echo $titulo->getName(); ?></div>
    <div class="card-body">
        <?php
    
    $fichero = "SELECT * FROM material WHERE curso= '" . $_POST['cursoid'] . "'AND nombre = '".$Temas[1]."' ORDER by nombre,tipo ASC";
           
    $ficheroFila = mysqli_query($conn, $fichero);
    while($fila = mysqli_fetch_row($ficheroFila)){  
        $material = new IconDesign($fila);
        ?>
<a href="<?php echo $material->getRute(); ?>" data-bs-toggle="tooltip" data-bs-html="true"
                    data-bs-placement="top" title="<?php echo $material->getFileName(); ?>"
                    target="_blank">
        <div class="row <?php echo $material->getStyle(); ?> m-1">
            <div class="col-1">
                <?php echo $contador += 1; ?>
            </div>
            <div class="col-1" title="<?php echo $material->getTypeName() ?>">
                <?php echo $material->getType(); ?>
            </div>
            <div class="col">
                <?php echo $material->getIcon().' '.$material->getDescription(); ?>
            </div>
            <div class="col-4">
                <?php echo $material->getSize(); ?>b
            </div>
        </div>
</a>
        <?php } ?>
    </div>
</div>

<?php } ?>