<?php

	require_once(__DIR__ . "/database.php");

	session_start();
	session_regenerate_id(true);

	$path = "/To-Do App 2.0/";

	$host = "localhost";

	$username = "root";

	$password = "root";

	$database = "todo";

	if(!isset($_SESSION["connection"])){

		$connection = new Database($host, $username, $password, $database);

		$_SESSION["connection"] = $connection;
	}



?>
