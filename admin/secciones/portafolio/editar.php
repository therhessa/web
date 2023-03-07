<?php 
include("../../bd.php");

if(isset($_GET['txtID'])){ //echo $_GET['txtID'];
    //Recuperar los datos ID correspodiente(seleccionado)
    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"" ;
   echo $_GET['txtID'];
    $sentencia=$conexion->prepare("SELECT * FROM tbl_portafolio WHERE id=:id ;");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $titulo= $registro['titulo'];
    $subtitulo= $registro['subtitulo'];
    $imagen= $registro['imagen'];
    $descripcion=$registro['descripcion'];
    $cliente=$registro['cliente'];
    $categoria=$registro['categoria'];
    $url=$registro['url'];
    //echo $titulo;
    print_r($registro);
}
/*
if ($_POST){
    $icono=(isset($_POST['txtID'])) ? $_POST['txtID']:"";
    $titulo=(isset($_POST['titulo'])) ? $_POST['titulo']:"";
    $subtitulo=(isset($_POST['subtitulo'])) ? $_POST['subtitulo']:"";
    $imagen=(isset($_POST['imagen'])) ? $_POST['imagen']:"";
    $descripcion=(isset($_POST['descripcion'])) ? $_POST['descripcion']:"";
    $cliente=(isset($_POST['cliente'])) ? $_POST['cliente']:"";
    $categoria=(isset($_POST['categoria'])) ? $_POST['categoria']:"";
    $url=(isset($_POST['url'])) ? $_POST['url']:"";
  */
   /* 
    $sentencia=$conexion->prepare("UPDATE tbl_servicios
    SET
    icono=:icono, 
    titulo=:titulo, 
    descripcion=:descripcion 
    WHERE id=:id ;");
    $sentencia->bindParam(":icono",$icono);
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $mensaje="Registro modificado con exito.";
    header("Location:index.php?mensaje=".$mensaje);

*/

//}




include("../../template/header.php");?>

<div class="card">
    <div class="card-header">
       Producto del portafolio
    </div>
    <div class="card-body">
        <form action=""  enctype="multipart/form-data"   method="post">
            <div class="mb-3">
            <label for="titulo" class="form-label">Titulo:</label>
            <input type="text"
                class="form-control"  value ="<?php  echo $titulo;?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
            
            </div>
            <div class="mb-3">
            <label for="subtitulo" class="form-label">Subitulo:</label>
            <input type="text"
                class="form-control" value ="<?php  echo $subtitulo;?>" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">
            
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen:</label>
           <?php  echo $imagen;?>
              <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
             
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion:</label>
              <input type="text"
                class="form-control"  value ="<?php  echo $descripcion;?>" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
             
            </div>
            <div class="mb-3">
              <label for="cliente" class="form-label">Cliente:</label>
              <input type="text"
                class="form-control"value ="<?php  echo $cliente;?>" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Cliente">
              
            </div>
            <div class="mb-3">
              <label for="categoria" class="form-label">Categoria:</label>
              <input type="text"
                class="form-control" value ="<?php  echo $categoria;?>" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
              
            </div>
            <div class="mb-3">
              <label for="url" class="form-label">URL:</label>
              <input type="text"
                class="form-control" value ="<?php  echo $url;?>" name="url" id="url" aria-describedby="helpId" placeholder="URL del  proyecto">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


       

        </form>
       
    </div>
    
</div>



<?php include("../../template/footer.php");?>

