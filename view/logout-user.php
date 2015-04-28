<?php
	require_once(__DIR__ . "/../model/config.php");

	//logs out user
	unset($_SESSION["authenticated"]);

	//as the code hints, it gets ride of the session
	session_destroy();

	//sends the person back to index
	header("Location: " . $path . "index");
