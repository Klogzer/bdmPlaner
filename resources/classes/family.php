<?php

class family
{
    private $id;
    private $name;
    private $characters = [];
    private $pogEmblem;

    /**
     * family constructor.
     * @param $id
     * @param $name
     * @param array $characters
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;

    }

    public function addCharacters($chars)
    {
        foreach ($chars as $char) {
            $this -> addCharacter($char);
        }
    }

    public function addCharacter(character $char)
    {
        array_push($this->characters, $char);
    }

    public function __toString()
    {
        $s = "";
        foreach ($this->characters as $character) {
            $s = sprintf("%s%s", $s, $character->name);
        }
        return sprintf('ID :%s, NAME: %s,%s', $this->id, $this->name, $s);
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