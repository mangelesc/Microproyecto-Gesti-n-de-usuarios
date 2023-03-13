<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href="../styles/home.css" />
    <title>Home</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['tipo_usuario']) && ($_SESSION['tipo_usuario']) == 0) {
        echo '
        <nav id="navBar">
            <div id="navBar-left">
                <img src="../imgs/logo.png" alt="logo" id="navbar-logo" />
            </div>
            <div id="navBar-right">
                <ul id="navBarList">
                    <li class="menu">
                        <a id="home" href="">Inicio</a>
                    </li>
                    <li class="menu"><a id="AdminPanel" href="./admin.php">Admin Panel</a></li>
                    <li class="menu"><a id="myProfile" href="./my-profile.php">Mi Perfil</a></li>
                    <li class="menu">
                        <a id="log-out" href="./cerrar_sesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        ';
    } elseif (isset($_SESSION['tipo_usuario']) && ($_SESSION['tipo_usuario'])  == 1){
        echo '
        <nav id="navBar">
            <div id="navBar-left">
                <img src="../imgs/logo.png" alt="logo" id="navbar-logo" />
            </div>
            <div id="navBar-right">
                <ul id="navBarList">
                    <li class="menu">
                        <a id="home" href="">Inicio</a>
                    </li>
                    <li class="menu"><a id="myProfile" href="./my-profile.php">Mi Perfil</a></li>
                    <li class="menu">
                        <a id="log-out" href="./cerrar_sesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        ';
    } else {
        echo '
        <nav id="navBar">
            <div id="navBar-left">
                <img src="../imgs/logo.png" alt="logo" id="navbar-logo">
            </div>
            <div id="navBar-right">
                <ul id="navBarList">
                    <li class="menu"> 
                        <a id="home" href="../index.php">Inicio</a>
                    </li>
                    <li class="menu"><a id="log-in" href="../index.php">Iniciar Sesión</a></li>
                    <li class="menu"><a id="sign-up"href="../php/sign-up.php">Crear Cuenta</a></li>
                </ul>
            </div>
            
        </nav>
        ';
    }
    ?>
    <main>
        <img id="img-ComingSoon" src="../imgs/comingSoon.jpg" alt="Coming Soon">
    </main>
</body>
</html>