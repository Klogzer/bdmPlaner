<?php
// Cookie und so
session_start();
?>
<html>
<head>
    <title>Registrieren</title>
</head>
<body>
<h1>Registrier dich!</h1>
<form action="includes/signup_inc.php" method="POST">
    <input type="text" name="user" placeholder="Benutzername"><br>
    <input type="password" name="password" placeholder ="Passwort"><br>
    <button type="submit" name="submit">Registrieren</button>
</form>

</body>
</html>