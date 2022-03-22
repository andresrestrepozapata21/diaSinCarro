<?php
include('../../server/conection_db/db_conection.php');

$id = $_GET['id_solicitud'];
$m = "SELECT * FROM Solicitudes WHERE id_solicitud = '$id'";
$modificar = $conex->query($m);
$dato = $modificar->fetch_array();

if(isset($_POST['modificar'])){
    $id1 = $_POST['id'];
    $cedula = $conex->real_escape_string($_POST['mcedulaNumber']);
    $nombre = $conex->real_escape_string($_POST['mnombre']);
    $placa = $conex->real_escape_string($_POST['mplaca']);
    $tipo = $conex->real_escape_string($_POST['mtipo']);
    $motivo = $conex->real_escape_string($_POST['mmotivo']);
    $estado = $conex->real_escape_string($_POST['mestado']);
    $fecha = $conex->real_escape_string($_POST['mfecha']);
    
    $actualiza = "UPDATE Solicitudes SET cedulaNumber = '$cedula', nombrecompleto = '$nombre', placa = '$placa', tipoVehiculo = '$tipo', motivoSolicitud = '$motivo', estadoSolicitud = '$estado', fechaReg = '$fecha', WHERE id_solicitud = '$id1'";
    $actualizar = $conex->query[$actualiza];
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
    <nav class="navbar navbar-dark bg-dark p-3 justify-content-center">
        <button class="btn btn-primary" onclick="location.href = '../../index.html'" type="submit">Ir al formulario</button>
    </nav>
    
    <div class="container my-5">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h3 class="text-center my-5">Modificar</h3>
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row">
                <input type="hidden" name="id" value="<?php echo $dato['id_solicitud']; ?>">
                <input type="text" name="mcedulaNumber" class="form-control" value="<?php echo $dato['cedulaNumber'];?>" placehoder="cedula" required>
            </div>
            <div class="row">
                <input type="text" name="mnombre" class="form-control" value="<?php echo $dato['nombrecompleto'];?>" placehoder="nombre" required>
            </div>
            <div class="row">
                <input type="text" name="mplaca" class="form-control" value="<?php echo $dato['placa'];?>" placehoder="placa" required>
            </div>
            <div class="row">
                <input type="text" name="mtipo" class="form-control" value="<?php echo $dato['tipoVehiculo'];?>" placehoder="tipo" required>
            </div>
            <div class="row">
                <input type="text" name="mmotivo" class="form-control" value="<?php echo $dato['motivoSolicitud'];?>" placehoder="motivo" required>
            </div>
            <div class="row">
                <input type="text" name="mestado" class="form-control" value="<?php echo $dato['estadoSolicitud'];?>" placehoder="estado" required>
            </div>
            <div class="row">
                <input type="text" name="mfecha" class="form-control" value="<?php echo $dato['fechaReg'];?>" placehoder="fecha" required>
            </div>
            <div class="row">
                <input type="submit" name="modificar" class="btn btn-success btn-sm btn-block" value="Modificar">
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