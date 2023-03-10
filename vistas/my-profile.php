<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href="../styles/my-profile.css" />
    <title>My Profife</title>
</head>
<body>
    <nav id="navBar">
        <div id="navBar-left">
            <img src="../imgs/logo.png" alt="logo" id="navbar-logo" />
        </div>
        <div id="navBar-right">
            <ul id="navBarList">
                <li class="menu">
                    <a id="home" href="./home.php">Inicio</a>
                </li>
                <?php 
                if ($_SESSION['tipo_usuario'] == 0) {
                    echo '<li class="menu"><a id="AdminPanel" href="./admin.php">Admin Panel</a></li>';
                }
                ?>
                <li class="menu"><a id="myProfile" href="./my-profile.php">Mi Perfil</a></li>
                <li class="menu">
                    <a id="log-out" href="./cerrar_sesion.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="UserProfile-box">
            <div class="UserProfile-left">
                <img
                    src="../imgs/socialmedia.jpg"
                    alt="My Profile"
                    id="UserProfile-img"
                />
            </div>
            <div class="UserProfile-right">
                <h2 id="gretting">Hola, <?php echo $_SESSION['user'];?>!</h2>
                
                <div class="userProf-tbody">
                    <div class="userProf-div">
                        <div class="userProf-div-img-div">
                            <img class="userProf-div-img" src="../imgs/username.png" alt="Username" />
                        </div>
                        <div class="userProf-div-info">
                            <p class="userProf-div-tittle"><b>Username</b></p>
                            <p><?php echo $_SESSION['user'];?></p>
                        </div>
                        <div class="userProf-div-btn">
                            <!-- <a class='btn' href=''> Cambiar </a> -->
                        </div>
                    </div>
                    <div class="userProf-div">
                        <div class="userProf-div-img-div">
                            <img class="userProf-div-img" src="../imgs/email.png" alt="Email" />
                        </div>
                        <div class="userProf-div-info">
                            <p class="userProf-div-tittle"><b>Email</b></p>
                            <p><?php echo $_SESSION['email'];?></p>
                        </div>
                        <div class="userProf-div-btn">
                            <!-- <a class='btn' href=''> Cambiar </a> -->
                        </div>
                    </div>
                    <div class="userProf-div">
                        <div class="userProf-div-img-div">
                            <img class="userProf-div-img" src="../imgs/password.png" alt="Password" />
                        </div>
                        <div class="userProf-div-info">
                            <p class="userProf-div-tittle"><b>Password</b></p>
                            <p>*******</p>
                        </div>
                        <div class="userProf-div-btn">
                            <!-- <a class='btn' href=''> Cambiar </a> -->
                        </div>
                    </div>
                    <div class="userProf-div">
                        <div class="userProf-div-img-div">
                            <img class="userProf-div-img"
                                src="../imgs/deleleAccount.png"
                                alt="Delete Account"
                            />
                        </div>
                        <div class="userProf-div-info">
                            <p class="userProf-div-tittle">
                                <b>Borrar mi cuenta</b>
                            </p>
                            <p>¿Ya no necesitas un usuario?</p>
                        </div>
                        <div class="userProf-div-btn">
                            <!-- <button class="btn btn-delete">Borrar</button> -->
                            <?php echo "
                            <a class='btn-delete' onClick=\"javascript: return confirm('¿Seguro que quieres borrar este usuario?');\"
                                href='./borrar_usuario.php?id_usuario=".$_SESSION['id_usuario']."'>
                                Borrar
                            </a>
                            "?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>