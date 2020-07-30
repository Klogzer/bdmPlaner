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
                return "web/img/classIcon/WARRIOR.png";
                break;
            case ClassType::RANGER:
                return "web/img/classIcon/RANGER.png";
                break;
            case ClassType::WITCH:
                return "web/img/classIcon/WITCH.png";
                break;
            case ClassType::GIANT:
                return "web/img/classIcon/BERSERKER.png";
                break;
            case ClassType::SORCERESS:
                return "web/img/classIcon/SORCERESS.png";
                break;
            case ClassType::VALKYRIE:
                return "web/img/classIcon/VALKYRIE.png";
                break;
            case ClassType::STRIKER:
                return "web/img/classIcon/STRIKER.png";
                break;
            case ClassType::DEATHKNIGHT:
                return "web/img/classIcon/Dark-night.png";
                break;
            default:
                return "web/img/classIcon/WIZARD.png";
                break;

        }
    }
}