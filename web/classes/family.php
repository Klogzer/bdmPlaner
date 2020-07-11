<?php

include '../includes/mysqlDB.php';
class family
{
    private $id;
    private $name;
    private $character = [];

    function __construct($id,$name,$character) {
        $this->name = $name;
        $this->character=$character;
    }

    public function addchar($char){
        array_push($this->character,$char);
    }

}