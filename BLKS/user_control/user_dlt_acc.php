<?php
$acc=$_POST['acc'];
session_start();

include("../conexion2.php");
switch($acc){
	case 1:
	
echo '
<section id="win_new_user" class="win_pop2" style="width:900px; height:630px;" >
<h1 align="center" style="width:900px;" >Eliminar Usuario</h1>
<br><hr>

        <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Text input with dropdown button" id="src_txt_t">
          
         <button class="btn btn-outline-secondary" type="button" onClick="srch_du()" style="border:1px solid #DDD;">Buscar</button>
        </div>

		<div class="container text-center">
  				<div class="row align-items-start" >
  					<div class="col overflow-y-auto" style="width:400px; ">
							<div class="input-group mb-3" >
									<span class="input-group-text" id="basic-addon1" style="width:400px;">Usuarios Activos</span>
                            </div>
     						<div class="list-group overflow-y-auto" style="height:350px;" id="list_ud">';
									
							 $Consulta=$mysql->query("SELECT * FROM `usuarios`  WHERE `status`=1  AND `id` != ".$_SESSION["id"]."  ORDER BY `app`  ASC");
								 while($result=mysqli_fetch_array($Consulta)){
									 echo '
									 <div class="btn-group me-2" role="group" aria-label="Second group">
								 		<button type="button"  id="btn_usr_'.$result['id'].'" class=" btn-outline-secondary list-group-item list-group-item-action usr_list">'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'</button>
										<button type="button" class="btn btn-outline-secondary desc_btn"  onClick="sel_usr_del('.$result['id'].',2)">Eliminar</button>
									</div>';
								 }
									echo '
                            </div>
   				   </div>

       
              		<div class="col overflow-y-auto" style="width:400px; ">
                        <div class="input-group mb-3" >
                                <span class="input-group-text" id="basic-addon1" style="width:400px;">Usuarios Eliminados</span>
                        </div>
                        <div class="list-group overflow-y-auto" style="height:350px;" id="list_ud2">';
						 $Consulta2=$mysql->query("SELECT * FROM `usuarios`  WHERE `status`=0   ORDER BY `app`  ASC");
							 while($result=mysqli_fetch_array($Consulta2)){
								 echo '
								 <div class="btn-group me-2" role="group" aria-label="Second group">
								 		<button type="button"  id="btn_usr_'.$result['id'].'" class=" btn-outline-secondary list-group-item list-group-item-action usr_list">'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'</button>
								 <button type="button" class="btn btn-outline-secondary actv_btn"  onClick="sel_usr_del('.$result['id'].',3)">Restaurar</button>
								 </div>';
							 }
						
                                echo '
                        </div>
               </div>
    			</div>
         </div>
 
<hr>
		<div align="right">
        	<button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Cancelar</button>
		</div>
</section>
</div>
</div>
</div>
</section>
';
	break;
	case 2:
	   $Consulta3=$mysql->query("UPDATE `usuarios` SET `status` = '0' WHERE `id` = ".$_POST['sid'].";");
		if($Consulta3){
			echo "success";
			}
	break;
	case 3:
		 $Consulta4=$mysql->query("UPDATE `usuarios` SET `status` = '1' WHERE `id` = ".$_POST['sid'].";");
		if($Consulta4){
			echo "success";
			}
	
	break;
	case 4:
		$src_txt="";
		if(isset($_POST['src_txt'])){
					$src_txt=" AND (`app` LIKE '%".$_POST['src_txt']."%' OR `apm` LIKE '%".$_POST['src_txt']."%' OR `nombre` LIKE '".$_POST['src_txt']."%' )";
				}
		 $Consulta2=$mysql->query("SELECT * FROM `usuarios`  WHERE `status`=1 ".$src_txt." AND `id` != ".$_SESSION["id"]."  ORDER BY `app`  ASC");
		 while($result=mysqli_fetch_array($Consulta2)){
		 echo '<div class="btn-group me-2" role="group" aria-label="Second group">
		 <button type="button"  id="btn_usr_'.$result['id'].'" class=" btn-outline-secondary list-group-item list-group-item-action usr_list"   ">	 
		'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'
	  </button><button type="button" class="btn btn-outline-secondary desc_btn"  onClick="sel_usr_del('.$result['id'].',2)">Eliminar</button></div>';
		 }
	break ;
	case 5:
			$src_txt="";
		if(isset($_POST['src_txt'])){
					$src_txt=" AND (`app` LIKE '%".$_POST['src_txt']."%' OR `apm` LIKE '%".$_POST['src_txt']."%' OR `nombre` LIKE '".$_POST['src_txt']."%' )";
				}
		 $Consulta2=$mysql->query("SELECT * FROM `usuarios`  WHERE `status`=0 ".$src_txt."  AND `id` != ".$_SESSION["id"]."  ORDER BY `app`  ASC");
		 while($result=mysqli_fetch_array($Consulta2)){
		 echo '<div class="btn-group me-2" role="group" aria-label="Second group">
		 <button type="button"  id="btn_usr_'.$result['id'].'" class=" btn-outline-secondary list-group-item list-group-item-action usr_list"   ">	 
		'.$result['app'].' '.$result['apm'].' '.$result['nombre'].'
	  </button><button type="button" class="btn btn-outline-secondary actv_btn"  onClick="sel_usr_del('.$result['id'].',3)">Restaurar</button></div>';
		 }
	break ;
	
	
	}
?>