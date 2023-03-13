<?php
session_start();
require_once("../database/database.php");

if(empty($_POST['email']) || empty($_POST['password'])){
    echo "<script type='text/javascript'>alert('Debes introducir tu nombre de usuario y tu contraseña');</script>";
    header("Location: ../index.php");
}
else{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $resultado = login($email, $password);
    if($resultado == 0){
        echo "<script type='text/javascript'>alert('Ha habido un error al inciar sesión. Por favor, inténtalo de nuevo');</script>";
        header("Refresh:0; ../index.php");
    }else{
        $_SESSION['id_usuario'] = $resultado['id_usuario'];
        $_SESSION['user'] = $resultado['nombre'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
        if($_SESSION['tipo_usuario'] == 0){
            header("Location: admin.php");
        }
        else{
            header("Location: user.php");
        }
        
    }
}

cerrarConexion($con);
?>