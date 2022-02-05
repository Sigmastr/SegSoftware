

<?php
include('../Conexion/conexion.php');

$moneda = $_POST["moneda"];

$insertar = "INSERT INTO moneda(Nombre) 
VALUES ( '$moneda')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/UnidadMedida.php');
    die;
}
?>