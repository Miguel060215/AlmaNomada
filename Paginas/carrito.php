<?php
include '../ArchivosPHP/conexion.php';
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

$id_user = $_SESSION['usuario_id'];
$sql = "SELECT * FROM carrito WHERE id_usuario = '$id_user' ORDER BY fecha_agregado DESC";
$resultado = mysqli_query($conexion, $sql);
$total_general = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito - Alma Nómada</title>
    <link rel="stylesheet" href="../Estilos/inicio.css">
    <link rel="stylesheet" href="../Estilos/carrito.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="main-header">
        <div class="logo">
            <a href="index.php" style="text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="../Imagenes/logo.png" alt="Logo">
                <h1>Alma Nómada</h1>
            </a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#destinos">Más Destinos</a></li>
            </ul>
        </nav>
    </header>

    <main class="carrito-container">
        <h2><i class="fa fa-shopping-cart"></i> Tu Itinerario de Viaje</h2>
        
        <div class="tabla-responsiva">
            <table>
                <thead>
                    <tr>
                        <th>Destino</th>
                        <th>Hospedaje</th>
                        <th>Experiencia</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($resultado) > 0): ?>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)): 
                            $subtotal = $fila['precio_hospedaje'] + $fila['precio_recorrido'];
                            $total_general += $subtotal;
                        ?>
                            <tr>
                                <td><strong><?php echo $fila['destino']; ?></strong></td>
                                <td><?php echo $fila['hospedaje_seleccionado']; ?> <br> <small>$<?php echo number_format($fila['precio_hospedaje'], 2); ?></small></td>
                                <td><?php echo $fila['recorrido_seleccionado']; ?> <br> <small>$<?php echo number_format($fila['precio_recorrido'], 2); ?></small></td>
                                <td class="precio-negrita">$<?php echo number_format($subtotal, 2); ?></td>
                                <td>
                                    <button class="btn-eliminar" onclick="eliminarDelCarrito(<?php echo $fila['id_carrito']; ?>)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align:center; padding: 50px;">Aún no tienes destinos en tu carrito. <a href="index.php">¡Explora Chihuahua aquí!</a></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if ($total_general > 0): ?>
            <div class="resumen-total">
                <div class="total-box">
                    <h3>Total a Pagar: <span>$<?php echo number_format($total_general, 2); ?> MXN</span></h3>
                    <button class="btn-pagar">Proceder al Pago <i class="fa fa-credit-card"></i></button>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <script>
    function eliminarDelCarrito(id) {
        if (confirm('¿Seguro que quieres eliminar esta reservación?')) {
            fetch('../ArchivosPHP/eliminar_carrito.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'id=' + id
            })
            .then(res => res.text())
            .then(data => {
                if (data.includes("Ok")) {
                    location.reload();
                } else {
                    alert("Error al eliminar");
                }
            });
        }
    }
    </script>
</body>
</html>