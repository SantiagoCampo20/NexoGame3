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
    <title>Gears of War 3</title>
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
                <img src="imagen/gears-of-war3-1.jpg" alt="Gears of War 3 Image 1">
                <img src="imagen/gears-of-war3-2.jpg" alt="Gears of War 3 Image 2">
                <img src="imagen/gears-of-war3-3.jpg" alt="Gears of War 3 Image 3">
                <img src="imagen/gears-of-war3-4.jpg" alt="Gears of War 3 Image 4">
            </div>
    
            <div class="game-info">
                <h1>Gears of War 3</h1>
                <p><strong> - Género:</strong> Acción, Aventura</p>
                <p><strong> - Desarrollador:</strong> Epic Games</p>
                <p><strong> - Editor:</strong> Microsoft Game Studios</p>
                <p><strong> - Franquicia:</strong> Gears of War</p>
                <p><strong> - Fecha de lanzamiento:</strong> 26 de Marzo de 2012</p>
                <p>"Han pasado 18 meses desde la caída de Jacinto, cuya finalidad era detener el ataque Locust. A raíz de esto, la CGO se ha desintegrado por completo y los supervivientes de tanto desastre siguen luchando por un único fin: permanecer con vida. Al encontrar una remota isla llamada Vectes para vivir mientras que un enemigo peor que los Locust, los Lambent, que resurgieron tras la caída de los Locust, se esparcen por todo el mundo de Sera, y con el presidente de la COG perdido deciden separarse."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">

            <a href="https://www.xbox.com/es-co/games/store/hollow-knight-edicion-corazon-vacio/9mw9469v91lm" target="_blank"><div class="plataforma xbox">
                <img src="imagen/xbox.jpg" alt="Xbox Icon">
                <p>XBOX GAME STUDIOS</p>
                <p>Precio: $34,400 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core i5 @ 2.7Ghz or AMD FX 6-core</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> GeForce 9800GTX+ (1 GB)</p>
                    <p><strong> - DirectX:</strong> Versión 10</p>
                    <p><strong> - Almacenamiento:</strong> 9 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> 1080p, se recomienda 16:9</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core i5</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> GeForce GTX 560</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 9 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> 1080p, se recomienda 16:9</p>
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