<?php
include 'conexion.php';
session_start();

if (isset($_SESSION['usuario_id']) && isset($_POST['destino'])) {

    $id_user = $_SESSION['usuario_id'];
    $destino = mysqli_real_escape_key($conexion, $_POST['destino']);
    $hospedaje = mysqli_real_escape_key($conexion, $_POST['hospedaje']);
    $precio_h = mysqli_real_escape_key($conexion, $_POST['precio_h']);
    $recorrido = mysqli_real_escape_key($conexion, $_POST['recorrido']);
    $precio_r = mysqli_real_escape_key($conexion, $_POST['precio_r']);

    $sql = "INSERT INTO carrito (id_usuario, destino, hospedaje_seleccionado, precio_hospedaje, recorrido_seleccionado, precio_recorrido) 
            VALUES ('$id_user', '$destino', '$hospedaje', '$precio_h', '$recorrido', '$precio_r')";

    if (mysqli_query($conexion, $sql)) {
        echo "Ok";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

} else {
    echo "Error: Sesión no válida. Por favor, reicia sesión.";
}

function mysqli_real_escape_key($con, $data)
{
    return mysqli_real_escape_string($con, htmlspecialchars($data));
}
?>