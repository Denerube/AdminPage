<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<main class="wrapper">
		<h2>Admin Panel Login</h2>
		
		<div class="inlog-form">
			<img class="inlog-icon" src="../images/laboratory.svg" alt="labo icon">
			<form id="login" action="../login.php" method="post">
				<div class="inlog-username">
				    <label>Username/Email: </label>
				    <br>
				    <input name="loginName" type="text">
			    </div>
			    <div class="inlog-password">
				    <label>Password: </label>
				    <br>
				    <input name="loginPas" type="Password">
			    </div>
			    <input class="inlog-submit" type="submit" value="Inloggen">
			</form>
		</div>
	</main>

</body>
</html>

<?php


?>