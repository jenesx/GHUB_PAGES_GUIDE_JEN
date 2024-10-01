<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

    <h1>Enter data in the fields provided</h1>

    <h2>
        User logged in:
        <?php
        if(isset($_SESSION['FirstName'])) {
            echo $_SESSION['FirstName'];
        }
        ?>
    </h2>

    <h2>
		User password:
		<?php
		if(isset($_SESSION['Password'])) {
			echo $_SESSION['Password'];
		}
		?>		
	</h2>
	<a href="unset.php">Logout</a>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="FirstName"></p>
		<p><input type="password" placeholder="Password here" name="Password"></p>
		<p><input type="submit" value="Submit" name="submitButton"></p>
	</form>
</body>
</html>