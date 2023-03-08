<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../styles/log-in.css" />
        <link rel="stylesheet" href="../styles/navbar.css" />
        <link rel="stylesheet" href="../styles/users-table.css" />
        <title>Admin Panel</title>
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
            <div class="user-main">
                <h1>Administrar usuarios</h1>
                <!-- <form>
                    <input type="searchbox">
                    <input type="submit">
                </form> -->
                <a id="add-user" href="./crear_usuario.php" id="adduser">
                    <img src="../imgs/add-user.png" alt="Add user" id="adduser-img">
                    Crear usuario
                </a>
            </div>
            <div>
                <table class="admin-table">
                    <tr>
                        <th class="th">Id</th>
                        <th class="th">Username</th>
                        <th class="th">Email</th>
                        <th class="th">Rol</th>
                        <th class="th tr-icons" >Modificar</th>
                        <th class="th tr-icons">Eliminar</th>
                    </tr>
                <?php
                foreach($usuarios as $usuario){
                    echo "<tr>
                            <td>".$usuario['id_usuario']."</td>
                            <td>".$usuario['nombre']."</td>
                            <td>".$usuario['email']."</td>";
                            if ($usuario['tipo_usuario'] == 0){
                                echo "<td>Admin</td>";
                            }
                            else{
                                echo "<td>User</td>";
                            }
                            echo "
                            <td>
                                <a
                                    href='./modificar_usuario.php?id_usuario=".$usuario['id_usuario']."'>
                                    <img src='../imgs/edit.png' alt='Edit user' class='user-tools'>
                                </a
                            </td>
                            <td>
                                <a onClick=\"javascript: return confirm('¿Seguro que quieres borrar este usuario?');\"
                                    href='./borrar_usuario.php?id_usuario=".$usuario['id_usuario']."'>
                                    <img src='../imgs/delete.png' alt='Add user' class='user-tools'>
                                </a
                            </td>
                    </tr>";
                }
                ?>
                </table>
            </div>
        </main>
    </body>
</html>