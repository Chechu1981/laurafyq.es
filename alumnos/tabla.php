
<section id="tabla" style="padding: 7em;display: block;align-content: left;" >
    
    <div class="col-lg-8 mx-auto" >
        <table class="control-group tablaAlumnos tabla" style="border: 3px;border-collapse: separate;margin: auto">
            <tr>
                <th></th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>CLASE</th>
                <th>IDIOMA</th>
                <th>TUTOR</th>
                
                <th><img src="./img/calendar-check.svg" width="20px" style="cursor: pointer" /></th>   
                <th><img src="./img/edit.svg" width="20px" style="cursor: pointer" /></th>
            </tr>
            <?php
            include_once '../conexion/bbdd.php';

            $sentencia = mysqli_query($conn, "SELECT * FROM alumnos");
            $contador = 1;

            while ($fila = mysqli_fetch_row($sentencia)) {
                
//                $fecha = date_create($fila[4]);
                ?>
                <tr >
                    <td><?php echo $contador++; ?></td>
                    <td><?php echo utf8_encode(strtoupper($fila[1])) ?></td>
                    <td><?php echo utf8_encode(strtoupper($fila[2])) ?></td>
                    <td><?php echo utf8_encode(strtoupper($fila[3])) ?></td>
                    <td><?php echo utf8_encode(strtoupper($fila[4])) ?></td>    
                    <td>LAURA ROYUELA ROMERO</td>
                    <td style="cursor: pointer"><i onclick="eliminar(<?php echo strtoupper($fila[0]) ?>)" class="far fa-trash-alt"></i></td>
                    <td style="cursor: pointer"><i class="far fa-edit"></i></td>                    
                    </tr>
                <?php
            }
            ?> 

        </table>
        
    </div>
</section>