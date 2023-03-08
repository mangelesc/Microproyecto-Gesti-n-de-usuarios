<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-in.css" />
    <link rel="stylesheet" href="../styles/navbar.css" />
    <link rel="stylesheet" href="../styles/users-table.css" />
    <title>Edit user</title>
</head>
<body>
    <nav id="navBar">
        <div id="navBar-left">
            <img src="../imgs/logo.png" alt="logo" id="navbar-logo" />
        </div>
        <div id="navBar-right">
            <ul id="navBarList">
                <li class="menu">
                    <a id="home" href="">Home</a>
                </li>
                <li class="menu"><a id="AdminPanel" href="">Admin Panel</a></li>
                <li class="menu"><a id="myProfile" href="">My Profile</a></li>
                <li class="menu">
                    <a id="log-out" href="./cerrar_sesion.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <table class="admin-table">
            <tr>
                <th class="th">Id</th>
                <th class="th">Username</th>
                <th class="th">Email</th>
                <th class="th">Rol</th>
            </tr>
            
            <?php
            echo "<tr>
                <td>".$_SESSION['currentUser']['id_usuario']."</td>
                <td>".$_SESSION['currentUser']['nombre']."</td>
                <td>".$_SESSION['currentUser']['email']."</td>";
                if ($_SESSION['currentUser']['tipo_usuario'] == 0){
                    echo "<td>Admin</td>";
                }
                else{
                    echo "<td>User</td>";
                }
            echo "</tr>";
            ?>
        </table>

        <form action= "./modificar-usuario2.php" method='post'> 
            <div class="form-column">
                <div class="formSection">
                    <label for="">Username</label>
                    <input
                        type="text"
                        name="user-edit"
                    />
                </div>
                <div class="formSection">
                    <label for="">Email address</label>
                    <input
                        type="text"
                        name="email-edit"
                        pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                    />
                </div>
            </div>
            <div class="form-column">
                <div class="formSection">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password" name="password-edit"/>
                </div>
                <div class="formSection">
                    <p>Rol</p>
                    <div>
                        <input type="radio" id="admin" name="tipo_usuario-edit" value="0" />
                        <label for="admin">Administrador</label>
                    </div>
                    <div>
                        <input type="radio" id="user" name="tipo_usuario-edit" value="1" />
                        <label for="admin">Usuario</label>
                    </div>
                    
                </div>
            </div>
            <div class="formSection">
                <input name="edit-user" type="submit" value="Modificar">
            </div>
        </form>
    </main>
</body>
</html>