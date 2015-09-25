<?php 
	include('mail.php'); 

	$nombre = strtoupper($_POST['nombre']);
	$apellidos = strtoupper($_POST['apellidos']);
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$rol = $_POST['rol'];
	$pais = $_POST['pais'];

	$enlace = mysql_connect('50.62.209.40', 'daniel', '14-adq-050') or die("ERROR AL CONECTARSE AL SERVIDOR");
	//$enlace = mysql_connect('184.168.194.60', 'adminblood', 'AdminBlood') or die("ERROR AL CONECTARSE AL SERVIDOR");
	mysql_select_db('bloodwindowtv',$enlace) or die('ERROR AL CONECTARSE A LA BD');

	$reques=mysql_query("INSERT INTO cuentasUsuario"
	        . "(nombre, apellidos, correo, password, rol, Pais) VALUES "
	        . "('".$nombre."','".$apellidos."','".$correo."','".$password."','".$rol."','".$pais."');") or
	                die('Insercion fallida: '.  mysql_error());

	mysql_close($enlace);

	/*$to = $correo;
	$subject = "Bienvenido a BloodWindowTv";
	$txt = "Te damos la bienvenida al portal BloodWindowTv <br>El correo registrado es";
	$headers = "From: webmaster@example.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	mail($to,$subject,$txt,$headers);*/

	if($reques){
	    echo "1";
	    sendEmail($correo,$nombre,$password);
	}
	else{
	    echo "0";
	}
?>