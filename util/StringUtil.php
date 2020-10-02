<?php
namespace app\util;

class StringUtil
{
    public static function removeMathCharacters($string){
        $string = str_replace(' ', '', $string);
        $string = str_replace(',', '', $string);
        $string = str_replace('.', '', $string);
        $string = str_replace('+', '', $string);
        $string = str_replace('-', '', $string);
        $string = str_replace('*', '', $string);
        $string = str_replace('/', '', $string);
        $string = str_replace('%', '', $string);
        $string = str_replace('^', '', $string);
        return $string;
    }


}