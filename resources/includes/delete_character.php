<?php
include '../classes/CharacterClass.php';
include '../classes/Family.php';
include '../classes/Character.php';
if (isset($_POST['submit'])) {
    // unserialize family and delete char, serialize it again
    /* @var $fam family */
    session_start();
    $fam = unserialize($_SESSION['BDMPlaner']);
    $char = $fam->getCharByName(htmlspecialchars($_POST['charName']));
    $fam -> removeCharacter($char);
    $_SESSION['BDMPlaner'] = serialize($fam);
    }
header("Location: ../../family");
exit();

