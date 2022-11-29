<?php

    $conexion = mysqli_connect("localhost", "root", "", "loud_christmas");
    mysqli_set_charset($conexion, "utf8");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM jugadores WHERE id = '$id'";

    $resultadoEliminar = mysqli_query($conexion, $eliminar);

    if ($resultadoEliminar) {
        header("Location: http://localhost/loud_christmas/usuarios/jugadores.php");
    }

?>