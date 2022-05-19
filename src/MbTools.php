<?php
declare(strict_types=1);

namespace Pshilyaev\Mbtools;

class MbTools
{

    public static function trim(string $string) : string
    {
        return preg_replace('/^[\s]*(?U)(.*)[\s]*$/u', '\\1',$string);
    }

    public static function ltrim(string $string) : string
    {
        return preg_replace('/^[\s]*(?U)(.*)$/u', '\\1',$string);
    }

    public static function rtrim(string  $string) : string
    {
        return preg_replace('/^(?U)(.*)[\s]*$/u', '\\1',$string);
    }


}