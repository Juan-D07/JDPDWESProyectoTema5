<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 5 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <style>

            body{
                background-color: white;
            }
        </style>



    </head>
    <body>
        <header>

            <h2> UT5: DESARROLLO DE APLICACIONES WEB</h2>
        </header>

        <main>
            <?php
            define('USUARIO', 'admin');
            define('CONTRASENIA', 'paso');

            if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != USUARIO || $_SERVER['PHP_AUTH_PW'] != CONTRASENIA) {
                header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Usuario no reconocido!";
                exit;
            }else{
                echo 'Accesso Permitido <br />';
                echo "Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br />";
                echo "Contraseña: " . $_SERVER['PHP_AUTH_PW'] . "<br />";    
            }
            ?>
        </main>

        <footer>
            <address>
                <p class="foo-txt">
                    © 2026 <span ><a class="miweb-link" href="../../JDPDWESProyectoDWES/indexProyectoDWES.php" >Juan Miguel Dominguez</a></span> Todos los derechos reservados.
                    <a href="https://github.com/Juan-D07/JDPDWESProyectoTema5" target="_blank"> <img class="github" src="../webroot/images/github.png"  alt="Github logo"/></a>
                    <a href="../indexProyectoTema5.php"> <img class="casa" src="../webroot/images/casa.png"  alt="Casa logo"/></a>
                </p>
            </address>
        </footer>

    </body>
</html>