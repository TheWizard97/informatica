<?php
session_start();
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
<?php
if(!isSet($_SESSION['login'])){
	$_SESSION['login'] = false;
	$_SESSION['user'] = 0;
}
if($_SESSION['login']){
	echo 'Hallo' . $_SESSION['user'];
} else{
?>
		<form method="post" action="login.php">
			<legend>Login<legend>
			<ol>
				<li>
					<input type="text" id ="eerste" name="gNaam" required placeholder="Gebruikersnaam"/>
				</li>
				<li>
					<input type="password" id ="tweede" name="ww" required placeholder="Wachtwoord"/>
				</li>
			</ol>
			<input class="knop" type="submit" value="Verzend" />
		</form>
<?php	
}
?>
	</body>
</html>