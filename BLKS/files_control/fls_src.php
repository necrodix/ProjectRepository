<?php
session_start();
include("../conexion2.php");

$Consulta=$mysql->query("SELECT * FROM `files_ges` WHERE `padre`=".$_GET['prf']."");
while($result=mysqli_fetch_array($Consulta)){
	switch($result['tipo']){
		case 0:
			echo '<div class="btn-group file_block"  role="group" style="width:120px; max-width:120px; min-width:120px; inline-size:60px; overflow-wrap:break-word; word-break: break-all; margin-right:20px;" >
					<button type="button" class="btn "  aria-expanded="false" id="1" name="'.$result['nombre'].'" onClick="into_folder('.$result['id'].',\''.$result['nombre'].'\')">
							<img src="'.$result['icono'].'" width="100px" height="100px">
							 <hr>
							<label style="font-size:13px; width:80px; inline-size:100px; overflow-wrap:break-word; word-break:break-all; text-wrap:balance;" >'.$result['nombre'].'</label>
					</button>
				</div>';
		break;
		case 1:
			
		break;
		
		}
	
	}


?>
