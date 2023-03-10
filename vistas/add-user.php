<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-in.css" />
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href="../styles/admin-panel.css" />
    <title>Add user</title>
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
                <li class="menu"><a id="AdminPanel" href="./admin.php">Admin Panel</a></li>
                <li class="menu"><a id="myProfile" href="./my-profile.php">Mi Perfil</a></li>
                <li class="menu">
                    <a id="log-out" href="./cerrar_sesion.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="main">
        <div class="user-main">
            <h1 class="tittle-h1">Añadir usuarios</h1>
        </div>
        <div class="admin-form-div">
            <form action= "./crear_usuario.php" method='post' class="admin-form"> 
                <div class="form-column">
                    <div class="formSection">
                        <label for="">Username</label>
                        <input
                            type="text"
                            name="user-add"
                        />
                    </div>
                    <div class="formSection">
                        <label for="">Email address</label>
                        <input
                            type="text"
                            name="email-add"
                            pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                        />
                    </div>
                </div>
                <div class="form-column">
                    <div class="formSection">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password-add"/>
                    </div>
                    <div class="formSection">
                        <p>Rol</p>
                        <div>
                            <input type="radio" id="admin" name="tipo_usuario-add" value="0" />
                            <label for="admin">Administrador</label>
                        </div>
                        <div>
                            <input type="radio" id="user" name="tipo_usuario-add" value="1" />
                            <label for="admin">Usuario</label>
                        </div>
                        
                    </div>
                </div>
                <div class="formSection-btn">
                    <input class="admin-button" name="add-user" type="submit" value="Crear">
                </div>
            </form>
        </div>
        <div class="btn-goback">
            <a class="admin-button" href='admin.php'>Volver</a>
        </div>
    </main>
</body>
</html>