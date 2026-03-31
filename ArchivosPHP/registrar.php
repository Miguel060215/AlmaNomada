<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($pass !== $confirm_pass) {
        die("Las contraseñas no coinciden.");
    }

    $pass_encriptada = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre_usuario, correo, password) VALUES ('$user', '$email', '$pass_encriptada')";

    if (mysqli_query($conexion, $sql)) {
        echo "<script>
                alert('¡Registro exitoso en Alma Nómada! Ahora puedes iniciar sesión.');
window.location.href = '../Paginas/login.html';              </script>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}

?>