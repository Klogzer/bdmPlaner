<?php
include '../classes/CharacterClass.php';
include '../classes/Family.php';
include '../classes/Character.php';
session_start();
if (isset($_POST['submit'])) {
    // create char
    $name = htmlspecialchars($_POST['characterName']);
    $class = htmlspecialchars($_POST['characterClass']);
    $level = htmlspecialchars($_POST['characterLevel']);
    $char = new Character($name, $class, $level);
    // unserialize family and add char, serialize it again
    /* @var $fam family */
    $fam = unserialize($_SESSION['BDMPlaner']);
    $fam->addCharacter($char);
    $str = serialize($fam);
    $_SESSION['BDMPlaner'] = serialize($fam);
    header("Location: ../../family");
    exit();

} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../../dashboard");
    exit();
}

