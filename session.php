<?php  
session_start();

echo session_id();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$_SESSION["username"]=$_POST["username"];
}

$username=isset($_SESSION["username"])?$_SESSION["username"]:"";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session Example</title>
</head>
<body>
	<form action="session.php" method="post">
		Name: <input type="text" name="username" value='<?= $username ?>'> <input type="submit" value="Submit">
	</form>
</body>
</html>