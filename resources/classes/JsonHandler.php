<?php


abstract class jsonHandler
{
    public static function getAllWeaponNames()
    {
        $string = file_get_contents("resources/Weapons.json");
        return jsonHandler::decodeToArray($string);
    }


    public static function getAllOffhandNames()
    {
        $string = file_get_contents("resources/Offhand.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllHelmetNames()
    {
        $string = file_get_contents("resources/Helmet.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllGlovesNames()
    {
        $string = file_get_contents("resources/Gloves.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllArmorNames()
    {
        $string = file_get_contents("resources/Armor.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllBootsNames()
    {
        $string = file_get_contents("resources/Boots.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllRings()
    {
        $string = file_get_contents("resources/Ring.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllNecklaces()
    {
        $string = file_get_contents("resources/Necklace.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllBelts()
    {
        $string = file_get_contents("resources/Belt.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllWristlets()
    {
        $string = file_get_contents("resources/Wristlet.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllEarrings()
    {
        $string = file_get_contents("resources/Earring.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getAllClasses()
    {
        $string = file_get_contents("resources/Classes.json");
        return jsonHandler::decodeToArray($string);
    }

    public static function getWeaponNameByID($id)
    {
        $jsonString = file_get_contents("resources/Weapons.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getOffhandNameByID($id)
    {
        $jsonString = file_get_contents("resources/Offhand.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getArmorNameByID($id)
    {
        $jsonString = file_get_contents("resources/Armor.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getHelmetNameByID($id)
    {
        $jsonString = file_get_contents("resources/Helmet.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getGlovesNameByID($id)
    {
        $jsonString = file_get_contents("resources/Gloves.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getBootsNameByID($id)
    {
        $jsonString = file_get_contents("resources/Boots.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getRingNameByID($id)
    {
        $jsonString = file_get_contents("resources/Ring.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getNecklaceNameByID($id)
    {
        $jsonString = file_get_contents("resources/Necklace.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }


    public static function getBeltNameByID($id)
    {
        $jsonString = file_get_contents("resources/Belt.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    public static function getEarringNameByID($id)
    {
        $jsonString = file_get_contents("resources/Earring.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }
    public static function getWristletNameByID($id)
    {
        $jsonString = file_get_contents("resources/Wristlet.json");
        $json = json_decode($jsonString);
        return $json->array[$id]->name;
    }

    static function decodeToArray($string)
    {
        $arr = [];
        $s = json_decode($string);
        foreach ($s->array as $item) {
            array_push($arr, $item->name);
        }
        return $arr;
    }


}