<?php
$acc=$_POST['acc'];

include("../conexion2.php");
switch($acc){
	case 1:
	echo '<section id="win_new_user" class="win_pop2" style="width:800px; height:680px;" >
<h1 align="center" style="width:800px;" >Editar Usuario</h1><br>
<hr>';

echo '<div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Text input with dropdown button" id="src_txt_t">
  
 <button class="btn btn-outline-secondary" type="button" onClick="srch_eu(0)">Buscar</button>
</div>';

echo '<div class="container text-center">
  <div class="row align-items-start">
  
  
  
    <div class="col overflow-y-auto">
	
	<div class="btn-group me-2" role="group" aria-label="Second group" style="width:100%;">
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(1)">ASC</button>
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(2)">DESC</button>
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(3)">FECHA</button>
  </div><br><br>
     <div class="list-group overflow-y-auto" style="height:450px;" id="list_ue">';
     
   
   
   
   
	 $Consulta=mysql_query("SELECT * FROM `usuarios`  WHERE `status`=1   ORDER BY `app`  ASC");
	 while($result=mysql_fetch_array($Consulta)){
	 echo '<button type="button"  id="btn_usr_'.$result['id'].'" class="list-group-item list-group-item-action usr_list"   onClick="sel_usr_edt('.$result['id'].')">	 
   	'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'
  </button>';
	 }
	  
     
     
  echo '</div>
    </div>
    <div class="col">

<section style="width:350px; ">
<!--<h1 align="center" >Editar Usuario</h1><br>
<hr>-->

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">ID</span>
  <input type="text" id="l_id" class="form-control" disabled  placeholder="0" aria-label="ID" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Nombre</span>
  <input type="text" id="l_nbr" class="form-control"  placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido P.</span>
  <input type="text" id="l_app" class="form-control" placeholder="A. Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido M.</span>
  <input type="text" id="l_apm" class="form-control" placeholder="A. Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1">
</div>
<hr>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" id="l_usr" class="form-control" placeholder="@ Correo Electrónico" aria-label="@ Correo Electrónico" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss2" class="form-control" placeholder="Confirmar Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Categoria</span>
  <select id="l_ctg"  class="form-control form-select" aria-label="Categoria"  aria-describedby="basic-addon1" >
  <option>Usuario</option>
  <option>Editor</option>
  <option>Administrador</option>
  </select>
  
</div>
<div  id="sts_nwu"></div>
<br>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Cancelar</button>
<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="edt_usr_ok()">Editar</button></div>
</section>



</div>
</div>
</div>
</section>';
	break;
	case 2:
	
	$ctg=2;
		switch($_POST['ctg']){
			case "Usuario":
			$ctg=2;
			break;
			case "Editor":
			$ctg=1;
			break;
			case "Administrador":
			$ctg=0;
			break;
			default:
			$ctg=2;
			break; 
			}
	//.$_POST['nbr']."', '".$_POST['app']."', '".$_POST['apm']."', 'NULL', '".$_POST['usr']."', '".$_POST['pss']."', '".$ctg."',
	
	$Consulta=mysql_query("UPDATE `usuarios` SET `nombre` = '".$_POST['nbr']."', `app` = '".$_POST['app']."', `apm` = '".$_POST['apm']."', `puesto` = 'NULL', `email` = '".$_POST['usr']."', `pass` = '".$_POST['pss']."', `categoria` = '".$ctg."', `status` = '1' WHERE `usuarios`.`id` = ".$_POST['id'].";");
	if($Consulta){
	
	echo '<section id="win_new_user" class="win_pop2" >
<h1 align="center" >Guardado</h1><br>
<hr>

<div class="input-group mb-3" align="center" >
   <label for="formGroupExampleInput" class="form-label"  style="color:#000; text-align:center;">Cambios Guardados</label>
</div>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Aceptar</button>
</div>
</section>';
	}
	break;
	
	case 3:
		$Consulta3=mysql_query("SELECT * FROM `usuarios` WHERE `id`=".$_POST['ue_id']."");
	 if($result3=mysql_fetch_array($Consulta3)){
		 //echo 'alert("usuario sel")';
		 };
		 $cat_op_0='<option>Administrador</option>';
	  $cat_op_1='<option>Editor</option>';
	  $cat_op_2='<option>Usuario</option>';
     switch($result3['categoria']){
			case 0:
				$cat_op_0='<option selected="selected">Administrador</option>';
				
			break; 
			case 1:
				$cat_op_1='<option selected="selected">Editor</option>';
				
			break; 
			case 2:
				$cat_op_2='<option selected="selected">Usuario</option>';
				
			break; 
	
	
		 };
		 	echo '<section id="win_new_user" class="win_pop2" style="width:800px; height:680px;" >
<h1 align="center" style="width:800px;" >Editar Usuario</h1><br>
<hr>';

echo '<div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Text input with dropdown button" id="src_txt_t">
   <button class="btn btn-outline-secondary" type="button">Buscar</button>
</div>';

echo '<div class="container text-center">
  <div class="row align-items-start">
  
  
  
    <div class="col overflow-y-auto">
	
	<div class="btn-group me-2" role="group" aria-label="Second group" style="width:100%;">
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(1)">ASC</button>
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(2)">DESC</button>
    <button type="button" class="btn btn-outline-secondary" onClick="srch_eu(3)">FECHA</button>
  </div><br><br>
     <div class="list-group overflow-y-auto" style="height:450px;" id="list_ue">';
     
   
	 $Consulta=mysql_query("SELECT * FROM `usuarios` WHERE `status`=1  ORDER BY `app`  ASC");
	 while($result=mysql_fetch_array($Consulta)){
	 echo '<button type="button"  id="btn_usr_'.$result['id'].'" class="list-group-item list-group-item-action usr_list"   onClick="sel_usr_edt('.$result['id'].')">	 
   	'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'
  </button>';
	 }
	  
     
  echo '</div>
    </div>
    <div class="col">

<section style="width:350px; ">
<!--<h1 align="center" >Editar Usuario</h1><br>
<hr>-->

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">ID</span>
  <input type="text" id="l_id" class="form-control" disabled  placeholder="0" aria-label="ID" aria-describedby="basic-addon1" value="'.$result3['id'].'">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Nombre</span>
  <input type="text" id="l_nbr" class="form-control"  placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="'.$result3['nombre'].'">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido P.</span>
  <input type="text" id="l_app" class="form-control" placeholder="A. Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1"  value="'.$result3['app'].'">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido M.</span>
  <input type="text" id="l_apm" class="form-control" placeholder="A. Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" value="'.$result3['apm'].'">
</div>
<hr>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" id="l_usr" class="form-control" placeholder="@ Correo Electrónico" aria-label="@ Correo Electrónico" aria-describedby="basic-addon1" value="'.$result3['email'].'">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock"  value="'.$result3['pass'].'">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss2" class="form-control" placeholder="Confirmar Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock"  value="'.$result3['pass'].'">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Categoria</span>
  <select id="l_ctg"  class="form-control form-select" aria-label="Categoria"  aria-describedby="basic-addon1" >
 ' 
 .$cat_op_2
 .$cat_op_1
 .$cat_op_0.
 '
  </select>
  
</div>
<div  id="sts_nwu"></div>
<br>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Cancelar</button>
<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="edt_usr_ok()">Editar</button></div>
</section>



</div>
</div>
</div>
</section>';
		 
		 
		 /*echo '<script type="text/javascript">alert("hola")</script>';*/
	break;
	
	case 4:
	
	$src_txt="";
	$order="";
		switch($_POST['sid']){
			case 0:
				$order="";
			break;
			case 1:
				$order=" ORDER BY `app`  ASC";
			break;
			case 2:
				$order=" ORDER BY `app`  DESC";
			break;
			case 3:
				$order=" ORDER BY `id`  ASC";
			break;
			}
			
			
			if(isset($_POST['src_txt'])){
					$src_txt=" AND (`app` LIKE '%".$_POST['src_txt']."%' OR `apm` LIKE '%".$_POST['src_txt']."%' OR `nombre` LIKE '".$_POST['src_txt']."%' )";
				}
			
				$Consulta4=mysql_query("SELECT * FROM `usuarios` WHERE `status`=1 ".$src_txt.$order);
	 			while($result=mysql_fetch_array($Consulta4)){
				 echo '<button type="button"  id="btn_usr_'.$result['id'].'" class="list-group-item list-group-item-action usr_list"   onClick="sel_usr_edt('.$result['id'].')">	 
				'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'
			  </button>';
				 }
		
	break;
	}


