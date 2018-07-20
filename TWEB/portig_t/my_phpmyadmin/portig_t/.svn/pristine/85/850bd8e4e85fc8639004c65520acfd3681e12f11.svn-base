<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	require_once 'class.sql.php';
	$my_dbhost='localhost';
	$my_dbuser='root';
	$my_dbpass='root';
	$bdd = new Sql($my_dbhost, $my_dbuser, $my_dbpass);
	$bdd->getConnection();

	function error($error_trace)
	{
		header("Location: index.php?return_error=" . $error_trace);
	}

?>
