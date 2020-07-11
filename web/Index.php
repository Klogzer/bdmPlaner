<?php
// Cookie und so
session_start();
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="includes/login_inc.php" method="POST">
    <input type="text" name="user" placeholder="Benutzername"><br>
    <input type="password" name="password" placeholder="Passwort"><br>
    <button type="submit" name="submit">Login</button>
</form>
<br>
<a href="signup.php">Registrieren</a>

</body>
</html>