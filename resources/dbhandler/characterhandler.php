<?php
include 'character.php';

class characterhandler
{
    static function getCharsByFamID($famid): array
    {
        $mysqli = db();
        $stmt = $mysqli -> prepare("SELECT * FROM 'character' WHERE family_id = ?");
        $stmt->bind_param("i", $famid);
        $stmt->execute();
        $result = $stmt->get_result();
        $characters = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($characters, new character($row['id'], $row['name'], $row['class'], $row['lvl']));
        }
        // return an array of characters
        return $characters;
    }
}