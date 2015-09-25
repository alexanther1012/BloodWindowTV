<?php

	function sendEmail($email,$usuario,$password){

	$subject = "Bienvenido!";

	$message = file_get_contents('./mail.html',FILE_USE_INCLUDE_PATH);
	$message = eregi_replace("#usuario#",$usuario,$message);
	$message = eregi_replace("#correo#",$email,$message);
	$message = eregi_replace("#password#",$password,$message);


	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: registro@bloodwindowtv.com';

		mail($email,$subject,$message,$headers);

	}

	//sendEmail("gabriel.cl@itszapopan.edu.mx","Gabriel","123456");
?>