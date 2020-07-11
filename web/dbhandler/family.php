<?php

class family
{
    private $id;
    private $name;
    private $characters = [];

    /**
     * family constructor.
     * @param $id
     * @param $name
     * @param array $characters
     */
    public function __construct($id, $name, array $characters)
    {
        $this->id = $id;
        $this->name = $name;
        $this->characters = $characters;
    }

    public function __toString(){
        $s="";
        foreach ($this->characters as $character){
            $s = sprintf("%s%s", $s, $character->name);
        }
        return sprintf('ID :%s, NAME: %s,%s',$this ->id,$this->name,$s);
    }

}