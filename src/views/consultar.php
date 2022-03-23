<?php
include('../../server/conection_db/db_conection.php');

$filter = "";

if(isset($_POST['buscar'])){
  if($_POST['cedula'] != ''){
    $filter = "WHERE cedulaNumber = '".$_POST['cedula']."'";
  }
}

$consult = "SELECT * FROM Solicitudes $filter";
$safe = $conex->query($consult);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS and css module -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/stylesTable.css">

  <title>Tabla Consultas</title>
</head>

<body>
  <nav class="navbar navbar-ligth bg-ligth p-3 justify-content-between">
    <img src="../images/logo_encabezado.png" width="300" height="70" alt="">
  </nav>

  <div class="container container-xxl my-2 shadow-sm p-3 mb-5 bg-white rounded">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h3 class="text-left my-5">Ingrese la cédula que desea consultar</h3>
        <input type="text" class="form-control" id="cedula" name="cedula" value="" placeholder="Ingrese su número de cédula">
        <div class=" text-left my-2">
          <input type="submit" class="btn btn-success" value="Buscar" name="buscar">
        </div>
        <h6 class="text-left my-5">si desea ver la tabla completa, después de realizada alguna búsqueda, oprima el botón "Buscar" sin ingresar ningún valor en el campo de texto correspondiente al número de cédula</h6>
      </form>
      <h3 class="text-center my-5">Tabla de Consultas</h3>
      <div class="table-responsive table-hover" id="tableRequests">
        <table class="table">
          <thead class="text-muted">
            <th class="text-center">Email</th>
            <th class="text-center">Numero de celular</th>
            <th class="text-center">Numero de Cédula</th>
            <th class="text-center">Nombre completo</th>
            <th class="text-center">Placa</th>
            <th class="text-center">Tipo de vehiculo</th>
            <th class="text-center">Motivo de la solicitud</th>
            <th class="text-center">Estado de la solicitud</th>
            <th class="text-center">Fecha de la solicitud</th>
          </thead>
          <tbody>
            <?php while ($row = $safe->fetch_assoc()) { ?>
              <tr method="post">
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['numberPhone']; ?></td>
                <td><?php echo $row['cedulaNumber']; ?></td>
                <td><?php echo $row['nombreCompleto']; ?></td>
                <td><?php echo $row['placa']; ?></td>
                <td><?php echo $row['tipoVehiculo']; ?></td>
                <td><?php echo $row['motivoSolicitud']; ?></td>
                <td><?php echo $row['estadoSolicitud']; ?></td>
                <td><?php echo $row['fechaReg']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>