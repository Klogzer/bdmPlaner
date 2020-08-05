<?php
function getOptions($arr)
{
    $s = "";
    foreach ($arr as $key => $itemName) {
        $s .= sprintf('<option value="%s">%s</option>', $key, $itemName);
    }
    return $s;
}
include_once 'resources/classes/CharacterClass.php';
include_once 'resources/classes/Family.php';
include_once 'resources/classes/Character.php';
include_once 'resources/classes/JsonHandler.php';
if (isset($_POST['submit'])) {
    // unserialize family
    /* @var $fam family */
    $fam = unserialize($_SESSION['BDMPlaner']);
    $character = $fam->getCharByName(htmlspecialchars($_POST['charName']));
}
?>
<div class="fbox" id="familyBox">
    <div class="inneBox" id="nameofChar">
        <form action="resources/includes/delete_character.php" method="post">
            <input type="hidden"  name="charName" value="<?php echo $character->getName(); ?>">
            <button type="submit" name="submit">Löschen</button>
        </form>
        <div class="classicon"><img src="<?php echo CharacterClass::getIconPath($character->getClass()) ?>">
        </div>
        <p><?php echo $character->getName() . " " . $character->getLvl(); ?><br>
            AK : 2000<br>
            VK : 3000
        </p>
        <form action="resources/includes/update_character.php" method="post">
            <input type="hidden"  name="charName" value="<?php echo $character->getName(); ?>">
            <div style="align-items: center">
                <table>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Mainhand.png"></td>
                        <td>
                            <select name="weapon">
                                <?php echo getOptions(jsonHandler::getAllWeaponNames()); ?>
                            </select>
                        </td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="offhand">
                                <?php
                                echo getOptions(jsonHandler::getAllOffhandNames());
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Helmet.png"></td>
                        <td>
                            <select name="helmet">
                                <?php
                                echo getOptions(jsonHandler::getAllHelmetNames());
                                ?>
                            </select>
                        </td>
                        <td class="gearindicator"><img src="web/img/Armor.png"></td>
                        <td>
                            <select name="armor">
                                <?php
                                echo getOptions(jsonHandler::getAllArmorNames());
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Gloves.png"></td>
                        <td>
                            <select name="gloves">
                                <?php
                                echo getOptions(jsonHandler::getAllGlovesNames());
                                ?>
                            </select>
                        </td>
                        <td class="gearindicator"><img src="web/img/Boots.png"></td>
                        <td>
                            <select name="boots">
                                <?php
                                echo getOptions(jsonHandler::getAllBootsNames());
                                ?><
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="ring" >
                                <?php
                                echo getOptions(jsonHandler::getAllRings());
                                ?>
                            </select>
                        </td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="necklace">
                                <?php
                                echo getOptions(jsonHandler::getAllNecklaces());
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="belt">
                                <?php
                                echo getOptions(jsonHandler::getAllBelts());
                                ?>
                            </select>
                        </td>
                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="earring">
                                <?php
                                echo getOptions(jsonHandler::getAllEarrings());
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>

                        <td class="gearindicator"><img src="web/img/Offhand.png"></td>
                        <td>
                            <select name="wristlet">
                                <?php
                                echo getOptions(jsonHandler::getAllWristlets());
                                ?>
                            </select>
                        </td>
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
                <button type="submit" name="submit">Bestätigen</button>
            </div>
        </form>
    </div>
</div>