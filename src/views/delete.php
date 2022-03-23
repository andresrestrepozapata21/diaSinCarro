<?php
include('../../server/conection_db/db_conection.php');
$id = $_GET['id_solicitud'];
$elimina = "DELETE FROM Solicitudes WHERE id_solicitud = '$id'";
$eliminar = $conex->query($elimina);
header("location:tableRequest.php");
$conex->close();
?>