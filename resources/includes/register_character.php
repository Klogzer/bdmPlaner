


<?php
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/CharacterClass.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/family.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/character.php';
if (isset($_POST['submit'])) {
    // create char
    $name = htmlspecialchars($_POST['characterName']);
    $class = htmlspecialchars($_POST['characterClass']);
    $level = htmlspecialchars($_POST['characterLevel']);
    $char = new Character($name,$class,$level);
    // unserialize family and add char, serialize it again
    /* @var $fam family */
    $fam = unserialize($_COOKIE['BDMPlaner']);
    $fam -> addCharacter($char);
    $str = serialize($fam);
    setcookie('BDMPlaner', $str, time() + (86400 * 30), '/');

    header("Location: ../../family");
    exit();

} else {
// Falls jemand die URL erraten hat, wird er durch
// das else zum Registrierungsformular geschickt
    header("Location: ../../dashboard");
    exit();
}

