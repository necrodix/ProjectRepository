<?php
session_start();
			
			if(!isset($_SESSION["activa"])){
					header("Location: index.html");
					};

$user_categ=$_SESSION["categoria"];
include ("conexion2.php");

$consulta=$mysql->query("SELECT * FROM `menus` WHERE `nivel`= 0 AND `permisos` LIKE '%".$user_categ."%'" )or die("ERROR QUERY");

while($fila=mysqli_fetch_array($consulta)){
	echo '<input type="button" class="btn_menu_g" value="'.$fila['nombre'].'" onclick="'.$fila['funcion'].'"><br>';
	
$consulta2=$mysql->query("SELECT * FROM `menus` WHERE `nivel`= ".$fila['id']." AND `permisos` LIKE '%".$user_categ."%'" )or die("ERROR QUERY");
	while($fila=mysqli_fetch_array($consulta2)){
		echo '<input type="button" class="btn_submenu_g" value="'.$fila['nombre'].'" onclick="'.$fila['funcion'].'"><br>';
		}
	
}


mysqli_close($mysql);
?>
