<?php
  include('../../server/conection_db/db_conection.php');
  //consult all
  $consult = "SELECT * FROM Solicitudes";
  $safe = $conex->query($consult);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../images/logo_encabezado.png" width="300" height="70" alt="logo">
    </nav>
    <div class="container container-xxl my-2 shadow-sm p-3 mb-5 bg-white rounded">
        <h3 class="text-center my-5">Tabla de Solicitudes</h3>
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
                 <th class="text-center">Opciones</th>
              </thead>
              <tbody>
                <?php while($row = $safe->fetch_assoc()) { ?>
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
                  <td class="text-center">
                      <a href="edit.php?id_solicitud=<?php echo $row['id_solicitud'];?>">Editar</a> |
                      <a href="delete.php?id_solicitud=<?php echo $row['id_solicitud'];?>">Borrar</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>