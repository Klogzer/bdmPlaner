<?php


class Character
{
    private $id;
    private $name;
    private $class;
    private $lvl;
    private $weapon;
    private $offhand;
    private $helmet;
    private $armor;
    private $gloves;
    private $boots;
    private $ring;
    private $necklace;
    private $earring;
    private $waist;
    private $wristlet;
    private $alchemistone;
    private $relic = array("","");
    private $weaponskin;
    private $costume;

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
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return mixed
     */
    public function getLvl()
    {
        return $this->lvl;
    }




    /**
     * character constructor.
     * @param $id
     * @param $name
     * @param $class
     * @param $lvl
     */
    public function __construct($name, $class, $lvl)
    {
        $this->name = $name;
        $this->class = $class;
        $this->lvl = $lvl;
    }
    public function __toString()
    {
        return $this->name;
    }


    // getters

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon ?: "None";
    }

    /**
     * @return mixed
     */
    public function getOffhand()
    {
        return $this->offhand ?: "None";
    }

    /**
     * @return mixed
     */
    public function getHelmet()
    {
        return $this->helmet ?: "None";
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor ?: "None";
    }

    /**
     * @return mixed
     */
    public function getGloves()
    {
        return $this->gloves ?: "None";
    }

    /**
     * @return mixed
     */
    public function getBoots()
    {
        return $this->boots ?: "None";
    }

    /**
     * @return mixed
     */
    public function getRing()
    {
        return $this->ring ?: "None";
    }

    /**
     * @return mixed
     */
    public function getNecklace()
    {
        return $this->necklace ?: "None";
    }

    /**
     * @return mixed
     */
    public function getEarring()
    {
        return $this->earring ?: "None";
    }

    /**
     * @return mixed
     */
    public function getWaist()
    {
        return $this->waist ?: "None";
    }

    /**
     * @return mixed
     */
    public function getWristlet()
    {
        return $this->wristlet ?: "None";
    }

    /**
     * @return mixed
     */
    public function getAlchemistone()
    {
        return $this->alchemistone ?: "None";
    }

    /**
     * @return int[]
     */
    public function getRelic(): array
    {
        $this->relic[0] = $this->relic[0] ?: "None";
        $this->relic[1] = $this->relic[1] ?: "None";
        return $this->relic;
    }

    /**
     * @return mixed
     */
    public function getWeaponskin()
    {
        return $this->weaponskin ?: "None";
    }

    /**
     * @return mixed
     */
    public function getCostume()
    {
        return $this->costume ?: "None";
    }
    public function getName(){
        return $this->name;
    }




}