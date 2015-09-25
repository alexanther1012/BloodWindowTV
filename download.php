<?php 
	//download.php?fichero=doc/convoca/fichadeinscripcionbloodwindowtv.docx&nombre=descargas-fichadeinscripcionbwtv
	$fichero = $_GET['fichero'];
	$nombre = $_GET['nombre'];
	$basefichero = basename($fichero);
	header("Content-Type: application/octet-stream");
	header("Content-Length:".filesize($fichero));
	header("Content-Disposition:attachment;filename=".$basefichero);
	readfile($fichero);
	$a = file($nombre.".data");
	$b = $a[0];
	$b = $b + 1;
	$conteo = fopen($nombre.".data","w");
	fwrite($conteo,$b);
	fclose($conteo);
	header("Location:index.php");
 ?>