<?php
	$server = "localhost";
	$user = "root";
	$pass = "root";
	$db = "miniproyecto";

	$con = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar con la base de datos");

  function login($email, $password){
			$result = mysqli_query($GLOBALS["con"], "select * from usuario where email='$email'");
			if (mysqli_num_rows($result)==1) {
					$usuario = mysqli_fetch_array($result);
					if ($password == $usuario['pass']) {
							return $usuario;
					}else{
							return 0;
					}
			}else{
					return 0;
			}
	}

	function verUsuarios(){
		$result = mysqli_query($GLOBALS["con"], "select * from usuario");
		$usuarios = array();
		while($fila = mysqli_fetch_array($result)){
				$usuarios[] = $fila;
		}
		return $usuarios;//Devuelvo un array con los datos de todos los usuarios
	}

	function verUsuario($id_usuario){
		$result = mysqli_query($GLOBALS["con"], "select * from usuario where id_usuario=$id_usuario");
		$usuario = mysqli_fetch_array($result);
		return $usuario;//Devuelvo un array con los datos de todos los usuarios
	}

  function crearUsuario($nombre,$email , $pass, $tipo_usuario){
		mysqli_query($GLOBALS["con"], "insert into usuario(nombre, email, pass, tipo_usuario) values('$nombre', '$email', '$pass', $tipo_usuario)");
	}

	function modificarUsuario($id_usuario, $nombre, $email, $pass, $tipo_usuario){
		mysqli_query($GLOBALS["con"], "update usuario set nombre='$nombre', email='$email', pass='$pass', tipo_usuario=$tipo_usuario where id_usuario=$id_usuario");
	}
	
	function borrarUsuario($id_usuario){
		mysqli_query($GLOBALS["con"], "delete from usuario where id_usuario=$id_usuario");
	}

  function cerrarConexion(){
		mysqli_close($GLOBALS["con"]);
	}

?>