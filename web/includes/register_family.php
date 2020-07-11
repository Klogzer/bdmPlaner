<?php
session_start();
if (isset($_POST['submit'])) {

// Hier laden wir unsere Verbindung zur Datenbank
    include '../dbhandler/familyhandler.php';
    familyhandler::createFamiliy( $_SESSION['user_id'],$_POST['familyname']);
    header("Location: ../family.php");
    exit();

} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../dashboard.php");
    exit();
}
