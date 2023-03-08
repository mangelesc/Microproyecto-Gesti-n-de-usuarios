<?php
session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");

if(isset($_GET['id_usuario'])){
    if($_SESSION['id_usuario']==$_GET['id_usuario']){
        echo "<script type='text/javascript'>alert('Oops, no te puedes borrar a tí mismo!');</script>";
        header("Refresh:0; url=./admin.php");
    }else{
      $id_usuario=$_GET['id_usuario'];
      try {
          borrarUsuario($id_usuario);
          echo "<script type='text/javascript'>alert('Usuario borrado correctamente');</script>";
      } catch (Exception $e){
          echo "<script type='text/javascript'>alert('Ha habido un error, el usuario no ha podido ser borrado');</script>";
      }
      header("Refresh:0; url=./admin.php");
      
    }
    
  }

?>