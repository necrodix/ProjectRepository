
<?php
//include ("http://192.168.1.127/conn/conexion.php");
$con=mysql_connect("localhost : 3306","root","")or die("XeX:".mysql_error());
mysql_select_db("memory_db",$con)or die ("Error:".mysql_error());
?>