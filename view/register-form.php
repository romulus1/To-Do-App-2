<?php
	require_once(__DIR__ . "/../model/config.php");

?>

<div class="container">

	<p id="R">
		Register
	</p>

	<form method="post" action="<?php echo $path . "controller/create-user.php";?>">

		<div id="username">
			<label for="username">Username: </label>
			<input type="text" name="username" id="box1" />
		</div>

		<div id="password">
			<label for="password">Password: </label>
			<input type="password" name="password" id="box2" />
		</div>

		<div id="button">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

		<div>
			<a href="index.php">Back</a><a href="login.php">Login</a>
		</div>
	</form>
</div>
