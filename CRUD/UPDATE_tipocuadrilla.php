<?php

include('../Conexion/conexion.php');

$TipoCuadrilla = $_POST["TipoCuadrilla"];
$Alias = $_POST["Alias"];
$id = $_POST["id"];
$sql1 = mysqli_query($conn, "SELECT id_personal FROM cuadrilla WHERE id_personal='$id'");


$valores = mysqli_fetch_row($sql1);
$rpta = $valores[0];




$sql = "UPDATE cuadrilla SET Tipo_cuadrilla='$TipoCuadrilla', Alias='$Alias' WHERE id_personal= '$rpta'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php');
    die;
}
