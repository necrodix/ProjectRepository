<?php

session_start();
include ("conexion2.php");
$x=0;
$y=0;
$consulta=mysql_query("SELECT count(*) As 'conteo' FROM `usuarios` WHERE `email`='".$_POST['usr']."'  AND `status`=1" )or die("ERROR QUERY");
$fila=mysql_fetch_array($consulta);
if($fila['conteo'] != 1){
		echo "usr_error();\n";
	}else{
		$x=1;
		};

$consulta2=mysql_query("SELECT count(*) As 'conteo2' FROM `usuarios` WHERE `email`='".$_POST['usr']."' AND `pass`='".$_POST['pss']."'  AND `status`=1" )or die("ERROR QUERY");

$fila=mysql_fetch_array($consulta2);
if($fila['conteo2'] != 1){
		echo "pss_error();\n";
		//echo "alert('".$fila['conteo2']."');\n";
	}else{
		$y=1;
		};
$z=$x+$y;
if($z == 2){
	
	/*
while($fila=mysql_fetch_array($consulta)){
	echo '<input type="button" class="btn_menu_g" value="'.$fila['nombre'].'" onclick="'.$fila['funcion'].'"><br>';
}
*/
$consulta3=mysql_query("SELECT * FROM `usuarios` WHERE `email`='".$_POST['usr']."' AND `pass`='".$_POST['pss']."' AND `status`=1" )or die("ERROR QUERY");
$fila=mysql_fetch_array($consulta3);

$_SESSION["id"]=$fila['id'];
$_SESSION["nombre"]=$fila['nombre'];
$_SESSION["app"]=$fila['app'];
$_SESSION["apm"]=$fila['apm'];
$_SESSION["puesto"]=$fila['puesto'];
$_SESSION["email"]=$fila['email'];
$_SESSION["categoria"]=$fila['categoria'];
$_SESSION["status"]=$fila['status'];
$_SESSION["activa"]=1;

echo'$("#n_body").load(DTX("424c4b532f6d61696e2e706870"));';
echo "Cookies.set('nombre','".$_SESSION["nombre"].' '.$_SESSION["app"].' '.$_SESSION["apm"]."',{expires: 1});";
echo "$(\"#full_name\").html('Bienvenido(a):'+Cookies.get('nombre'));";
};

mysql_close();
?>