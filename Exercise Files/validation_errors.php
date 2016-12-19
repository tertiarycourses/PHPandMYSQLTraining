<!doctype html>


<html lang="en">
	<head>
		<title>Validation Errors</title>
	</head>
	<body>
		
		<?php
		require_once('validation_functions.php');
		
		$errors = array();
		
		//$username = trim($_POST["username"]);
		$username = trim("");
		
		if (!has_presence($username)) {
			$errors['username'] = "Username can't be blank";
		}
	?>

		<?php echo form_errors($errors); ?>
	</body>
</html>
