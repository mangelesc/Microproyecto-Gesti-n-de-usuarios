<?php

session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

require_once("../vistas/add-user.php");

if(isset($_POST['add-user'])){
    if(empty($_POST['user-add']) || empty($_POST['email-add']) ||empty($_POST['password-add']) || empty($_POST['email-add'])){
        echo "<script type='text/javascript'>alert('Debes rellenar todos los campos para crear un nuevo usuario');</script>";
    }
    else{
        try{
            crearUsuario($_POST['user-add'], $_POST['email-add'], $_POST['password-add'], $_POST['tipo_usuario-add']);
            echo "<script type='text/javascript'>alert('Usuarioa añadido correctamente');</script>";
        } catch (Exception $e){
        echo "<script type='text/javascript'>alert('Ha habido un error, no se ha podido añadir el nuevo usuario. Inténtalo de nuevo');</script>";
        }
        header("Refresh:0; url=./admin.php");
    }
}

cerrarConexion();

?>