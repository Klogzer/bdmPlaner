<?php

include 'characterhandler.php';
include res."/config/config.php";

class familyhandler
{

    static function getFamilyByUserID($userid): family


    {
        $mysqli = db();
        $stmt = $mysqli -> prepare("SELECT * FROM family WHERE user_id = ?");
        $stmt->bind_param("i", $userid);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_assoc($result);
        $famid = $row['id'];
        $characters = characterhandler::getCharsByFamID($famid);

        return new family($famid, $row['name'], $characters);
    }

    // restriction only one family per user
    static function createFamiliy($userid, $famname): void
    {
        $famname = mysqli_real_escape_string(db(), $famname);
        $sql = "INSERT INTO family (name,user_id) VALUES ('$famname','$userid');";
        $result = mysqli_query(db(), $sql);
    }



}

