<?php

if(!isSet($_SESSION)){
	session_start();
}
if (!defined('URL')){
	define("URL", "http://".$_SERVER["SERVER_NAME"].'/SertaoConcursos'); //DEFINO A URL DO SISTEMA
}

//$mysqli->set_charset("utf8");

header('Content-Type: text/html; charset=utf-8');

if (!defined('DIR_CSS')){
	define("DIR_CSS", "web/_estilos/css");
}

if (!defined('DIR_IMG')){
	define("DIR_IMG", "web/_estilos/img");
}
if (!defined('DIR_JS')){
	define("DIR_JS", "web/_estilos/js");
}
if (!defined('DIR_JS_UI')){
	define("DIR_JS_UI", "web/_estilos/jquery-ui-1.11.4.custom");
}



$hostname = 'localhost';
$usuario  = 'root';
$senha    = '';
$db       = 'meveana';
?>