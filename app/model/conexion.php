<?php
$cn = mysql_connect("localhost","root","") or die("Error de conexion");
$db = mysql_select_db("agendaugel")or die("Error en db");
return($cn);
return($db);
?>