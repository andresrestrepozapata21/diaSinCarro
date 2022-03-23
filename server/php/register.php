<?php 
include("../conection_db/db_conection.php");

$email = $_POST['email'];
$numberPhone = $_POST['numberPhone'];
$cedulaNumber = $_POST['cedulaNumber'];
$name = $_POST['name'];
$licensePlate = $_POST['licensePlate'];
$vehicule = $_POST['vehicule'];
$justification = $_POST['justification'];
$estadoSoliciud = "pendiente";
$fechaReg = date("d/m/y");

$consult =  "INSERT INTO Solicitudes(email, numberPhone, cedulaNumber, nombreCompleto, placa, tipoVehiculo, motivoSolicitud, estadoSolicitud, fechaReg) VALUES ('$email','$numberPhone','$cedulaNumber','$name','$licensePlate','$vehicule','$justification','$estadoSoliciud','$fechaReg')";

if($email ==='' || $numberPhone ==='' || $cedulaNumber === '' || $name === '' || $licensePlate === '' || $vehicule === 'selecciona'|| $justification ===''){
    echo json_encode('error');
}else{
    $result = mysqli_query($conex, $consult);
    if($result){
        echo json_encode('Su solicitud está en proceso de revisión y será notificada en la página: https://www.sumoalequipo.com/diasincarro/consultar.php con su numero de cedula');
    }
}
?>