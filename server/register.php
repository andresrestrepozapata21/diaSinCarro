<?php 
include("conection_db/db_conection.php");

$cedulaNumber = $_POST['cedulaNumber'];
$name = $_POST['name'];
$licensePlate = $_POST['licensePlate'];
$vehicule = $_POST['vehicule'];
$justification = $_POST['justification'];
$estadoSoliciud = "pendiente";
$fechaReg = date("d/m/y");

$consult =  "INSERT INTO solicitudes(cedulaNumber, nombreCompleto, placa, tipoVehiculo, motivoSolicitud, estadoSolicitud, fechaReg) VALUES ('$cedulaNumber','$name','$licensePlate','$vehicule','$justification','$estadoSoliciud','$fechaReg')";

if($cedulaNumber === '' || $name === '' || $licensePlate === '' || $vehicule === 'Selecciona'|| $justification ===''){
    echo json_encode('error');
}else{
    $result = mysqli_query($conex, $consult);
    if($result){
        echo json_encode('Datos guardados:<br>'.'<br>Cédula: '.$cedulaNumber.'<br>nombre: '.$name.'<br>placa: '.$licensePlate.'<br>vehicule: '.$vehicule.'<br>justification: '.$justification);
    }
}
?>