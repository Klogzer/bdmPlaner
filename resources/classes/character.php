<?php


class character
{
    public $id;
    public $name;
    public $class;
    public $lvl;

    /**
     * character constructor.
     * @param $id
     * @param $name
     * @param $class
     * @param $lvl
     */
    public function __construct($id, $name, $class, $lvl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->lvl = $lvl;
    }
    public function __toString()
    {
        return $this->name;
    }


}