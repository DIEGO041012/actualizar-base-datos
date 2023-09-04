<table class="table table-bordered" cellspacing="0" cellpadding="0">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo Electronico</th>
            <th>Telefono</th>
            <th style="width: 160px;">Borrar Alumno</th>
            <th style="width: 160px;">Actualizar Alumno</th>
        </tr>
     
            <?php
            //Mostrar alumnos
            $sql="SELECT * FROM alumno ORDER BY id ASC";
            $query= $pdo->prepare($sql);
            $query->execute();
            $list=$query->fetchAll();
            foreach ($list as $rs)
            {
             ?>   
             <tr>
                 <td><?php echo $rs['nombres'];  ?></td>
                 <td><?php echo $rs['apellidos'];  ?></td>
                 <td><?php echo $rs['email'];  ?></td>
                 <td><?php echo $rs['telefono'];  ?></td>
                 <td><a href="#" onclick="delete_member(<?php echo $rs['id']; ?>)">Eliminar Alumno</a></td>
                 <td><a href="#" >Actualizar Alumno</a></td>
             </tr>
             <?php
            }
           ?> 
        
</table>