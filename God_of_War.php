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
    <title>God of War</title>
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
                <img src="imagen/GodOfWar1.jpg" alt="God of War Image 1">
                <img src="imagen/GodOfWar2.jpg" alt="God of War Image 2">
                <img src="imagen/GodOfWar3.jpg" alt="God of War Image 3">
                <img src="imagen/GodOfWar4.jpg" alt="God of War Image 4">
            </div>
    
            <div class="game-info">
                <h1>God of War</h1>
                <p><strong> - Género:</strong> Acción, Aventura, hack and slash</p>
                <p><strong> - Desarrollador:</strong> SCE Santa Monica Studio </p>
                <p><strong> - Editor:</strong> Sony Interactive Entertainment</p>
                <p><strong> - Franquicia:</strong> God of War</p>
                <p><strong> - Fecha de lanzamiento:</strong> 4 en abril de 2018</p>
                <p>"Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">
            <a href="https://store.steampowered.com/app/1593500/God_of_War/?l=spanish" target="_blank"><div class="plataforma steam">
                <img src="imagen/steam.jpg" alt="Steam Icon">
                <p>STEAM</p>
                <p>Precio: $184,000 pesos colombianos</p>
            </div></a>

            <a href="https://store.epicgames.com/es-MX/p/god-of-war" target="_blank"><div class="plataforma xbox">
                <img src="imagen/EpicGames.jpg" alt="Xbox Icon">
                <p>Epic Games</p>
                <p>Precio: $184,000 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 64-bit</p>
                    <p><strong> - Procesador:</strong> Intel i5-2500k (4 core 3.3 GHz) or AMD Ryzen 3 1200 (4 core 3.1 GHz)</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA GTX 960 (4 GB) or AMD R9 290X (4 GB)</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 70 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> DirectX feature level 11_1 required</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 (64 bits)</p>
                    <p><strong> - Procesador:</strong>  Intel i5-6600k 4 core 3.5 GHz | AMD Ryzen 5 2400 G 4 core 3.6 GHz</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> NVIDIA GTX 1060 (6 GB) or AMD RX 570 (4 GB)</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 70 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> DirectX feature level 11_1 required</p>
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