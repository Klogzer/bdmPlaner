<?php


class characterhandler
{
    private $connection;

    function __construct(mysqli $connection) {
        $this->connection = $connection;
    }
    function getCharsByFamID($famid){
        $characters = [];
        $sql = "SELECT * FROM `character` WHERE family_id = '$famid'";
        $result = $this -> connection -> query($sql);

        return $characters;
    }
}