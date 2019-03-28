<?php  
	setcookie("user", "Harry Potter", time()-1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie Example</title>
</head>
<body>
	<h1>Cookies</h1>
	<h2>User: <?= $_COOKIE["user"] ?></h2>
</body>
</html>