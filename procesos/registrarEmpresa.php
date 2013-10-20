<?php
	include("conexionBD.php");
	
	$razonSocial=$_POST["razonSoc"];
	$direccionFiscal=$_POST["dirFiscal"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["correo"];
	$flagContactoCorreo=1;//$_POST[""];
	$ruc=$_POST["ruc"];
	$contrasenia=$_POST["contrasenia"];
	
	$conn=conectarBD("localhost","marketBD","root","");
	$rpta=operacion("INSERT INTO empresa(razonSocial,direccionFiscal,telefono,correo,flagContactoCorreo,ruc,contrasenia) VALUES('".$razonSocial."','".$direccionFiscal."','".$telefono."','".$correo."','".$flagContactoCorreo."','".$ruc."','".$contrasenia."')",$conn);
	mysql_close($conn);
?>