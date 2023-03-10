<?php

session_start();

// Comprobamos el usuario
require_once("./user-control.php");
adminControl();

require_once ("../database/database.php");



$usuarios = verUsuarios();
require_once("../vistas/admin-panel.php");

?>
