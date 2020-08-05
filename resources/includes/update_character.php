<?php
session_start();
include '../classes/CharacterClass.php';
include '../classes/Family.php';
include '../classes/Character.php';
if (isset($_POST['submit'])) {
    // unserialize family and delete char, serialize it again
    /* @var $fam family */
    /* @var $char character */
    $fam = unserialize($_SESSION['BDMPlaner']);
    $char = $fam->getCharByName(htmlspecialchars($_POST['charName']));
    //Waffe
    $item = htmlspecialchars($_POST['weapon']);
    $char -> setWeapon($item);
    //nebenhand
    $item = htmlspecialchars($_POST['offhand']);
    $char -> setOffhand($item);
    //helmet
    $item = htmlspecialchars($_POST['helmet']);
    $char -> setHelmet($item);
    //armor
    $item = htmlspecialchars($_POST['helmet']);
    $char -> setHelmet($item);
    //helmet
    $item = htmlspecialchars($_POST['armor']);
    $char -> setArmor($item);
    //gloves
    $item = htmlspecialchars($_POST['gloves']);
    $char -> setGloves($item);
    //boots
    $item = htmlspecialchars($_POST['boots']);
    $char -> setBoots($item);
    //ring
    $item = htmlspecialchars($_POST['ring']);
    $char -> setRing($item);
    //necklace
    $item = htmlspecialchars($_POST['necklace']);
    $char -> setNecklace($item);
    //belt
    $item = htmlspecialchars($_POST['belt']);
    $char -> setWaist($item);
    //earring
    $item = htmlspecialchars($_POST['earring']);
    $char -> setEarring($item);
    //belt
    $item = htmlspecialchars($_POST['wristlet']);
    $char -> setWristlet($item);

        // update localy
    $str = serialize($fam);
    $_SESSION['BDMPlaner'] = serialize($fam);
    }
header("Location: ../../family");
exit();

