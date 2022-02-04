<?php

include('../Conexion/conexion.php');

$NombreCliente = $_POST["Cliente"];
$FechaInicio = $_POST["FechaContrato"];
$id_tipocontrato = $_POST["TipoContrato"];
$TPInstalacion = $_POST["Tipo_de_instalacion"];
$id_AreasContratadas = $_POST["AreasContratadas"];
$CantidadEmpleados = $_POST["CantidadEmpleados"];
$AreasContratadas = $_POST["AreasContratadas"];
$CantidadEmpleados2 = $_POST["CantidadEmpleados2"];
$PPaCantidadEmpleados3go = $_POST["CantidadEmpleados3"];
$Electronica = $_POST["Electronica"];
$FechaInicial = $_POST["FechaInicial"];
$RangoPeriodo = $_POST["RangoPeriodo"];
$Periodo = $_POST["Periodo"];
$Piping = $_POST["Piping"];

$ObservacionesSer = $_POST["ObservacionesSer"];
$Electronica2 = $_POST["Electronica2"];
$FechaInicial2 = $_POST["FechaInicial2"];
$RangoPeriodo2 = $_POST["RangoPeriodo2"];
$Periodo2 = $_POST["Periodo2"];
$Piping2 = $_POST["Piping2"];
$ObservacionesSer2 = $_POST["ObservacionesSer2"];
$FechaInicial3 = $_POST["FechaInicial3"];
$RangoPeriodo3 = $_POST["RangoPeriodo3"];
$Periodo3 = $_POST["Periodo3"];
$Piping3 = $_POST["Piping3"];
$ObservacionesSer3 = $_POST["ObservacionesSer3"];





$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
} else {
    echo 'error';
}
