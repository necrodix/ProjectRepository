
<script type="text/javascript">
alert_hide();
info_hide();
</script>
</head>

<body>
<section id="win_login" class="win_pop" >
<h1 align="center" >Bienvenidos</h1><br>

<div class="input-group mb-3" >
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" id="l_usr" class="form-control" placeholder="@ Correo Electrónico" aria-label="@ Correo Electrónico" aria-describedby="basic-addon1">
</div>

<div id="sts_usr"></div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">***</span>
  <input type="password" id="l_pss" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1"></div>
  
  <div  id="sts_pss"></div>
  
  <br>

<div align="center"><button class="btn btn-outline-secondary lgn_btn" type="button" id="button-addon2" onClick="strt_sssn()">Entrar</button></div>

<div></div>
<div id="f_attempts" name="0"></div>
</section>
<!--<section id="win_login" >
<table border="0" cellpadding="5" cellspacing="2" class="win_pop">

<tr class="win_pop_title">
<td><h1>Iniciar sesión</h1></td>
</tr>
<tr><td>:) Usuario:</td></tr>
<tr><td><input type="text" id="l_usr">
<br><span id="l_usr_sts" class="txt_error">Usuario Incorrecto</span>
</td></tr>
<tr><td>Contraseña:</td></tr>
<tr><td><input type="password" id="l_psw">
<br><span id="l_psw_sts" class="txt_error">Contraseña Incorrecta</span>
</td></tr>
<tr><td align="center"><input type="button" value="Acceder">
<br><span id="l_psw_chng" class="txt_nlink">Recuperar Contraseña</span>

</td></tr>

</table>
</section>
--></body>
</html>