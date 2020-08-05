<?php
include_once '../classes/CharacterClass.php';
include_once '../classes/Family.php';
include_once '../classes/Character.php';
session_start();
if (isset($_POST['submit'])) {
    $fam = new Family( htmlspecialchars($_POST['familyname']));
    $_SESSION['BDMPlaner'] = serialize($fam);
    header("Location: ../../family");
    exit();

} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../../dashboard");
    exit();
}

