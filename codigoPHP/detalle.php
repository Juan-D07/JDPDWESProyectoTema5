<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
            *{font-family: Oswlad}
        </style>
        


    </head>
    <body>
        <header>

            <h2> UT5: DESARROLLO DE APLICACIONES WEB</h2>
        </header>

        <main>
            <?php
            
            echo '<h3> Mostrar Variables superglobales con foreach y printr</h3>';
            
            echo '<h3>$_SESSION</h3><pre>';
            print_r($_SESSION);
            echo "</pre><hr>";
            echo '<h3>$_COOKIE</h3><pre>';
            print_r($_COOKIE);
            echo "</pre><hr>";
            echo '<h3>$_SERVER</h3><pre>';
            print_r($_SERVER);
            echo "</pre><hr>";
                
            foreach ($GLOBALS as $nombre => $contenido) {
                if ($nombre!="$_COOKIE"&&$nombre!="$_SERVER"){
                    echo "<h3>$ $nombre</h3><pre>";
                    print_r($contenido);
                    echo "</pre><hr>";
                }
            } 
            
            phpinfo();
            
            ?>
        </main>

        <footer>
            <address>
                <p class="foo-txt">
                    © 2026 <span ><a class="miweb-link" href="../../JDPDWESProyectoDWES/indexProyectoDWES.php" >Juan Miguel Dominguez</a></span> Todos los derechos reservados.
                    <a href="https://github.com/Juan-D07/JDPDWESProyectoTema3" target="_blank"> <img class="github" src="../webroot/images/github.png"  alt="Github logo"/></a>
                    <a href="../indexProyectoTema3.php"> <img class="casa" src="../webroot/images/casa.png"  alt="Casa logo"/></a>
                </p>
            </address>
        </footer>

    </body>
</html>