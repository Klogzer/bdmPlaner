<?php

class family
{
    public $id;
    public $name;
    public $characters = [];
    public $pogEmblem;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * family constructor.
     * @param $id
     * @param $name
     * @param array $characters
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addCharacters($chars)
    {
        foreach ($chars as $char) {
            $this->addCharacter($char);
        }
    }
    // return true if successfull
    // return false if unsuccessfull
    public function addCharacter(character $char)
    {
        if (!$this->getCharByName($char->getName())) {
            array_push($this->characters, $char);
            return true;
        }
        return false;
    }


    // return true if a character was deleted
    // returns false if noch character was deleted
    public function removeCharacter($char)
    {
        foreach ($this->characters as $key => $compareChar) {

            if ($char->getName() == $compareChar->getName()) {

                array_splice($this->characters, $key, 1);
               return true;
            }
        }
        return false;

    }


    // returns object when found or false if not found
    public function getCharByName($name)
    {
        foreach ($this->characters as $key => $char) {
            if ($char->getName() == $name) {
                return $this->characters[$key];
            }
        }
        return false;
    }

    public function __toString()
    {
        $s = "";
        foreach ($this->characters as $character) {
            $s = sprintf("%s%s", $s, $character->name);
        }
        return sprintf('NAME: %s,%s', $this->name, $s);
    }

    public function getCharacters(): array
    {
        return $this->characters;
    }
    public function getCharacterNames(): array
    {
        $arr=[];
        foreach ($this->characters as $character){
            array_push($arr,$character->getName());
        }
        return $arr;
    }
    /**
     * @return mixed
     */
    public function getPogEmblem()
    {
        return $this->pogEmblem ?: "None";
    }


}