<?php
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/CharacterClass.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/Family.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/Character.php';
session_start();
if (isset($_POST['submit'])) {
    // unserialize family and delete char, serialize it again
    /* @var $fam family */
    $fam = unserialize($_SESSION['BDMPlaner']);
    $char = $fam->getCharByName(htmlspecialchars($_POST['charName']));
    $fam -> removeCharacter($char);
    $_SESSION['BDMPlaner'] = serialize($fam);
    }
header("Location: ../../family");

