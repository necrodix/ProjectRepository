<section id="win_new_user" class="win_pop2" >
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

</section>

<!--
<table border="0" cellpadding="5" cellspacing="2" class="win_popX" id="win_reg_userX">
<tr class="win_pop_title">
<td><h1>Crear Usuario</h1></td>
</tr>
<tr><td>@ Correo Electronico:</td></tr>
<tr><td><input type="text" id="l_usr">
<br><span id="l_usr_sts" class="txt_error">Usuario Invalidos</span>
</td></tr>
<tr><td>Contraseña:</td></tr>
<tr><td><input type="password" id="l_psw">
<br><span id="l_psw_sts" class="txt_error">Contraseña Incorrecta</span><br>
</td></tr>

<tr><td>Confirmar Contraseña:</td></tr>
<tr><td><input type="password" id="l_psw">
<br><span id="l_psw_sts" class="txt_error">Contraseña Incorrecta</span><br>
</td></tr>

<tr><td><select id="usr_type">
<option>-----</option>
<option>Usuario</option>
<option>Administrador</option>


</select></td></tr>

<tr><td align="center"><input type="button" value="Cancelar" onClick="pop_cancel()" > <input type="button" value="Registrar">

</td></tr>

</table>-->

<br><br>
<section id="win_new_user" class="win_pop2" >
<h1 align="center" >Registrado</h1><br>
<hr>

<div class="input-group mb-3" align="center" >
   <label for="formGroupExampleInput" class="form-label"  style="color:#000; text-align:center;">El USUARIO ha sido REGISTRADO</label>
</div>
<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="pop_cancel()">Aceptar</button>
</div>
</section>

<br>
<br>

<table class="win_pop" id="win_reg_user"  >
<tr class="win_pop_title">
<td><h1>Registro de Usuarios</h1></td>
</tr>
<tr>
<td>Usuario Registrado</td>
</tr>
<tr>
<td><input type="button" value="Aceptar" onClick="alert_hide()" ></td>
</tr>
</table>