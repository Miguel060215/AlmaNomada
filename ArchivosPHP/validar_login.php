<?php
include 'conexion.php';
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        
        if (password_verify($pass, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre_usuario'];
            
            echo "<script>
                    alert('¡Bienvenido de nuevo, " . $usuario['nombre_usuario'] . "!');
                    window.location.href='./../Paginas/index.php'; 
                  </script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('El correo no está registrado.'); window.history.back();</script>";
    }
}
?>