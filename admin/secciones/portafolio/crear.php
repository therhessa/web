<?php 
include("../../bd.php");
if($_POST){
    print_r($_POST);
    print_r($_FILES);
    //recibimos los valores del formulario
    /*
    $icono=(isset($_POST['icono'])) ? $_POST['icono']:"";
    $titulo=(isset($_POST['titulo'])) ? $_POST['titulo']:"";
    $descripcion=(isset($_POST['descripcion'])) ? $_POST['descripcion']:"";
  
    
    $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios` (`ID`, `icono`, `titulo`, `descripcion`) VALUES (NULL, :icono, :titulo, :descripcion);");
    $sentencia->bindParam(":icono",$icono);
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->execute();
    $mensaje="Registro agregado con exito.";
    header("Location:index.php?mensaje=".$mensaje);
*/
}


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
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
            
            </div>
            <div class="mb-3">
            <label for="subtitulo" class="form-label">Subitulo:</label>
            <input type="text"
                class="form-control" name="subtitulo" id="subtitulo" aria-describedby="helpId" placeholder="Subtitulo">
            
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen:</label>
              <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" aria-describedby="fileHelpId">
             
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripcion:</label>
              <input type="text"
                class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripcion">
             
            </div>
            <div class="mb-3">
              <label for="cliente" class="form-label">Cliente:</label>
              <input type="text"
                class="form-control" name="cliente" id="cliente" aria-describedby="helpId" placeholder="Cliente">
              
            </div>
            <div class="mb-3">
              <label for="categoria" class="form-label">Categoria:</label>
              <input type="text"
                class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Categoria">
              
            </div>
            <div class="mb-3">
              <label for="url" class="form-label">URL:</label>
              <input type="text"
                class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="URL del  proyecto">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


       

        </form>
       
    </div>
    
</div>








<?php include("../../template/footer.php");?>

