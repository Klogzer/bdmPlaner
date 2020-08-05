


<?php
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/CharacterClass.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/Family.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/Character.php';
session_start();
if (isset($_POST['submit'])) {



    header("Location: ../../family");
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

