<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Contacto</title>

    <meta name="description" content="Portfolio &amp; Blog de LeCuay; desarrollador, escritor y creador de contenido.">

    <!-- Iconos -->
    <link rel="stylesheet" href="/static/icons/icons.css">
    
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="/static/css/load_screen.min.css">
    <link rel="stylesheet" href="/static/css/general.min.css">
    
    <!-- General Meta -->
    <link rel="shortcut icon" type="image/jpg" href="/static/images/front-image.jpg"/>
    <link rel="canonical" href="https://lecuay.github.io/" />
    <meta name="publisher" content="LeCuay" />
    <meta name="copyright" content="LeCuay" />
    <meta itemprop="name" content="Portofilio - LeCuay / Programador &amp; Escritor.">
    <meta itemprop="description" content="Portfolio &amp; Blog de LeCuay; desarrollador, escritor y creador de contenido.">
    <meta itemprop="image" content="https://lecuay.github.io/static/images/front-image.jpg">

    <!-- Open Graph Protocol -->
    <meta property="og:title" content="Cuay's Little Garden" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lecuay.github.io/" />
    <meta property="og:image" content="http://lecuay.github.io/static/images/front-image.jpg" />
    <meta property="og:image:secure_url" content="https://lecuay.github.io/static/images/front-image.jpg" />
    <meta property="og:image:alt" content="Portfolio Personal... y Noodle (Gorillaz)" />
    <meta property="og:description" content="Personal Portfolio">
</head>
<body>
   <div class="container">

       <!-- Load Screen -->
       <div id="load_screen">
            <p>Cargando...</p>
            <div class="anim_container">
                <div class="figure1"></div>
                <div class="figure2"></div>
            </div>
        </div>

        <!-- Header -->
        <header class="header">
            
            <!-- Barra de Navegación -->
            <div class="nav-bar">
                <span id="bt-menu" class="nav-bar-item icon-menu"></span>
                <a href="/"><span id="bt-home" class="nav-bar-item icon-home"></span></a>
                <span id="bt-search" class="nav-bar-item icon-magnifying-glass"></span>
                <form class="search_section" action="/busqueda/" method="get">
                    <input type="search" placeholder="Búsqueda" name="search_bar" id="search_bar" class="search_bar">
                    <div class="search_buttons">
                        <input type="submit" value="OK" class="search_send">
                        <span class="search_cancel icon-squared-cross"></span>
                    </div>
                </form>
            </div>
            
            <!-- Navegador -->
            <nav id="navigator" class="navigator">
                <a class="menu-item" href="/"><span class="icon-home"></span>Perfil</a>
                <a class="menu-item" href="#"><span class="icon-book"></span>Artículos</a>
                <a class="menu-item" href="#"><span class="icon-bowl"></span>Proyectos</a>
                <a class="menu-item" href="/contacto/"><span class="icon-message"></span>Contacto</a>
                <a href="#" onclick="return false" id="bt-search-xl" class="menu-item"><span class="icon-magnifying-glass"></span></a>
                <form action="/busqueda/" method="get" class="search_section">
                    <input type="search" placeholder="Búsqueda" name="search_bar_xl" id="search_bar_xl" class="search_bar">
                    <div class="search_buttons">
                        <input type="submit" value="OK" class="search_send">
                        <span class="search_cancel icon-squared-cross"></span>
                    </div>
                </form>
            </nav>
        </header>

        <!-- Main -->
        <main class="main">
            <?php
                $obligatories = array($_POST["nombre"], $_POST["email"], $_POST["text-proyecto"], $_POST["presupuesto"]);
                $num_of_obligatories = sizeof($obligatories);
                $missing_inputs = array();
                foreach ($obligatories as $key => $value) {
                    if(empty($value)) {
                        $missing_inputs[] = $obligatories[$key];
                        unset($obligatories[$key]); 
                    }
                }
                
                if($num_of_obligatories != sizeof($obligatories)) {
                    echo "<h2>Parece que te has dejado algunos campos sin rellenar</h2>";
                }
                
            ?>
        </main>

        <!-- Footer -->
        <footer class="footer">
                <p class="copyright">&copy; 2018, LeCuay "I don't know legal stuff but still my property."</p>
                <div class="opciones">
                    <a href="#" class="contacto">Contacto</a>
                    <a href="#" class="volver">Volver</a>
                </div>
                <div class="redes_sociales">
                    <a class="icon-github github" href="https://github.com/LeCuay" target="_blank"></a>
                    <a class="icon-steam steam" href="https://steamcommunity.com/id/Cuayteron1" target="_blank"></a>
                    <a class="icon-twitter twitter" href="https://twitter.com/Cuayteron1" target="_blank" ></a>
                    <a class="icon-discord discord" href="https://discordapp.com/" target="_blank"></a>
                    <a class="icon-mail" href="mailto:suso_becerra@hotmail.com?subject=Buenas Jesús" target="_top"></a>
                </div>
        </footer>
    </div>

    <!-- Scripts -->
    <!-- Libraries --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    <script src="/static/js/personalsnippets.min.js"></script>
    <!-- Own Scripts -->
    <script src="/static/js/loadscreen.min.js"></script>
    <script src="/static/js/menu.min.js"></script>
    <script src="/static/js/home.min.js"></script>
</body>
</html>