<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    //aqui solo verifico que lo que escribio en las entradas de contrasennas sean la misma
    if ($pass !== $confirm_pass) {
        die("Las contraseñas no coinciden.");
    }

    // aqui incripto la contrasenna para no enviarla como texto plano a la bd
    $pass_encriptada = password_hash($pass, PASSWORD_DEFAULT);

    // aqui creo la consulta y envio los datos a la bd
    $sql = "INSERT INTO usuarios (nombre_usuario, correo, password) VALUES ('$user', '$email', '$pass_encriptada')";

   if (mysqli_query($conexion, $sql)) {
        // Mostramos una alerta de éxito y redirigimos al login.html
        echo "<script>
                alert('¡Registro exitoso en Alma Nómada! Ahora puedes iniciar sesión.');
window.location.href = '../Paginas/login.html';              </script>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}

?>