<?php

session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");



$usuarios = verUsuarios();
echo "Hola usted es " .$_SESSION['user'];
require_once("../vistas/admin-panel.php");

?>
