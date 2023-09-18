<?php
date_default_timezone_set('America/Mexico_City');
$acc=$_POST['acc'];
session_start();

include("../conexion2.php");
if(isset($_GET['lv'])){
	include("../../conexion2.php");
	};
switch($acc){
	case 1:
	//echo date('Y\-m\-d')."--".date('h\:i\:s');
	echo '<section id="win_new_user" class="win_pop2" >
			<h1 align="center" >Nueva Carpeta</h1><br>
			<hr>
			
			
			<div class="input-group mb-3" >
			  <span class="input-group-text" id="basic-addon1">Nombre</span>
			  <input type="text" id="f_nbr" class="form-control" placeholder="Nombre de la Carpeta" aria-label="Nombre" aria-describedby="basic-addon1">
			</div>
			<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Cancelar</button>
			<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="new_fld(2)">Crear</button></div>
			</section>';

	break;
	case 2:
		$prof=$_POST['prof'];
		$fname=$_POST['fname'];
		$Consulta=$mysql->query("INSERT INTO `files_ges` (`id`, `nombre`, `tipo`, `ext`, `icono`, `padre`, `url`, `status`, `uploader`, `fecha`, `hora`) VALUES (NULL, '".$fname."', 'fld', 'fld', 'IMG/Folder.png', '".$prof."', '', '1', '".$_SESSION["id"]."', '".date('Y\-m\-d')."', '".date('h\:i\:s')."');");
		
	break;
}


?>
