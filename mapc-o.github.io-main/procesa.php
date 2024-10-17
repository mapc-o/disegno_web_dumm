<!DOCTYPE html>
<html lang="en">

<head>
    <title>MAPC-O</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pàgina personal de XxFrescoAlescoxX">
    <meta name="keywords" content="UNAM FESA ICO Computaciòn FRESCO">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/master.css">
    <script src="./assets/js/cliente.js"></script>
    <title>Document</title>
</head>

<body id="cuerpo">
    <header>
        <h1 style="color: green; font-size: 24px; background-color: darkseagreen;">Mi pàgina personal</h1>
        <!--navigation-->
        <nav>
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="http://www.aragon.unam.mx">FES ARAGÒN</a></li>
                <li><a href="https://sites.google.com/aragon.unam.mx/fesaragonico/inicio">ICO</a></li>
                <li><a href="https://github.com/mapc-o">GITHUB</a></li>

                <li>
                    <!--li*5-->
                    <ul>
                        <li><a href="code.html">code</a></li>
                        <li><a href="listas.html">listas</a></li>
                        <li><a href="enlaces.html">enlaces e imàgenes</a></li>
                        <li><a href="tablas.html">tablas</a></li>
                        <li><a href="formularios.html">formularios</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>


    <main>
        <?php
            $usuariodb = "admin";
            $contrasegnadb = "patito123";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $usr = $_POST['usuario'];
                $pass = $_POST['password'];
                if($pass === $contrasegnadb && $usuariodb === $usr){
                    echo "<h3> Bienvenido, $usr !</h3>";

                }   else {
                    echo "<h3> Datos incorrectos</h3>";

                }
            }

        ?>   

    </main>


    <aside>
        <h4>Informaciòn adicional</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis earum, possimus libero quo ea delectus
            quam deserunt modi autem impedit illum aliquid ipsum nesciunt, ut assumenda quas cumque iusto.</p>
    </aside>


    <footer>
        <p>Todos los derechos reservados FESARAGON UNAM 2024</p>

    </footer>


</body>

</html>
<!--crear cuenta de docker-->
