<?php
include("../../bd.php");

//Seleccionar registros
$sentencia=$conexion->prepare("SELECT * FROM `tbl_portafolio` ");
$sentencia->execute();
$lista_portafolio=$sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../template/header.php");?>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Titulo</th>
                      
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cliente&Cliente</th>
                        
                        <th scope="col">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista_portafolio as $registros ) { ?>
                    <tr class="">
                    <td scope="col"><?php echo $registros['ID'] ;?> </td>
                        <td scope="col">
                           <h6><?php echo $registros['titulo'] ;?></h6> 
                            <?php echo $registros['subtitulo'] ;?>
                            <br/>-<?php echo $registros['url'] ;?>
                    
                        </td>
                        
                        <td scope="col"><?php echo $registros['imagen'] ;?></td>
                        <td scope="col"><?php echo $registros['descripcion'] ;?></td>
                       
                        <td scope="col">
                            -<?php echo $registros['categoria'] ;?>
                            <br/>-<?php echo $registros['cliente'] ;?>
                    
                        </td>
                    
                        <td scope="col">
                        <a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registros['ID'] ;?>" role="button">Editar</a>
                            | 
                            <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID'] ;?>" role="button">Eliminar</a>

                        </td>
                    </tr>
                    <?php } ?>
                
                </tbody>
            </table>
        </div>
        
        
    </div>
   
</div>
<?php include("../../template/footer.php");?>