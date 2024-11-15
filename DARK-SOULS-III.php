<?php


// confirmar sesion

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
    <title>DARK SOULS III</title>
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
                <img src="imagen/dark-soluls3-1.jpg" alt="DARK SOULS III Image 1">
                <img src="imagen/dark-soluls3-2.jpg" alt="DARK SOULS III Image 2">
                <img src="imagen/dark-soluls3-3.jpg" alt="DARK SOULS III Image 3">
                <img src="imagen/dark-soluls3-4.jpg" alt="DARK SOULS III Image 4">
            </div>
    
            <div class="game-info">
                <h1>DARK SOULS III</h1>
                <p><strong> - Género:</strong> Rol, Acción</p>
                <p><strong> - Desarrollador:</strong> FromSoftware</p>
                <p><strong> - Editor:</strong> Bandai Namco Entertainment </p>
                <p><strong> - Franquicia:</strong> DARK SOULS</p>
                <p><strong> - Fecha de lanzamiento:</strong> 24 de marzo de 2016</p>
                <p>"Dark Souls III: continúa desafiando los límites con el último y ambicioso capítulo de la serie aclamada por la crítica y que define el género. ¡Prepárate y abraza la oscuridad!."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">
            <a href="https://store.steampowered.com/app/374320/DARK_SOULS_III/" target="_blank"><div class="plataforma steam">
                <img src="imagen/steam.jpg" alt="Steam Icon">
                <p>STEAM</p>
                <p>Precio: $199,900 pesos colombianos</p>
            </div></a>

            <a href="https://www.xbox.com/es-CL/games/store/dark-souls-iii/BW2XDRNSCCPZ/0001" target="_blank"><div class="plataforma xbox">
                <img src="imagen/xbox.jpg" alt="Xbox Icon">
                <p>XBOX GAME STUDIOS</p>
                <p>Precio: $173,400 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 7 (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core i3-2100 / AMD® FX-6300</p>
                    <p><strong> - Memoria:</strong> 4 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA® GeForce GTX 750 Ti / ATI Radeon HD 7950</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 25 GB de espacio disponible</p>
                    <p><strong> - Tarjeta de sonido:</strong> DirectX 11 sound device</p>
                    <p><strong> - Red:</strong> Conexión de banda ancha a Internet</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 7 SPI (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core i7-3770 / AMD® FX-8350</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA® GeForce GTX 970 / ATI Radeon R9 series</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 25 GB de espacio disponible</p>
                    <p><strong> - Tarjeta de sonido:</strong> DirectX 11 sound device</p>
                    <p><strong> - Red:</strong> Conexión de banda ancha a Internet</p>
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