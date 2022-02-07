<?php

if (isset($_POST['id'])) {
    include('../Conexion/conexion.php');
    $Categoria = $_POST['Categoria'];

    $sql = "SELECT * FROM subcategoria WHERE id_Categoria='$Categoria'";
    $html = "";
    $query = mysqli_query($conn, $sql);
    foreach ($u as $value) {
        $html .= "<option value='" . $value['id_subcategoria '] . "'>" . $value['NombreSubcategoria'] . "</option>";
    }
    echo $html;
} else
    echo "no hay nada";
