<?php


class ClassType
{
    public const WARRIOR = 0;
    public const RANGER = 1;
    public const WITCH = 2;
    public const GIANT = 3;
    public const SORCERESS = 4;
    public const VALKYRIE = 5;
    public const STRIKER = 6;
    public const DEATHKNIGHT = 7;

}


class CharacterClass
{
    /**
     * @return mixed
     */
    public static function getIconPath($type)
    {
        switch ($type) {
            case ClassType::WARRIOR:
                return "web/img/classIcon/warrior.png";
                break;
            case ClassType::RANGER:
                return "web/img/classIcon/ranger.png";
                break;
            default:
                return "web/img/classIcon/default.png";
                break;

        }
    }
}