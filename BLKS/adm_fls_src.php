<script type="text/javascript">


function into_folder(idx,namex){

	$("#folder_list").append("<span id='L_"+idx+"' onClick='bck_fld(this.id)' style='cursor:pointer; '>"+namex+"/</span>");
	$("#profundidad").html(idx);
	$("#dir_display").load("BLKS/files_control/fls_src.php?prf="+parseInt($("#profundidad").text()));
	
	}
function bck_fld(tid){
	numbid=tid.split("_");
	if(parseInt($("#profundidad").text())==numbid[1]){
	ant_id = $($("#"+tid).prev()).attr("id");

	number=ant_id.split("_");
	$("#"+tid).remove();
	$("#profundidad").html(number[1]);
	$("#dir_display").load("BLKS/files_control/fls_src.php?prf="+number[1]+"&lv=1");
	}	
	
	}
function del_list_element(){
	$("#L_1").remove();
	}
</script>
<style type="text/css" >

</style>
<div class="btn-group dropend" role="group" style="border:1px solid #BBB;" >
    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Nuevo ...
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" onClick="new_fld(1)" style='cursor:pointer; ' >Nueva Carpeta</a></li>
      <li><a class="dropdown-item" style='cursor:pointer; ' >Nuevo Archivo</a></li>
    </ul>
  </div>
<span style="float:right;">Profundidad:<span id="profundidad" style="width:40px;">1</span></span>
<br>
<span class="lines">||</span>|<span id="folder_list"><span id="L_0"></span></span><!--**||**<span id="L_1"></span>-->
<hr>

<section id="dir_display" style="border:0px solid #999; padding:10px; height:100%; margin:auto; bottom:0px; width:95%; grid-rows:inherit;  ">

<?php 
session_start();
include("conexion2.php");
$Consulta=mysql_query("SELECT * FROM `files_ges` WHERE `padre`=1");
while($result=mysql_fetch_array($Consulta)){
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
	




<div class="btn-group  file_block" role="group" style="width:120px; max-width:120px; min-width:120px; inline-size:60px; overflow-wrap:break-word; word-break: break-all; margin-right:20px;">
    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    		<img src="IMG/File.png" width="100px" height="100px">
   			 <hr>
     	 	<label style="font-size:13px; width:80px; inline-size:100px; overflow-wrap:break-word; word-break:break-all; text-wrap:balance;" >File Name 123456789 123456789 123456789</label>
    </button>
    
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,1)">Ver</a></li>
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,2)">Descargar</a></li>
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,3)">Enviar por Email</a></li>
      <li><hr></li>
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,4)">Renombrar</a></li>
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,5)">Mover</a></li>
      <li><hr></li>
      <li><a class="dropdown-item" style="cursor:pointer;" onClick="file_exec(this.id,6)">Eliminar</a></li>
    </ul>
</div>

</section>

