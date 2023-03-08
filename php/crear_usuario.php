<?php

session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

echo "<h1> Area de creación de usuarios</h1>";

echo "

    <form action='crear_usuario.php' method='post'>
    Usuario: <input type='text' name='user'><br>
    Email: <input type='text' name='email'><br>
    Contraseña: <input type='password' name='password'><br>
    Tipo: <select name='tipo_usuario'>
        <option value='0'>ADMIN</option>
        <option value='1'>USUARIO</option>
    </select>
    <input type='submit' name='crear' Value='Crear Usuaruio'>
    ";

if(isset($_POST['crear'])){
    if(empty($_POST['user']) || empty($_POST['password']) || empty($_POST['email'])){
        echo "Debes rellenar todos los campos";
    }
    else{
        $password = ($_POST['password']);
        crearUsuario($_POST['user'], $_POST['email'], $password, $_POST['tipo_usuario']);
        header("Location: admin.php");
    }
}

echo "<br/><a href='admin.php'>Volver</a>";
cerrarConexion();

//cerramos la sesion del usuario y le mandamos a cerrar_sesion.php el cual le mandará al index.php
echo " <br> <a href='cerrar_sesion.php'>Cerrar sesión</a>";



?>