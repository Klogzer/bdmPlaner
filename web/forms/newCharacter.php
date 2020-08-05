<?php include_once 'resources/classes/JsonHandler.php';?>
<form action="/BDMplaner/resources/includes/register_character.php" method="POST">
    <input type="text" name="characterName" placeholder="cName">
    <select name="characterClass">
        <?php
        foreach (JsonHandler::getAllClasses() as $key => $itemName) {
            echo sprintf('<option value="%s">%s</option>', $key, $itemName);
        }
        ?>
    </select>
    <input type="text" name="characterLevel" placeholder="cLevel">
    <button type="submit" name="submit">Erstellen</button>
</form>
