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
    <title>Inicio - Alma Nómada Chihuahua</title>
    <link rel="stylesheet" href="../Estilos/inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="main-header">
        <div class="logo">
            <img src="../Imagenes/logo.png" alt="Alma Nómada Logo">
            <h1>Alma Nómada</h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="#destinos">Destinos</a></li>
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
            <span>Bienvenido, <strong><?php echo $_SESSION['nombre']; ?></strong></span>
            <a href="../ArchivosPHP/logout.php" title="Cerrar Sesión" class="logout-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Descubre la Grandeza de Chihuahua</h2>
            <p>Desde la Sierra Tarahumara hasta el desierto infinito.</p>
            <a href="#destinos" class="btn-main">Empezar Aventura</a>
        </div>
    </section>

    <section id="destinos" class="destinos-container">
        <div class="titulo-seccion">
            <h2>Destinos Imperdibles</h2>
            <p>Explora la diversidad de nuestro estado</p>
        </div>

        <div class="destinos-grid">
            <div class="card-destino">
                <div class="card-image">
                    <img src="https://static.wixstatic.com/media/cf3297_1207992ee7504d6b89bef1ad615630e4~mv2.jpg/v1/fill/w_1000,h_666,al_c,q_85,usm_0.66_1.00_0.01/cf3297_1207992ee7504d6b89bef1ad615630e4~mv2.jpg" alt="Barrancas del Cobre">
                    <span class="etiqueta">Sierra</span>
                </div>
                <div class="card-info">
                    <h3>Barrancas del Cobre</h3>
                    <p>Recorre uno de los sistemas de cañones más grandes y profundos del mundo en el famoso tren Chepe.</p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(1)">Ver Detalles</a>
                </div>
            </div>

            <div class="card-destino">
                <div class="card-image">
                    <img src="https://tvazteca.brightspotcdn.com/85/7f/3ad2dabb4adba47ff8eb1be03add/dunas-5.jpg" alt="Samalayuca">
                    <span class="etiqueta">Desierto</span>
                </div>
                <div class="card-info">
                    <h3>Dunas de Samalayuca</h3>
                    <p>Vive la experiencia del sandboarding en arenas blancas, una joya natural muy cerca de Juárez.</p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(2)">Ver Detalles</a>
                </div>
            </div>

            <div class="card-destino">
                <div class="card-image">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1c/79/ec/79/creel-chihuahua-mexico.jpg" alt="Creel">
                    <span class="etiqueta">Cultura</span>
                </div>
                <div class="card-info">
                    <h3>Creel</h3>
                    <p>El corazón de la Sierra Tarahumara. Un pueblo mágico rodeado de pinos, lagos y valles de piedra.</p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(3)">Ver Detalles</a>
                </div>
            </div>

            <div class="card-destino">
                <div class="card-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBU16hz3yCrgFwdxwzH5tFgNHlwadLAbih3w&s" alt="Cumbres de majalca">
                    <span class="etiqueta">SIERRA</span>
                </div>
                <div class="card-info">
                    <h3>Parque Nacional Cumbres de Majalca</h3>
                    <p>Parque nacional protegido y conocido por sus formaciones rocosas, sus bosques y su biodiversidad. </p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(4)">Ver Detalles</a>
                </div>
            </div>

            <div class="card-destino">
                <div class="card-image">
                    <img src="https://oem.com.mx/elheraldodechihuahua/img/22882654/1745152827/BASE_LANDSCAPE/1200/image.webp" alt="Tren Chepe">
                    <span class="etiqueta">Cañones</span>
                </div>
                <div class="card-info">
                    <h3>Tren Chepe</h3>
                    <p>Linea ferroviaria turistcia que atraviesa la espectacular region de barrancas del cobre, un gren sistema de cañones.</p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(5)">Ver Detalles</a>
                </div>
            </div>

            <div class="card-destino">
                <div class="card-image">
                    <img src="https://inahchihuahua.wordpress.com/wp-content/uploads/2014/04/40-casas-2.jpg" alt="Zona arqueológica de Paquimé">
                    <span class="etiqueta">Cultura</span>
                </div>
                <div class="card-info">
                    <h3>Zona arqueológica de Paquimé</h3>
                    <p>Impresionante sitio precolombino del norte de Mexico. Centro de una civilizacion entre los siglos XII y XV.</p>
                    <a href="javascript:void(0)" class="btn-ver-mas" onclick="abrirDetalles(6)">Ver Detalles</a>
                </div>
            </div>
        </div>
    </section>

    <div id="modalDetalles" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <div class="modal-body">
                <div class="modal-img-container">
                    <img id="imgDestino" src="" alt="Destino">
                </div>
                <div class="modal-text">
                    <h2 id="tituloDestino"></h2>
                    <p id="descDestino" class="descripcion-larga"></p>
                    <div class="opciones-reserva">
                        <h3>Opciones de Reservación:</h3>
                        <form id="formReserva">
                            <div class="input-reserva">
                                <label><i class="fa fa-hotel"></i> Selección de Hotel:</label>
                                <select id="hospedaje">
                                    <option value="0">Solo visita (Sin hotel)</option>
                                    <option value="1500">Eco-Hostal ($1,500/noche)</option>
                                    <option value="3200">Hotel Boutique Luxury ($3,200/noche)</option>
                                </select>
                            </div>
                            <div class="input-reserva">
                                <label><i class="fa fa-person-hiking"></i> Experiencia Guiada:</label>
                                <select id="recorrido">
                                    <option value="0">Por mi cuenta</option>
                                    <option value="600">Tour Cultural ($600 p/p)</option>
                                    <option value="1500">Expedición Fotográfica ($1,500)</option>
                                </select>
                            </div>
                            <button type="button" class="btn-carrito" onclick="agregarAlCarrito()">
                                <i class="fa fa-cart-plus"></i> Añadir al Carrito
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-section logo-footer">
                <img src="../Imagenes/logo.png" alt="Alma Nómada Logo">
                <p>Alma Nómada &copy; 2026</p>
            </div>
            <div class="footer-section contact-info">
                <h3>Contacto</h3>
                <p><i class="fa fa-envelope"></i> contacto@almanomada.com</p>
                <p><i class="fa fa-phone"></i> +52 (656) 123-4567</p>
                <p>Juárez, Chihuahua, México</p>
            </div>
            <div class="footer-section social-media">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
    const datosDestinos = {
        1: { titulo: "Barrancas del Cobre", desc: "Experimenta la inmensidad de Chihuahua desde lo más alto. Incluye acceso al teleférico y caminatas por senderos milenarios.", img: "https://static.wixstatic.com/media/cf3297_1207992ee7504d6b89bef1ad615630e4~mv2.jpg/v1/fill/w_1000,h_666,al_c,q_85,usm_0.66_1.00_0.01/cf3297_1207992ee7504d6b89bef1ad615630e4~mv2.jpg" },
        2: { titulo: "Dunas de Samalayuca", desc: "El desierto te espera. Ideal para los amantes de la aventura y el sandboarding bajo el atardecer juarense.", img: "https://tvazteca.brightspotcdn.com/85/7f/3ad2dabb4adba47ff8eb1be03add/dunas-5.jpg" },
        3: { titulo: "Creel", desc: "Descubre el corazón de la Sierra. Visita el Lago de Arareko y las misiones jesuitas en este Pueblo Mágico.", img: "https://media-cdn.tripadvisor.com/media/photo-s/1c/79/ec/79/creel-chihuahua-mexico.jpg" },
        4: { titulo: "Cumbres de Majalca", desc: "Formaciones rocosas únicas y un clima boscoso ideal para el senderismo y la desconexión total.", img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBU16hz3yCrgFwdxwzH5tFgNHlwadLAbih3w&s" },
        5: { titulo: "Tren Chepe", desc: "Súbete a la leyenda. Un recorrido por puentes y túneles que te mostrarán la mejor cara de la Sierra Madre.", img: "https://oem.com.mx/elheraldodechihuahua/img/22882654/1745152827/BASE_LANDSCAPE/1200/image.webp" },
        6: { titulo: "Zona Arqueológica de Paquimé", desc: "Viaja al pasado en este sitio Patrimonio de la Humanidad. Conoce su avanzada arquitectura de tierra.", img: "https://inahchihuahua.wordpress.com/wp-content/uploads/2014/04/40-casas-2.jpg" }
    };

    function abrirDetalles(id) {
        const d = datosDestinos[id];
        document.getElementById('tituloDestino').innerText = d.titulo;
        document.getElementById('descDestino').innerText = d.desc;
        document.getElementById('imgDestino').src = d.img;
        document.getElementById('modalDetalles').style.display = "block";
    }

    function cerrarModal() {
        document.getElementById('modalDetalles').style.display = "none";
    }

    window.onclick = function(e) {
        if (e.target == document.getElementById('modalDetalles')) cerrarModal();
    }

    function agregarAlCarrito() {
        const destino = document.getElementById('tituloDestino').innerText;
        const idHospedaje = document.getElementById('hospedaje').value;
        const idRecorrido = document.getElementById('recorrido').value;
        
        const textoHospedaje = document.getElementById('hospedaje').options[document.getElementById('hospedaje').selectedIndex].text;
        const textoRecorrido = document.getElementById('recorrido').options[document.getElementById('recorrido').selectedIndex].text;

        const datos = new FormData();
        datos.append('destino', destino);
        datos.append('hospedaje', textoHospedaje);
        datos.append('precio_h', idHospedaje);
        datos.append('recorrido', textoRecorrido);
        datos.append('precio_r', idRecorrido);

        fetch('../ArchivosPHP/guardar_carrito.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.text())
        .then(data => {
            if(data.includes("Ok")) {
                alert("¡Añadido con éxito a tu cuenta de Alma Nómada!");
                cerrarModal();
            } else {
                alert("Error al guardar: " + data);
            }
        })
        .catch(error => console.error('Error:', error));
    }
    </script>
</body>
</html>