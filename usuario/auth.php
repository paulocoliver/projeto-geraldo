<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/include/class/Auth/Usuario.php';
$auth = new Auth_Usuario();
if(!$auth->isAuthenticated()&&$_SERVER['REQUEST_URI'] != '/usuario/login.php'){
	header("location:/usuario/login.php");
}