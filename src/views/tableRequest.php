<?php
  include('../../server/conection_db/db_conection.php');
  //consult all
  $consult = "SELECT * from Solicitudes";
  $safe = $conex->query($consult);
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
        <h3 class="text-center my-5">Tabla de Solicitudes</h3>
        <div class="table-responsive table-hover" id="tableRequests">
          <table class="table">  
              <thead class="text-muted">
                 <th class="text-center">Numero de Cédula</th>
                 <th class="text-center">Nombre completo</th>
                 <th class="text-center">Placa</th>
                 <th class="text-center">Tipo de vehiculo</th>
                 <th class="text-center">Motivo de la solicitud</th>
                 <th class="text-center">Estado de la solicitud</th>
                 <th class="text-center">Fecha de la solicitud</th>
                 <th class="text-center">Opciones</th>
              </thead>
              <tbody>
                <?php while($row = $safe->fetch_assoc()) { ?>
                <tr method="post">
                  <td><?php echo $row['cedulaNumber']; ?></td>
                  <td><?php echo $row['nombrecompleto']; ?></td>
                  <td><?php echo $row['placa']; ?></td>
                  <td><?php echo $row['tipoVehiculo']; ?></td>
                  <td><?php echo $row['motivoSolicitud']; ?></td>
                  <td><?php echo $row['estadoSolicitud']; ?></td>
                  <td><?php echo $row['fechaReg']; ?></td>
                  <td class="text-center">
                      <a href="modificar.php?id_solicitud=<?php echo $row['id_solicitud'];?>">Editar</a> |
                      <a href="eliminar.php?id_solicitud=<?php echo $row['id_solicitud'];?>">Borrar</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
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
