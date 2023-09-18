<?php
// cookie determina el nivel de usuario
$nv_usr=1;
switch($nv_usr){
	case 1:
		echo '<input type="button" value="Control de Usuarios" onclick="adm_usr()"> | 
		<input type="button" value="Control de Archivos" onclick="adm_fls()" >';
		// Lo ideal es q los botones se encuentren en una tabla.. para q se generen segun los resultados de la consulta
	break;
	case 2:
		echo '<input type="button" value="Control de Archivos" onclick="adm_fls()">';
	break;
	}
?>
