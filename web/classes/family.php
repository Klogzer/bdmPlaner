<?php

include '../includes/mysqlDB.php';
class family
{
    public $name;
    public $character;

    public function dbGetFamily(){
        $sql = "SELECT * FROM family WHERE user_id = '$_SESSION[session_id]'";
        return this;
    }
}