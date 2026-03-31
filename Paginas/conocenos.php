<?php
session_start();
if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['nombre'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos - Alma Nómada</title>
    <link rel="stylesheet" href="../Estilos/inicio.css">
    <link rel="stylesheet" href="../Estilos/conocenos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="main-header">
        <div class="logo">
            <a href="index.php" style="text-decoration: none; display: flex; align-items: center; gap: 12px;">
                <img src="../Imagenes/logo.png" alt="Logo">
                <h1>Alma Nómada</h1>
            </a>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#destinos">Destinos</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Explorar <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="carrito.php"><i class="fa fa-shopping-cart"></i> Mi Carrito</a>
                        <a href="conocenos.php"><i class="fa fa-info-circle"></i> Conócenos</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="user-actions">
            <span>Hola, <strong><?php echo $_SESSION['nombre']; ?></strong></span>
            <a href="../ArchivosPHP/logout.php" title="Cerrar Sesión" class="logout-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </header>

    <section class="about-hero">
        <h1>Nuestra Historia</h1>
        <p>Viajar es encontrar el alma de cada rincón.</p>
    </section>

    <main class="content-wrapper">
        <div class="row">
            <div class="text-side">
                <h2>¿Quiénes somos?</h2>
                <p>Alma Nómada nació en el corazón de **Ciudad Juárez**, con el deseo de mostrar que Chihuahua es mucho más que un estado grande; es una tierra de contrastes infinitos, cultura viva y paisajes que quitan el aliento.</p>
                <p>Somos apasionados por el desarrollo y la aventura, uniendo la tecnología con el turismo auténtico.</p>
            </div>
            <div class="image-side">
                <img src="https://i0.wp.com/foodandpleasure.com/wp-content/uploads/2024/03/guaochi-pueblo-magico-de-chihuahua-cascada.jpg?fit=1500%2C1000&ssl=1" alt="Montañas">
            </div>
        </div>

        <div class="row reverse">
            <div class="text-side">
                <h2>Nuestra Misión</h2>
                <p>Nuestra misión es conectar a los viajeros modernos con la esencia más pura de Chihuahua. Queremos que cada usuario de nuestra plataforma encuentre una ruta que no solo sea un destino, sino una experiencia de vida sustentable y respetuosa con el entorno.</p>
            </div>
            <div class="image-side">
                <img src="https://www.dondeir.com/wp-content/uploads/2020/04/cueva-de-cristales-gigantes-video.jpg" alt="Viaje">
            </div>
        </div>

        <section class="video-experiencia">
            <h2>Vive la Experiencia</h2>
            <div class="video-container">
                <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/AezvDGFXAjw?si=LqBCxkO0YkD0UssL&amp;start=4" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
            </div>
        </section>

        <section class="valores">
            <div class="valor-card">
                <i class="fa fa-heart"></i>
                <h3>Pasión</h3>
                <p>Amamos nuestra tierra y cada línea de código que nos acerca a ella.</p>
            </div>
            <div class="valor-card">
                <i class="fa fa-leaf"></i>
                <h3>Sustentabilidad</h3>
                <p>Promovemos un turismo que cuide los tesoros de la Sierra y el Desierto.</p>
            </div>
            <div class="valor-card">
                <i class="fa fa-shield-halved"></i>
                <h3>Seguridad</h3>
                <p>Tu aventura está respaldada por la mejor información y tecnología.</p>
            </div>
        </section>
    </main>

    <footer class="mini-footer">
        <p>Alma Nómada &copy; 2026 | Desarrollado con pasión en Ciudad Juárez, Chihuahua.</p>
    </footer>

</body>
</html>