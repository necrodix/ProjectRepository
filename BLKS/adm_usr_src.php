<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script type="text/javascript">
function del_usr_alert(){
	alert_hide(1);
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":1},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
	//$("#alert_scr").load("BLKS/user_control/user_dlt_src.php");
	}
function del_cancel(){
	alert_hide();
	}
function del_acept(){
	// envio de instrucciones 
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":2},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
	//alert_hide();
	}
</script>
</head>

<body>

<h1>Administrador de Usuarios</h1>
<input type="button" value="Nuevo Usuario" onClick="new_usr()">
<table id="" border="1" cellpadding="5" cellspacing="2">
<tr>
<td>ID</td>
<td>Nombre</td>
<td>Tipo de Usuario</td>
<td>Fecha Alta</td>
<td>Editar / Eliminar</td>
</tr>
<tr>
<td>---</td>
<td></td>
<td></td>
<td></td>
<td>
<ul class="mm_menu1">
	<li><a>...</a>
    	<ul>
        	<li><a onClick="edit_usr()">Editar</a></li>
            <li><a onClick="del_usr_alert()">Eliminar</a></li>
        </ul>
    </li>   
</ul>

<!--<input type="button" value="Editar" onClick="edit_usr()">/<input type="button" value="Eliminar" onClick="del_usr_alert()" >-->
</td>
</tr>
</table>
</body>
</html>