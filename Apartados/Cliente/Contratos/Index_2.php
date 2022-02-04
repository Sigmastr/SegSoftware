<?php
include('../../../Conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="iewedge">
    <link rel="stylesheet" href="EstilosCont1.css">

    <title>SegProject | Contratos</title>

</head>

<body>
    <section class="FormBasic">
        <h2 style="font-family: sans-serif;">SERVICIOS CONTRATADOS</h2>
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="Tipo de Servicio | Electronica">
            <?php
            $sql = ("SELECT * FROM listaservicio");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['ID_lista '] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles" type="date" name="FechaInicial" placeholder="Fecha Inicial">
        <input class="Controles2" type="text" name="RangoPeriodo" placeholder="Rango Periodo">
        <input class="Controles2" type="number" name="Periodo" placeholder="Periodo">
        <br>
        <select class="Select2" name="Tipo de Servicio | Piping">
            <!-- ALTER TABLE listaserviciopiping ADD FOREIGN KEY (id_ListaServicio) REFERENCES listaservicio (ID_lista); -->
            <?php


            $sql = ("SELECT * FROM listaserviciopiping");

            $query = $conn->query($sql);

            while ($valores = mysqli_fetch_array($query)) {
                $var = $valores['id_ListaServicio'];
                $sql2 = ("SELECT * FROM listaservicio WHERE ID_lista='$var'");
                $query2 = ($conn->query($sql2));
                $valor = mysqli_fetch_array($query2);
                if ($valores['id_ListaServicio'] == $valor['ID_lista'])
                    echo '<option value="' . $valores['id_ListaServicio'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer" placeholder="Alguna Observación">
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="Tipo de Servicio | Electronica">

        </select>
        <input class="Controles" type="date" name="FechaInicial" placeholder="Fecha Inicial">
        <input class="Controles2" type="text" name="RangoPeriodo" placeholder="Rango Periodo">
        <input class="Controles2" type="number" name="Periodo" placeholder="Periodo">
        <br>
        <select class="Select2" name="Tipo de Servicio | Piping">
            <option>No Asginado</option>
            <option>Mantención Red Humeda</option>
            <option>Manifold</option>
            <option>Inspección Sala Bomba</option>
            <option>Extinción de Incendio - Sala Bomba</option>
            <option>Extinción de Incendio - Red Humeda</option>
            <option>Extinción de Incendio - Cocina</option>
            <option>Extintores</option>
            <option>Gas Nobel</option>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer" placeholder="Alguna Observación">
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="Tipo de Servicio | Electronica">
            <option>No Asginado</option>
            <option>CCTV</option>
            <option>Control de Acceso</option>
            <option>Dectector de incendio</option>
            <option>Sistema de Aspiración</option>
            <option>Cirofonia</option>
            <option>Otro</option>
        </select>
        <input class="Controles" type="date" name="FechaInicial" placeholder="Fecha Inicial">
        <input class="Controles2" type="text" name="RangoPeriodo" placeholder="Rango Periodo">
        <input class="Controles2" type="number" name="Periodo" placeholder="Periodo">
        <br>
        <select class="Select2" name="Tipo de Servicio | Piping">
            <option>No Asginado</option>
            <option>Mantención Red Humeda</option>
            <option>Manifold</option>
            <option>Inspección Sala Bomba</option>
            <option>Extinción de Incendio - Sala Bomba</option>
            <option>Extinción de Incendio - Red Humeda</option>
            <option>Extinción de Incendio - Cocina</option>
            <option>Extintores</option>
            <option>Gas Nobel</option>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer" placeholder="Alguna Observación">
        <br>
        <input class="Boton" type="submit" value="Siguiente Sección">
    </section>
</body>

</html>