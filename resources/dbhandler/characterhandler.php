<?php
include 'character.php';

class characterhandler
{
    static function getCharsByFamID($famid): array
    {
        $characters = [];
        $sql = "SELECT * FROM `character` WHERE family_id = '$famid'";
        $result = db()->query($sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($characters, new character($row['id'], $row['name'], $row['class'], $row['lvl']));
        }
        // return an array of characters
        return $characters;
    }
}