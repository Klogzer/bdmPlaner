<?php
include_once 'resources/classes/CharacterClass.php';
include_once 'resources/classes/Family.php';
include_once 'resources/classes/Character.php';
if (!isset($_SESSION['BDMPlaner'])) {
    include "web/forms/newFamily.html";
} else {
    $fam = unserialize($_SESSION['BDMPlaner']);
}


?>


<?php
/* @var $character character */
if (isset($fam)) {
?>
<div class="fin">
    <P>Familie:<?php echo $fam->name; ?></P>
</div>
<div class="fbox" id="familyBox">
    <?php
    foreach ($fam->characters as $character) {
        ?>

        <div class="inneBox" id="nameofChar">
            <form action="resources/includes/delete_character.php" method="post">
                <input type="hidden" id="charName" name="charName" value="<?php echo $character->getName(); ?>">
                <button type="submit" name="submit">Löschen</button>
            </form>
            <form action="editCharacter" method="post">
                <input type="hidden" id="charName" name="charName" value="<?php echo $character->getName(); ?>">
                <button type="submit" name="submit">Bearbeiten</button>
            </form>
            <div class="classicon"><img src="<?php echo CharacterClass::getIconPath($character->getClass()) ?>">
            </div>
            <p><?php echo $character->getName() . " " . $character->getLvl(); ?><br>
                AK : 2000<br>
                VK : 3000
            </p>
            <div style="align-items: center">
                <table>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Mainhand.png"></td>
                        <td><?php echo $character->getWeapon() ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getOffhand() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Helmet.png"></td>
                        <td><?php echo $character->getHelmet() ?></td>
                        <td class="gearindicator"><img src="web/img/Armor.png"></td>
                        <td><?php echo $character->getArmor() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Gloves.png"></td>
                        <td><?php echo $character->getGloves() ?></td>
                        <td class="gearindicator"><img src="web/img/Boots.png"></td>
                        <td><?php echo $character->getBoots() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getRing() ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getNecklace() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getWaist() ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getEarring() ?></td>
                    </tr>
                    <tr>

                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getWristlet() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getRelic()[0] ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getRelic()[1] ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getAlchemistone() ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $fam->getPogEmblem() ?></td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getWeaponskin() ?></td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td><?php echo $character->getCostume() ?></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
    <div class="inneBox" id="nameofChar">
        <?php include_once "web/forms/newCharacter.php" ?>
    </div>


    <?php
    }
    ?>
</div>
