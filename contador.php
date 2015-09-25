<?php 
    $fichero = "visitas.data";
	echo "hola mundo";
    $a = file($fichero);
    echo "cree el archivo";
	$b = $a[0];
	echo "tome el valor";
	$b = $b + 1;
	echo "aumente mas uno";
	$conteo = fopen("visitas.data","w");
	echo "abri el archivo";
	fwrite($conteo,$b);
	echo "escribi el nuevo valor";
	fclose($conteo);
	echo "cerre el archivo";
 ?>