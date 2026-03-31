<?php
include 'conexion.php';
session_start();

if (isset($_SESSION['usuario_id']) && isset($_POST['id'])) {
    $id_carrito = $_POST['id'];
    $id_user = $_SESSION['usuario_id'];

    $sql = "DELETE FROM carrito WHERE id_carrito = '$id_carrito' AND id_usuario = '$id_user'";

    if (mysqli_query($conexion, $sql)) {
        echo "Ok";
    } else {
        echo "Error";
    }
}
?>