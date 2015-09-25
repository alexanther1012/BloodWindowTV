<?php
	$enlace = mysql_connect("50.62.209.40", "daniel", "14-adq-050") or die("ERROR AL CONECTARSE AL SERVIDOR");
	mysql_select_db("bloodwindowtv",$enlace) or die("ERROR AL CONECTARSE A LA BD");
	$res = mysql_query("SELECT * FROM PAISES") or die(mysql_error());
	echo '<option class="text-center" value="default">Seleccione su país</option>';
	while($pais=mysql_fetch_array($res)){
		echo '<option value="'.$pais['nombrePais'].'" class="text-center">'.$pais['nombrePais'].'</option>';
	}
?>