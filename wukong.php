<?php
session_start();

if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Myth: Wukong</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="imagen/logo2.jpg">
</head>
<body>
    <header>
        <img src="imagen/logo.jpg" alt="Logo NexoGame">
        <nav class="navtop">
            <ul class="nav-left">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="Juegos.php">Juegos</a></li>
                <li><a href="QuienesSomos.php">Quiénes somos?</a></li>
            </ul>
            <div class="separator"></div>
            <div class="login">
                <a href="perfil.php"><i class="fas fa-user-circle"></i>Usuario: <?= $_SESSION['name'] ?></a>
                <a href="cerrar-sesion.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>


        
    
        <div class="game-details">
            <div class="game-images">
                <img src="imagen/Black-Myth-Wukong.jpg" alt="Hollow Knight Image 1">
                <img src="imagen/Black-Myth-Wukong2.jpg" alt="Hollow Knight Image 2">
                <img src="imagen/Black-Myth-Wukong3.jpg" alt="Hollow Knight Image 3">
                <img src="imagen/Black-Myth-Wukong4.jpg" alt="Hollow Knight Image 4">
            </div>
    
            <div class="game-info">
                <h1>Black Myth: Wukong</h1>
                <p><strong> - Género:</strong> Rol, Acción, Aventura, Pelea</p>
                <p><strong> - Desarrollador:</strong> Game Science</p>
                <p><strong> - Editor:</strong> Game Science</p>
                <p><strong> - Franquicia:</strong> Black Myth: Wukong</p>
                <p><strong> - Fecha de lanzamiento:</strong> 19 de Agosto del 2024</p>
                <p>"Black Myth: Wukong es un RPG de acción inspirado en la mitología china. La trama se basa en Viaje al Oeste, una de las cuatro grandes novelas clásicas de la literatura china. Emprenderás la travesía como el Destinado, enfrentarás desafíos, conocerás maravillas y descubrirás la oscura verdad que yace bajo el engañoso velo de una gloriosa leyenda ancestral."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">
            <a href="https://store.steampowered.com/app/2358720/Black_Myth_Wukong/" target="_blank"><div class="plataforma steam">
                <img src="imagen/steam.jpg" alt="Steam Icon">
                <p>STEAM</p>
                <p>Precio: $199,000 pesos colombianos</p>
            </div></a>

            <a href="https://store.epicgames.com/es-ES/p/black-myth-wukong-87a72b" target="_blank"><div class="plataforma xbox">
                <img src="imagen/EpicGames.jpg" alt="Epic Icon">
                <p>Epic Games</p>
                <p>Precio: $199,000 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 64-bit</p>
                    <p><strong> - Procesador:</strong> Intel Core i5-8400 / AMD Ryzen 5 1600</p>
                    <p><strong> - Memoria:</strong> 16 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA GeForce GTX 1060 6GB / AMD Radeon RX 580 8GB</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 130 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> HDD Supported, SSD</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 64-bit</p>
                    <p><strong> - Procesador:</strong>  Intel Core i7-9700 / AMD Ryzen 5 5500</p>
                    <p><strong> - Memoria:</strong> 16 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700 XT / INTEL Arc A750</p>
                    <p><strong> - DirectX:</strong> Versión 12</p>
                    <p><strong> - Almacenamiento:</strong>  130 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> SSD Required. The above</p>
                </div>
            </div>
        </div>



    <footer class="footer">
        <div class="contacto">
            <div class="contact-item">
                <img src="imagen/correo.jpg" alt="Email Icon">
                <a href="mailto:nexogame99@gmail.com" target="_blank">nexogame99@gmail.com</a>            </div>
            <div class="contact-item">
                <img src="imagen/instagram.jpg" alt="Instagram Icon">
                <a href="https://www.instagram.com/nexogame3/" target="_blank">@nexogame3</a>
            </div>
            <div class="contact-item">
                <img src="imagen/facebook.jpg" alt="Facebook Icon">
                <a href="https://www.facebook.com/profile.php?id=61568473888321" target="_blank">Nexo GameScch</a>
            </div>
        </div>
        <div class="logo">
            <h2>NexoGame</h2>
            <img src="imagen/logo2.jpg" alt="Controller Logo">
        </div>
    </footer>
    
</body>
</html>