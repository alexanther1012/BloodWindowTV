<?php

$correo = $_POST['correo'];
$password = $_POST['password'];
$rol = $_POST['rol'];

$enlace = mysql_connect('50.62.209.40', 'daniel', '14-adq-050') or die("ERROR AL CONECTARSE AL SERVIDOR");
mysql_select_db('bloodwindowtv',$enlace) or die('ERROR AL CONECTARSE A LA BD');

$lista = mysql_query("SELECT id FROM cuentasUsuario"
        . " WHERE correo='".$correo."' and password='".$password."' and rol = '".$rol."';") or
                die('Consulta fallida: '.  mysql_error());

$line = mysql_fetch_array($lista, MYSQL_ASSOC);
mysql_close($enlace);

if ($line['id']!= NULL) {
    echo '1';
    session_start();
    $_SESSION['usuario'] = $line['id'];       
}else{
    echo '0';
}