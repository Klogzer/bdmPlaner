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

    public function addCharacter(character $char)
    {
        array_push($this->characters, $char);
    }


    // its work but why can i lookup character objects but just looking fo a string
    public function removeCharacter($char)
    {
        $index = array_search($char, $this->characters);
        array_splice($this->characters, $index, 1);
    }

    public function getCharByName($name)
    {
        foreach ($this->characters as $key => $char) {
            if ($char->getName() == $name) {
                return $this->characters[$key];
            }
        }
    }

    public function __toString()
    {
        $s = "";
        foreach ($this->characters as $character) {
            $s = sprintf("%s%s", $s, $character->name);
        }
        return sprintf('NAME: %s,%s',$this->name, $s);
    }

    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @return mixed
     */
    public function getPogEmblem()
    {
        return $this->pogEmblem ?: "None";
    }


}