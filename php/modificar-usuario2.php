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
    try {
        modificarUsuario($_SESSION['currentUser']['id_usuario'], $newUsername, $newEmail, $newPassword , $newRol);
        if ($_SESSION['currentUser']['id_usuario'] == $_SESSION['id_usuario']){
            session_destroy();
            echo "<script type='text/javascript'>alert('Su usuario modificado correctamente, por favor, inicie sesión de nuevo');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Usuario modificado correctamente');</script>";
            
        }
    } catch (Exception $e){
        echo "<script type='text/javascript'>alert('Ha habido un error, el usuario no ha podido ser modficado');</script>";
    }
    unset($_SESSION['currentUser']);
    header("Refresh:0; url=./admin.php");
    }

cerrarConexion();

?>