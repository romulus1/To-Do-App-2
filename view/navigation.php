<?php
	require_once(__DIR__ . "/../model/config.php");

	require_once(__DIR__ . "/../controller/login-varify.php");

	//only allows users who are login to view blog post form
	if (!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}

?>
<!-- link for post.php fille -->
		<a href="<?php echo $path . "post.php"; ?>"><br>Make a Post</a>
</nav>
</header>
