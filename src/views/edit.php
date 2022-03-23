<?php
include('../../server/conection_db/db_conection.php');

$id = $_GET['id_solicitud'];
$m = "SELECT * FROM Solicitudes WHERE id_solicitud = '$id'";
$edit = $conex->query($m);
$dato = $edit->fetch_array();

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $email = $conex->real_escape_string($_POST['eemail']);
    $numberPhone = $conex->real_escape_string($_POST['enumberPhone']);
    $numberIdentification = $conex->real_escape_string($_POST['enumberIdentification']);
    $name = $conex->real_escape_string($_POST['ename']);
    $licensePlate = $conex->real_escape_string($_POST['elicensePlate']);
    $tipVehicule = $conex->real_escape_string($_POST['etipVehicule']);
    $meanSolicitation = $conex->real_escape_string($_POST['emeanSolicitation']);
    $statusSolicitation = $conex->real_escape_string($_POST['estatusSolicitation']);
    $date = $conex->real_escape_string($_POST['edate']);
    
    
    $actualiza = "UPDATE Solicitudes SET email = '$email', numberPhone = '$numberPhone' ,cedulaNumber = '$numberIdentification', nombreCompleto = '$name', placa = '$licensePlate', tipoVehiculo = '$tipVehicule', motivoSolicitud = '$meanSolicitation', estadoSolicitud = '$statusSolicitation', fechaReg = '$date' WHERE id_solicitud = '$id'";
    $actualizar = $conex->query($actualiza);
    header("location:tableRequest.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS and css module -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/stylesTable.css">

    <title>Tabla Solicitudes</title>
  </head>
  <body>
    <nav class="navbar navbar-ligth bg-ligth p-3 justify-content-between">
       <img src="../images/logo_encabezado.png" width="300" height="70" alt="">
    </nav>
    
    <div class="container container-xxl my-2 shadow-sm p-3 mb-5 bg-white rounded">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h3 class="text-center my-5">Modificar</h3>
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="row">
                <input type="hidden" name="id" value="<?php echo $dato['id_solicitud']; ?>">
                <input type="text" name="eemail" class="form-control" value="<?php echo $dato['email'];?>" placehoder="email" required>
            </div>
             <div class="row">
                <input type="text" name="enumberPhone" class="form-control" value="<?php echo $dato['numberPhone'];?>" placehoder="celular" required>
            </div>
            <div class="row">
                <input type="text" name="enumberIdentification" class="form-control" value="<?php echo $dato['cedulaNumber'];?>" placehoder="cedula" required>
            </div>
            <div class="row">
                <input type="text" name="ename" class="form-control" value="<?php echo $dato['nombreCompleto'];?>" placehoder="nombre" required>
            </div>
            <div class="row">
                <input type="text" name="elicensePlate" class="form-control" value="<?php echo $dato['placa'];?>" placehoder="placa" required>
            </div>
            <div class="row">
                <input type="text" name="etipVehicule" class="form-control" value="<?php echo $dato['tipoVehiculo'];?>" placehoder="tipo" required>
            </div>
            <div class="row">
                <input type="text" name="emeanSolicitation" class="form-control" value="<?php echo $dato['motivoSolicitud'];?>" placehoder="motivo" required>
            </div>
            <div class="row">
                <input type="text" name="estatusSolicitation" class="form-control" value="<?php echo $dato['estadoSolicitud'];?>" placehoder="estado" required>
            </div>
            <div class="row">
                <input type="text" name="edate" class="form-control" value="<?php echo $dato['fechaReg'];?>" placehoder="fecha" required>
            </div>
            <div class="row">
                <input type="submit" name="edit" class="btn btn-success btn-sm btn-block" value="Modificar">
            </div>
          </form>
      </div>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>