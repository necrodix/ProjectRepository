<?php
$acc=$_POST['acc'];
include("../conexion2.php");
switch($acc){
	case 1:
	echo '<section id="win_new_user" class="win_pop2" >
<h1 align="center" >Nuevo Usuario</h1><br>
<hr>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">Nombre</span>
  <input type="text" id="l_nbr" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
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
<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="new_usr_ok()">Registrar</button></div>

</section>';
	break;
	case 2:
	//$_POST[''];
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
	
	$Consulta=$mysql->query("INSERT INTO `usuarios` (`id`, `nombre`, `app`, `apm`, `puesto`, `email`, `pass`, `categoria`, `status`) VALUES (NULL, '".$_POST['nbr']."', '".$_POST['app']."', '".$_POST['apm']."', 'NULL', '".$_POST['usr']."', '".$_POST['pss']."', '".$ctg."', '1');");
	if($Consulta){
	
	echo '<section id="win_new_user" class="win_pop2" >
<h1 align="center" >Registrado</h1><br>
<hr>

<div class="input-group mb-3" align="center" >
   <label for="formGroupExampleInput" class="form-label"  style="color:#000; text-align:center;">El USUARIO ha sido REGISTRADO</label>
</div>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Aceptar</button>
</div>
</section>
';
	}
	break;
	mysqli_close($mysql);
	}

?>
