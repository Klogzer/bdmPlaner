<?php
if (isset($_POST['submit'])) {
    require_once "../config/config.php";
// Hier laden wir unsere Verbindung zur Datenbank
    include '../dbhandler/familyhandler.php';
    familyhandler::createFamiliy($_SESSION['user_id'], $_POST['familyname']);
    header("Location: " . web . "/dashboard.php");
    exit();

} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: " . web . "/dashboard.php");
    exit();
}