mysql_close();


?>

<!--
<section id="win_new_user" class="win_pop2" style="width:800px; height:560px;" >
<h1 align="center" style="width:800px;" >Editar Usuario</h1><br>
<hr>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col overflow-y-auto">
     <div class="list-group overflow-y-auto" style="height:450px;">
     
  
     
     
     
  <button type="button"  id="btn_usr_ID" class="list-group-item list-group-item-action usr_list" aria-current="true" onClick="sel_usr_edt(1)">
   	User Example
  </button>


</div>
    </div>
    <div class="col">

<section style="width:350px; ">


<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Nombre</span>
  <input type="text" id="l_nbr" class="form-control"  placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido P.</span>
  <input type="text" id="l_app" class="form-control" placeholder="A. Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Apellido M.</span>
  <input type="text" id="l_apm" class="form-control" placeholder="A. Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1">
</div>
<hr>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" id="l_usr" class="form-control" placeholder="@ Correo Electrónico" aria-label="@ Correo Electrónico" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock">
</div>
<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss2" class="form-control" placeholder="Confirmar Contraseña" aria-label="Contraseña" aria-describedby="passwordHelpBlock">
</div>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Categoria</span>
  <select id="l_ctg"  class="form-control form-select" aria-label="Categoria"  aria-describedby="basic-addon1" >
  <option>Usuario</option>
  <option>Editor</option>
  <option>Administrador</option>
  </select>
  
</div>
<div  id="sts_nwu"></div>
<br>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Cancelar</button>
<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="new_usr_ok()">Editar</button></div>
</section>



</div>
</div>
</div>
</section>-->
