<?php
include('../../../Conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="iewedge">
    <link rel="stylesheet" href="EstilosCont.css">

    <title>SegProject | Contratos</title>

</head>

<body>

    <form method="POST" action="Index_2.php" class="FormBasic">
        <h2 style="font-family: sans-serif;">DATOS BASICOS DEL CLIENTE</h2>
        <select class="Controles" type="text" name="Cliente">
            <?php
            $sql = ("SELECT * FROM cliente");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles" type="date" name="FechaContrato" placeholder="Ingrese la fecha del Contrato">
        <select class="Controles" type="text" name="TipoContrato" placeholder="Ingrese el Tipo de Contrato">
            <?php
            $sql = ("SELECT * FROM tipocontrato");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['id_tipoContrato'] . '">' . $valores['Tipo'] . '</option>';
            }
            ?>
        </select>
        <br>
        <h2 style="font-family: sans-serif;">CARACTERISTICA DEL CLIENTE</h2>
        <h4>Tipo de instalacion:</h4>
        <select class="Select" name="Tipo_de_instalacion">
            <?php
            $sql = ("SELECT * FROM tipoinstalacion");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['id_tipoIns'] . '">' . $valores['Tipo'] . '</option>';
            }
            ?>
        </select>
        <h4>Areas Contratadas:</h4>
        <select class="Select2" name="AreasContratadas">
            <!-- Aqu?? el value 0 me servir?? para validar si seleccion?? 1 o m??s ??reas -->
            <option value="0">Seleccione el ??rea</option>
            <?php
            $sql = ("SELECT * FROM tipoarea");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles2" type="number" name="CantidadEmpleados" placeholder="Cantidad de Empleados">
        <h4>Areas Contratadas:</h4>
        <select class="Select2" name="AreasContratadas2">
            <option value="0">Seleccione el ??rea</option>
            <!-- Aqu?? el value 0 me servir?? para validar si seleccion?? 1 o m??s ??reas -->
            <?php
            $sql = ("SELECT * FROM tipoarea");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles2" type="number" name="CantidadEmpleados2" placeholder="Cantidad de Empleados">
        <h4>Areas Contratadas:</h4>
        <select class="Select2" name="AreasContratadas3">
            <!-- Aqu?? el value 0 me servir?? para validar si seleccion?? 1 o m??s ??reas -->
            <option value="0">Seleccione el ??rea</option>
            <?php
            $sql = ("SELECT * FROM tipoarea");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles2" type="number" name="CantidadEmpleados3" placeholder="Cantidad de Empleados">

        <br>
        <input class="Boton" type="submit" value="Siguiente Secci??n" href="Index_2.php">
    </form>
</body>

</html>