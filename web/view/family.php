<?php
echo "this ist Family";
if (isset($_SESSION['user_id'])) {
    echo "willkommen";


    $arr = ["c1", "c2"];
}
include  'resources/classes/CharacterClass.php';
include 'resources/classes/family.php';
include 'resources/classes/character.php';
$fam = new family(1, "Kloggzer");
$baba = new Character(1, "Baba", ClassType::RANGER, 60);
$ali = new Character(1, "Ali", ClassType::DEATHKNIGHT, 60);
$chris = new Character(3, "Chris", ClassType::STRIKER, 58);
$fam->addCharacters([$ali,$baba,$chris]);


?>
<div class="fbox" id="familyBox">
    <?php
    /* @var $character character */
    foreach ($fam->getCharacters() as $character) {
        ?>

        <div class="inneBox" id="nameofChar">
            <div class="classicon"><img src="<?php echo CharacterClass::getIconPath($character->class)?>"></div>
            <p><?php echo $character->getName() . " " . $character->lvl; ?><br>
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
</div>
