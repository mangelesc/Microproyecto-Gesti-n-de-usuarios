<?php

// Evitar que los usuarios puedan entrar en admin
function adminControl(){
  if(!isset($_SESSION['id_usuario'])){
		header("Location: ../index.php");
  } else {
        if($_SESSION['tipo_usuario'] != 0){
            session_destroy();
            header("Location: ../index.php");
        }
  }
}


// Evitar que los admin puedan entrar en user
function userControl(){
  if(!isset($_SESSION['id_usuario'])){
		header("Location: ../index.php");
  } else {
      if($_SESSION['tipo_usuario'] != 1){
          session_destroy();
          header("Location: ../index.php");
      }   
  }
}

?>