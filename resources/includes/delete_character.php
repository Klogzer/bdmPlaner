<?php
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/CharacterClass.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/family.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/character.php';
if (isset($_POST['submit'])) {
    // unserialize family and delete char, serialize it again
    /* @var $fam family */
    $fam = unserialize($_COOKIE['BDMPlaner']);
    $char = $fam->getCharByName(htmlspecialchars($_POST['charName']));
    $fam -> removeCharacter($char);
    $str = serialize($fam);
    setcookie('BDMPlaner', $str, time() + (86400 * 30), '/');
    }
header("Location: ../../family");

