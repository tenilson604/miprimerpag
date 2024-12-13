<?php



    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtApellidop=(isset($_POST['txtApellidop']))?$_POST['txtApellidop']:"";
    $txtApellidom=(isset($_POST['txtApellidom']))?$_POST['txtApellidom']:"";
    $txtCorreo=(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
    $txtFoto=(isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";
   
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";

    $accionAgregar="";
    $accionModificar=$accionEliminar=$accionCancelar="disabled";
    $mostrarModal=false;
    
    include ("Conexion/conexion2.php");

    switch($accion){
        case "btnAgregar":

                $sentencia=$pdo->prepare("INSERT INTO empleados (Nombre,Apellidop,Apellidom,Correo,Foto)
                VALUES (:Nombre,:Apellidop,:Apellidom,:Correo,:Foto) ");
                
                $sentencia->bindParam(':Nombre',$txtNombre);
                $sentencia->bindParam(':Apellidop',$txtApellidop);
                $sentencia->bindParam(':Apellidom',$txtApellidom);
                $sentencia->bindParam(':Correo',$txtCorreo);

                $Fecha= new DateTime();
                $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"image.jpg";

                $tmpFoto= $_FILES["txtFoto"]["tmp_name"];

                if($tmpFoto!=""){
                    move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);
                }


                $sentencia->bindParam(':Foto',$nombreArchivo);
                $sentencia->execute();
                

                header('Location: CRUD.php');
            break;
        case "btnModificar":

                $sentencia=$pdo->prepare("UPDATE empleados SET 
                Nombre=:Nombre,
                Apellidop=:Apellidop,
                Apellidom=:Apellidom,
                Correo=:Correo WHERE
                id=:id");

                
                $sentencia->bindParam(':Nombre',$txtNombre);
                $sentencia->bindParam(':Apellidop',$txtApellidop);
                $sentencia->bindParam(':Apellidom',$txtApellidom);
                $sentencia->bindParam(':Correo',$txtCorreo);

                $sentencia->bindParam(':id',$txtID);
                $sentencia->execute();

                $Fecha= new DateTime();
                $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

                $tmpFoto= $_FILES["txtFoto"]["tmp_name"];

                if($tmpFoto!=""){
                    move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);

                    $sentencia=$pdo->prepare("SELECT Foto FROM empleados WHERE id=:id");
                    $sentencia->bindParam(':id',$txtID);
                    $sentencia->execute();
                    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
                    print_r($empleado);

                    if(isset($empleado["Foto"])){
                        if(file_exists("imagenes/".$empleado["Foto"])){
                            if($item['Foto']!="imagen.jpg"){
                                unlink("imagenes/".$empleado["Foto"]);
                            }
                            
                        }
                    }


                $sentencia=$pdo->prepare("UPDATE empleados SET 
                Foto=:Foto WHERE
                id=:id");
                $sentencia->bindParam(':Foto',$nombreArchivo);
                $sentencia->bindParam(':id',$txtID);
                $sentencia->execute();
                }


                

                header('Location: CRUD.php');

            echo $txtID;
            echo "Presionaste btnModificar";
            break;
        case "btnEliminar":

            $sentencia=$pdo->prepare("SELECT Foto FROM empleados WHERE id=:id");
            $sentencia->bindParam(':id',$txtID);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            print_r($empleado);

            if(isset($empleado["Foto"])&&($item['Foto']!="imagen.jpg")){
                if(file_exists("imagenes/".$empleado["Foto"])){
                    unlink("imagenes/".$empleado["Foto"]);
                }
            }

            $sentencia=$pdo->prepare("DELETE FROM empleados WHERE id=:id");

            $sentencia->bindParam(':id',$txtID);
            $sentencia->execute();

            header('Location: CRUD.php');


                echo $txtID;
                echo "Presionaste btnEliminar";
                break;
        case "btnCancelar":
            header('Location: CRUD.php');
                break;
        case "Seleccionar":
            $accionAgregar="disabled";
            $accionModificar=$accionEliminar=$accionCancelar="";
            $mostrarModal=true;
            break;
    }

    $sentencia=$pdo->prepare("SELECT * FROM empleados WHERE 1");
    $sentencia->execute();
    $listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    //print_r($listaEmpleados);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyWeb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="css/templatemo.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
 
 
</head>
<body>
   <!-- Header -->
   <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container d-flex justify-content-between align-items-center">

          <a class="navbar-brand text-success logo h2 align-self-center" href="indexprin.php">
              DISCK GROOVE
          </a>

          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
              <div class="flex-fill">
                  <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="indexprin.php">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about.html">About</a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                  </ul>
              </div>
              <div class="navbar align-self-center d-flex">
                  <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                      <div class="input-group">
                          <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                          <div class="input-group-text">
                              <i class="fa fa-fw fa-search"></i>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>

      </div>
  </nav>
  <!-- Close Header -->

    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
      <div class="container text-light">
          <div class="w-100 d-flex justify-content-between">
              <div>
                  <i class="fa fa-envelope mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                  <i class="fa fa-phone mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
              </div>
              <div>
                  <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
              </div>
          </div>
      </div>
  </nav>
  <!-- Close Top Nav -->





<div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Empleado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <span aria-hidden="true"></span>
      </div>
      <div class="modal-body">
        <div class="form-row">
            
        <input type="hidden" required name="txtID" value="<?php echo $txtID;?>" placeholder="" id="txtID" require="">
    
    
    <div class="form-group col-md-12">
    <label for="">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" required value="<?php echo $txtNombre;?>" placeholder="" id="txtNombre" require="">
    <br>
    </div>

    <div class="form-group col-md-12">
    <label for="">Apellido Paterno:</label>
    <input type="text" class="form-control" name="txtApellidop" required value="<?php echo $txtApellidop;?>" placeholder="" id="txtApellidop" require="">
    <br>
    </div>

    <div class="form-group col-md-12">
    <label for="">Apellido Materno:</label>
    <input type="text" class="form-control" name="txtApellidom" required value="<?php echo $txtApellidom;?>" placeholder="" id="txtApellidom" require="">
    <br>
    </div>

    <div class="form-group col-md-12">
    <label for="">Correo:</label>
    <input type="email" class="form-control" name="txtCorreo" required value="<?php echo $txtCorreo;?>" placeholder="" id="txtCorreo" require="">
    <br>
    </div>

    <div class="form-group col-md-12">
    <label for="">Foto:</label>
    <input type="file" class=" form-control " accept="image/*" name="txtFoto" value="<?php echo $txtFoto;?>" placeholder="" id="txtFoto" require="">
    <br>
    </div>

        </div>
      </div>
      <div class="modal-footer">
        <button value="btnAgregar"<?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
        <button value="btnModificar"<?php echo $accionModificar;?>class="btn btn-success" type="submit" name="accion">Modificar</button>
        <button value="btnEliminar"<?php echo $accionEliminar;?>class="btn btn-success" type="submit" name="accion">Eliminar</button>
        <button value="btnCancelar"<?php echo $accionCancelar;?>class="btn btn-success" type="submit" name="accion">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar registro +
</button>
<!-- Button trigger modal -->
</form>



<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>FOTO</th>
                <th>NOMBRE COMPLETO</th>
                <th>CORREO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <?php foreach($listaEmpleados as $empleado){?>
            <tr>
            <td><img class="img-thumbnail" width="100px" src="imagenes/<?php echo $empleado['Foto'];?>"/></td>
            <td><?php echo $empleado['Nombre'];?> <?php echo $empleado['Apellidop'];?> <?php echo $empleado['Apellidom'];?></td>
            <td><?php echo $empleado['Correo'];?></td>
            <td>
            
            <form action="" method="post">
                <input type="hidden" name="txtID" value="<?php echo $empleado['ID'];?>">
                <input type="hidden" name="txtNombre" value="<?php echo $empleado['Nombre'];?>">
                <input type="hidden" name="txtApellidop" value="<?php echo $empleado['Apellidop'];?>">
                <input type="hidden" name="txtApellidom" value="<?php echo $empleado['Apellidom'];?>">
                <input type="hidden" name="txtCorreo" value="<?php echo $empleado['Correo'];?>">
                <input type="hidden" name="txtFoto" value="<?php echo $empleado['Foto'];?>">

            <input class="btn btn-success" type="submit" value="Seleccionar" name="Accion">
            <button class="btn btn-success p-2" value="btnEliminar" type="submit" name="accion">Eliminar</button>
            </form>
            </td>
           
            </tr>
          

        <?php } ?>
    </table>
</div>

<?php
    if($mostrarModal){?>
    <script>
        $('#exampleModal').modal('show');

    </script>
<?php } ?>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>