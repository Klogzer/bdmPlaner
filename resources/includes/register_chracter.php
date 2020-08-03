


<?php
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/CharacterClass.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/family.php';
include $_SERVER['DOCUMENT_ROOT'].'/BDMPlaner/resources/classes/character.php';
if (isset($_POST['submit'])) {

    // mopck data
    /**
    $fam = new family( "Kloggzer");
    $baba = new Character(1, "Baba", ClassType::RANGER, 60);
    $ali = new Character(2, "Ali", ClassType::DEATHKNIGHT, 60);
    $chris = new Character(3, "Chris", ClassType::STRIKER, 58);
    $fam->addCharacters([$ali, $baba, $chris]);
         **/
    $fam = new Family( htmlspecialchars($_POST['familyname']));
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

