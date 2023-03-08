<?php
session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

if(isset($_GET['id_usuario']))
      {
        $id_usuario=$_GET['id_usuario'];
        borrarUsuario($id_usuario);
        header("Location: ./admin.php");
      }

?>