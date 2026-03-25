<?php
include 'conexion.php';
session_start(); // Iniciamos sesión para recordar al usuario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Buscamos al usuario por su correo
    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        
        // Verificamos si la contraseña coincide con el hash guardado
        if (password_verify($pass, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre_usuario'];
            
            echo "<script>
                    alert('¡Bienvenido de nuevo, " . $usuario['nombre_usuario'] . "!');
                    window.location.href='./../Paginas/index.html'; 
                  </script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('El correo no está registrado.'); window.history.back();</script>";
    }
}
?>