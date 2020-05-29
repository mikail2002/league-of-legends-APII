<?php
class SummonerHelper
{
    private static $name = '';


    public static function ReplaceTitle($name)
    {


        $replaceChars = array(' ');
        self::$name = str_replace($replaceChars , '_', $name);
        return self::$name;
    }
}
?>