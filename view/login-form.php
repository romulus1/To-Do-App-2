<?php
	//helps us reach files easily
	require_once(__DIR__ . "/../model/config.php");
?>
<div class="container">
	<p id="L">
		Login
	</p>
	<!-- form created so already created user can login -->
	<form method="post" action="<?php echo $path . "todo-list.php";?>">
		<!-- label for user to insertmthere username  -->
		<div id="username">
			<label for="username">Username: </label>
			<input type="text" name="username" id="box1" />
		</div>

		<!-- label for user to input their password; password appears as dots not as text -->
		<div id="password">
			<label for="password">Password: </label>
			<input type="password" name="password" id="box2" />
		</div>

		<!-- button to submit the info  -->
		<div id="button">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

		<div>
			<a href="index.php">Back</a><a href="register.php">Register</a>
		</div>
	</form>
</div>
