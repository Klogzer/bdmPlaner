<?php
// IF-Abfrage, damit kein Inhalt angezeigt wird,
// wenn ein User die URL errät
if (isset($_POST['submit'])) {

// Hier laden wir unsere Verbindung zur Datenbank
    include_once '../dbhandler/mysqlDB.php';
// mysqli_real_escape_string sorgt dafür, dass nur Text,
// aber kein Code in die Datenbank kommt
    $connection = db();
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

// Passwort verschlüsseln
    $hashPassword = password_hash($password,PASSWORD_DEFAULT);

// Jetzt wird der Nutzer in die Datenbank übertragen
    $sql = "INSERT INTO user (username, pw_hash) VALUES ('$user', '$hashPassword');";
    $result = mysqli_query($connection, $sql);
    header("Location: ../dashboard.php");
    exit();


} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../signup.html");
    exit();
}
