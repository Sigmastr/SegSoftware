<?php

include('../Conexion/conexion.php');

$nombreCargo = $_POST["NombreCargo"];



$insertar = "INSERT INTO tipocargo(Nombre_Cargo) 
VALUES ( '$nombre')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Categoria.php');
    die;
}
