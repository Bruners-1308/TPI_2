<?php
	$servidor = "localhost";
	$banco = "dbAppointment";
	$usuario = "root";
	$senha = "";

	$pdo = new PDO("mysql:host=$servidor;bdname=$banco",$usuario,$senha,array(
		  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		  PDO::ATTR_PERSISTENT => false,
		  PDO::ATTR_EMULATE_PREPARES => false,
		  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		  ));
?>