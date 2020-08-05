<?php
 include_once 'JsonHandler.php';

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
        return $this->name . $this->weapon;
    }


    // getters

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return is_null($this->weapon) ? "None" : jsonHandler::getWeaponNameByID($this->weapon);
    }

    /**
     * @return mixed
     */
    public function getOffhand()
    {
        return is_null($this->offhand) ? "none" : jsonHandler::getOffhandNameByID($this->offhand);
    }

    /**
     * @return mixed
     */
    public function getHelmet()
    {
        return is_null($this->helmet) ? "none" : jsonHandler::getHelmetNameByID($this->helmet);
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return is_null($this->armor) ? "none" : jsonHandler::getArmorNameByID($this->armor);
    }

    /**
     * @return mixed
     */
    public function getGloves()
    {
        return is_null($this->gloves) ? "none" :jsonHandler::getGlovesNameByID($this->gloves);
    }

    /**
     * @return mixed
     */
    public function getBoots()
    {
        return is_null($this->boots) ? "none" : jsonHandler::getBootsNameByID($this->boots);
    }

    /**
     * @return mixed
     */
    public function getRing()
    {
        return is_null($this->ring) ? "none" : jsonHandler::getRingNameByID($this->ring);
    }

    /**
     * @return mixed
     */
    public function getNecklace()
    {
        return is_null($this->necklace) ? "none" : jsonHandler::getNecklaceNameByID($this->necklace);
    }

    /**
     * @return mixed
     */
    public function getEarring()
    {
        return is_null($this->earring) ? "none " : jsonHandler::getEarringNameByID($this->earring);
    }

    /**
     * @return mixed
     */
    public function getWaist()
    {
        return is_null($this->waist) ? "none" : jsonHandler::getBeltNameByID($this->waist);
    }

    /**
     * @return mixed
     */
    public function getWristlet()
    {
        return is_null($this->wristlet) ? "none" : jsonHandler::getWristletNameByID($this->wristlet);
    }

    /**
     * @return mixed
     */
    public function getAlchemistone()
    {
        return is_null($this->alchemistone) ? "none" : $this->alchemistone;
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
        return is_null($this->weaponskin) ? "none" : $this->weaponskin;
    }

    /**
     * @return mixed
     */
    public function getCostume()
    {
        return is_null($this->costume) ? "None" : $this->costume;
    }
    public function getName(){
        return $this->name;
    }

    /**
     * @param mixed $lvl
     */
    public function setLvl($lvl): void
    {
        $this->lvl = $lvl;
    }

    /**
     * @param mixed $weapon
     */
    public function setWeapon($weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * @param mixed $offhand
     */
    public function setOffhand($offhand): void
    {
        $this->offhand = $offhand;
    }

    /**
     * @param mixed $helmet
     */
    public function setHelmet($helmet): void
    {
        $this->helmet = $helmet;
    }

    /**
     * @param mixed $armor
     */
    public function setArmor($armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @param mixed $gloves
     */
    public function setGloves($gloves): void
    {
        $this->gloves = $gloves;
    }

    /**
     * @param mixed $boots
     */
    public function setBoots($boots): void
    {
        $this->boots = $boots;
    }

    /**
     * @param mixed $ring
     */
    public function setRing($ring): void
    {
        $this->ring = $ring;
    }

    /**
     * @param mixed $necklace
     */
    public function setNecklace($necklace): void
    {
        $this->necklace = $necklace;
    }

    /**
     * @param mixed $earring
     */
    public function setEarring($earring): void
    {
        $this->earring = $earring;
    }

    /**
     * @param mixed $waist
     */
    public function setWaist($waist): void
    {
        $this->waist = $waist;
    }

    /**
     * @param mixed $wristlet
     */
    public function setWristlet($wristlet): void
    {
        $this->wristlet = $wristlet;
    }

    /**
     * @param mixed $alchemistone
     */
    public function setAlchemistone($alchemistone): void
    {
        $this->alchemistone = $alchemistone;
    }

    /**
     * @param string[] $relic
     */
    public function setRelic(array $relic): void
    {
        $this->relic = $relic;
    }

    /**
     * @param mixed $weaponskin
     */
    public function setWeaponskin($weaponskin): void
    {
        $this->weaponskin = $weaponskin;
    }

    /**
     * @param mixed $costume
     */
    public function setCostume($costume): void
    {
        $this->costume = $costume;
    }




}