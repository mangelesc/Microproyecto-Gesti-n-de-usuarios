<?php
session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

if(isset($_GET['id_usuario'])){
    $_SESSION['currentUser'] = verUsuario($_GET['id_usuario']);
    require_once("../vistas/edit-user.php");
    echo "<br/><a href='admin.php'>Volver</a>";   
} else {
    header("Location: ./admin.php");
}

cerrarConexion();

?>