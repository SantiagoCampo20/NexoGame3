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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="imagen/logo2.jpg">
</head>


<body class="loggedin">
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

    <main>
        <section class="hero">
            <h1>Disfruta de los mejores <br>juegos del momento</h1>
        </section>

        <section class="destacados">
            <h2>Destacados y Recomendados</h2>
            <div class="juegos-destacados">
                <a href="sekiro.php">
                    <div class="juego">
                        <img src="imagen/sekiro.jpg" alt="Sekiro: Shadows Die Twice">
                        <p><strong>Género:</strong> Acción, Aventura</p>
                        <p><strong>Desarrollador:</strong> FromSoftware</p>
                    </div>
                </a>
                <a href="HollowK.php">
                    <div class="juego">
                        <img src="imagen/Hollow_Knight.jpg" alt="Hollow Knight: Voidheart Edition">
                        <p><strong>Género:</strong> Acción, Aventura, Indie</p>
                        <p><strong>Desarrollador:</strong> Team Cherry</p>
                    </div>
                </a>
            </div>
        </section>


        <section class="ofertas">
            <h2>Explora Ofertas</h2>
            <a href="God_of_War.php">
            <div class="oferta">
                <img src="imagen/god-of-war.jpg" alt="Got of War">
                <div class="texto-oferta">
                    <p><strong>Nombre:</strong> God of War</p><br>
                    <p><strong>Desarrollador:</strong> Santa Monica Studio</p><br>
                    <p><strong>Plataformas:</strong> Steam y Epic Games</p>
                </div>
            </div>
            </a>
            <a href="Gears-of-War3.php">
            <div class="oferta">
                <img src="imagen/gears-of-war3.jpg" alt="Gears of war 3">
                <div class="texto-oferta">
                    <p><strong>Nombre:</strong> Gears of war 3 </p><br>
                    <p><strong>Desarrollador:</strong> Epic Games</p><br>
                    <p><strong>Plataformas:</strong> Xbox Game Pass</p>
                </div> 
            </div>
            </a>
            <a href="DARK-SOULS-III.php">
            <div class="oferta">
                <img src="imagen/dark-soluls3.jpg" alt="Dark Souls 3">
                <div class="texto-oferta">
                    <p><strong>Nombre:</strong> Dark Souls 3 </p><br>
                    <p><strong>Desarrollador:</strong> From Software, Inc</p><br>
                    <p><strong>Plataformas:</strong> Steam</p>
                </div> 
            </div>
            </a>
            <a href="Left4Dead2.php">
            <div class="oferta">
                <img src="imagen/left4dead2.jpg" alt="Left 4 Dead 2">
                <div class="texto-oferta">
                    <p><strong>Nombre:</strong> Left 4 Dead 2</p><br>
                    <p><strong>Desarrollador:</strong> SValve </p><br>
                    <p><strong>Plataformas:</strong> Steam</p>
                </div> 
            </div>
            </a>
            <a href="wukong.php">
            <div class="oferta">
                <img src="imagen/Black-Myth-Wukong.jpg" alt="Black Myth Wukong">
                <div class="texto-oferta">
                    <p><strong>Nombre:</strong> Black Myth Wukong </p><br>
                    <p><strong>Desarrollador:</strong> Game Science</p><br>
                    <p><strong>Plataformas:</strong> Steam, Epic Games</p>
                </div> 
            </div>
            </a>
        </section>
    </main>


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