<?php
session_start();
require_once("../database/database.php");
$page = $_SERVER['PHP_SELF'];

if(isset($_POST['new-user'])){
    if(empty($_POST['user-new']) || empty($_POST['email-new']) || empty($_POST['password-new']) || empty($_POST['email-new']) || !isset($_POST['tipo_usuario-new'])){
        echo "<script type='text/javascript'>alert('Debes rellenar todos los campos para crear un nuevo usuario');</script>";
    }
    else{
        try{
            crearUsuario($_POST['user-new'], $_POST['email-new'], $_POST['password-new'], 1);
            echo "<script type='text/javascript'>alert('Usuario añadido correctamente');</script>";
            try{
                $resultado = login($_POST['email-new'], $_POST['password-new']);
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['user'] = $resultado['nombre'];
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
            }catch (Exception $e){
                echo "<script type='text/javascript'>alert('Ha habido un error, no se ha podido añadir el nuevo usuario. Inténtalo de nuevo');</script>";
            }
            header("Location: ./home.php");
        } catch (Exception $e){
        echo "<script type='text/javascript'>alert('Ha habido un error, no se ha podido añadir el nuevo usuario. Inténtalo de nuevo');</script>";
        }
        
    }
} else {
    echo "<script type='text/javascript'>alert('Ha habido un error, no se ha podido añadir el nuevo usuario. Inténtalo de nuevo');</script>";
}

?>