
<script type="text/javascript">


$("#info_usr").css("opacity",1);
if(Cookies.get('nombre') ){
	$("#full_name").html('Bienvenido(a):'+Cookies.get('nombre'));
	$("#zbody").load(DTX("424c4b532f61646d5f666c735f7372632e706870"));
	}else{
		//alert("sin cookie");
		};
	
	
	$.post(DTX("424c4b532f6d656e755f7372632e706870"),function(menu){
	//memu_src
	if(menu != ""){
		$("#menu").append(menu);
		}});

function adm_usr(){
	$("#zbody").load(DTX("424c4b532f61646d5f7573725f7372632e706870"));
	//adm_usr_src
	}
function adm_fls(){
	$("#zbody").load(DTX("424c4b532f61646d5f666c735f7372632e706870"));
	//adm_fls_src
	}
alert_hide();

function new_usr(){
	alert_hide(1);
	$.post("BLKS/user_control/user_new_acc.php",{"acc":1},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
	}
	
function new_usr_ok(){
	alert_hide(1);
	//****************************
	
	$("#sts_nwu").html("");
	$("#l_nbr").css("border","1px solid #CCC");
	$("#l_app").css("border","1px solid #CCC");
	$("#l_apm").css("border","1px solid #CCC");
	$("#l_usr").css("border","1px solid #CCC");
	$("#l_pss").css("border","1px solid #CCC");
	$("#l_pss2").css("border","1px solid #CCC");



	//*****************************
	if($("#l_nbr").val() != "" && $("#l_app").val() != "" && $("#l_apm").val() != "" && $("#l_usr").val() != "" && $("#l_pss").val() != "" && $("#l_pss2").val() != "" && $("#l_ctg").val() != "" ){
		if ( $("#l_pss").val() ==  $("#l_pss2").val()){
	$.post("BLKS/user_control/user_new_acc.php",{"acc":2,"nbr":$("#l_nbr").val(),"app":$("#l_app").val(),"apm":$("#l_apm").val(),"usr":$("#l_usr").val(),"pss":$("#l_pss").val(),"pss2":$("#l_pss2").val(),"ctg":$("#l_ctg").val()},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
		}else{
			//alert("Las Contraseñas deben ser Iguales");
			$("#sts_nwu").html("Las Contraseñas no coinciden");
			$("#l_pss").css("border","1px solid #F00");
			$("#l_pss2").css("border","1px solid #F00");
			
			}
	}else{
		//alert("Debes llenar todos los campos");
			$("#sts_nwu").html("Debe Llenar Todos los Campos");
			$("#l_nbr").css("border","1px solid #F00");
			$("#l_app").css("border","1px solid #F00");
			$("#l_apm").css("border","1px solid #F00");
			$("#l_usr").css("border","1px solid #F00");
			$("#l_pss").css("border","1px solid #F00");
			$("#l_pss2").css("border","1px solid #F00");
		}

		}
		
function pop_cancel(){
	alert_hide();
	}

function edit_usr(){
	alert_hide(1);
	$.post("BLKS/user_control/user_edit_acc.php",{"acc":1},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
	}
function edt_usr_ok(){
	alert_hide(1);
	
	if($("#l_nbr").val() != "" && $("#l_app").val() != "" && $("#l_apm").val() != "" && $("#l_usr").val() != "" && $("#l_pss").val() != "" && $("#l_pss2").val() != "" && $("#l_ctg").val() != "" ){
		if ( $("#l_pss").val() ==  $("#l_pss2").val()){
	$.post("BLKS/user_control/user_edit_acc.php",{"acc":2,"id":$("#l_id").val(),"nbr":$("#l_nbr").val(),"app":$("#l_app").val(),"apm":$("#l_apm").val(),"usr":$("#l_usr").val(),"pss":$("#l_pss").val(),"pss2":$("#l_pss2").val(),"ctg":$("#l_ctg").val()},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
		}else{
			//alert("Las Contraseñas deben ser Iguales");
			$("#sts_nwu").html("Las Contraseñas no coinciden");
			$("#l_pss").css("border","1px solid #F00");
			$("#l_pss2").css("border","1px solid #F00");
			
			}
	}else{
		//alert("Debes llenar todos los campos");
			$("#sts_nwu").html("Debe Llenar Todos los Campos");
			$("#l_nbr").css("border","1px solid #F00");
			$("#l_app").css("border","1px solid #F00");
			$("#l_apm").css("border","1px solid #F00");
			$("#l_usr").css("border","1px solid #F00");
			$("#l_pss").css("border","1px solid #F00");
			$("#l_pss2").css("border","1px solid #F00");
		}
	
	

		
		
	}
info_hide(1);

function sel_usr_edt(xid){

	$.post("BLKS/user_control/user_edit_acc.php",{"acc":3,"ue_id":xid},function(data){
		$("#alert_scr").html(data);
	
		});
		
	}
function srch_eu(sid){
	switch(sid){
		case 0:
			$.post("BLKS/user_control/user_edit_acc.php",{"acc":4,"sid":sid,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ue").html(data);});
		break;
		case 1:
			$.post("BLKS/user_control/user_edit_acc.php",{"acc":4,"sid":sid,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ue").html(data);});
		break;
		case 2:
			$.post("BLKS/user_control/user_edit_acc.php",{"acc":4,"sid":sid,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ue").html(data);});
		break;
		case 3:
			$.post("BLKS/user_control/user_edit_acc.php",{"acc":4,"sid":sid,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ue").html(data);});
		break;
		}
	}
	
function del_usr(){
	alert_hide(1);
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":1},function(data){
		if(data){
			$("#alert_scr").html(data);
			}
		});
	}

function sel_usr_del(sid,acc){
	alert_hide(1);
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":acc,"sid":sid},function(data){
		if(data){
			$.post("BLKS/user_control/user_dlt_acc.php",{"acc":1},function(data2){
				if(data2){
					$("#alert_scr").html(data2);
					}
				});
			
			}
		
		});
	}
	
function srch_du(){
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":4,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ud").html(data);});
	$.post("BLKS/user_control/user_dlt_acc.php",{"acc":5,"src_txt":$("#src_txt_t").val()},function(data){
			$("#list_ud2").html(data);});
	}
	
function new_fld(fn){
	alert_hide(1);
	switch(fn){
		case 1:
			$.post("BLKS/files_control/new_fldr.php",{"acc":1},function(data){		
					$("#alert_scr").html(data);
				});
		break;
		case 2:
			$.post("BLKS/files_control/new_fldr.php",{"acc":2,"prof":parseInt($("#profundidad").text()),"fname":$("#f_nbr").val()},function(data){		
					$("#dir_display").load("BLKS/files_control/fls_src.php?prf="+parseInt($("#profundidad").text()));
					alert_hide(0);
				});
				//alert(parseInt($("#profundidad").text(),10)+1);
				
		break;
	}
	
	}
</script>

<section id="menu"></section>
<section id="adm_arch">


<section>
<!--<h1>Administrador</h1>
<hr>-->
<section id="zbody"  style="border:0px solid #0C0; left:120px; margin-left:120px; top:60px; margin-top:60px; position:absolute; width:87%; height:87%;"></section>
</section>

</section>
