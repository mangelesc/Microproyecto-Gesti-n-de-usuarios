<?php
session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

if(isset($_POST['edit-user'])){
    if(empty($_POST['user-edit'])) {
        $newUsername = $_SESSION['currentUser']['nombre'];
    } else {
        $newUsername = $_POST['user-edit'];
    }
    echo ($newUsername);
    if(empty($_POST['email-edit'])) {
        $newEmail = $_SESSION['currentUser']['email'];
    } else {
        $newEmail = $_POST['email-edit'];
    }

    if(empty($_POST['password-edit'])) {
        $newPassword = $_SESSION['currentUser']['pass'];
    } else {
        $newPassword = $_POST['password-edit'];
    }

    if(!isset($_POST['tipo_usuario-edit'])) {
        $newRol = $_SESSION['currentUser']['tipo_usuario'];
    } else {
        $newRol = $_POST['tipo_usuario-edit'];
    }
    echo($_SESSION['currentUser']['id_usuario'] . $newUsername.$newEmail. $newPassword .$newRol);
    echo("2123");
    modificarUsuario($_SESSION['currentUser']['id_usuario'], $newUsername, $newEmail, $newPassword , $newRol);
    echo "<script>alert('Usuario modificado correctamente')</script>";
    unset($_SESSION['currentUser']);
    header("Location: admin.php");
    }

echo "<br/><a href='admin.php'>Volver</a>";

cerrarConexion();

?>