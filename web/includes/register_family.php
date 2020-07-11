<?php
// IF-Abfrage, damit kein Inhalt angezeigt wird,
// wenn ein User die URL errät
if (isset($_POST['submit'])) {

// Hier laden wir unsere Verbindung zur Datenbank
    include_once 'mysqlDB.php';

// mysqli_real_escape_string sorgt dafür, dass nur Text,
// aber kein Code in die Datenbank kommt
    $familyname = mysqli_real_escape_string($connection, $_POST['familyname']);

// Jetzt wird der Nutzer in die Datenbank übertragen
    $sql = "INSERT INTO family (name) VALUES ('$familyname');";
    $result = mysqli_query($connection, $sql);
// Der User wird bei einem erfolgreichen Prozess auf
// die später noch erstellte Seite dashboard.php geschickt
    header("Location: ../family.php");
    exit();


} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../dashboard.php");
    exit();
}
