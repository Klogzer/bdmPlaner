<?php
include "../classes/family.php";

class familyhandler
{


    private $connection;

    function __construct(mysqli $connection) {
        $this->connection = $connection;
    }

    function getFamilyByUserID($userid){
        $sql = "SELECT * FROM family WHERE user_id = '$userid'";
        $result = $this -> connection -> query($sql);
        $row = mysqli_fetch_assoc($result);
        $famid = $row['id'];
        return new family($famid,$row['name'],$characterhandler->getCharsByFamID($famid));
    }



}