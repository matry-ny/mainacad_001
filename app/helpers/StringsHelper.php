<?php

namespace helpers;

/**
 * Class StringsHelper
 * @package helpers
 */
class StringsHelper
{
    /**
     * @param string $string
     * @return string
     */
    public static function camelize(string $string) : string
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }

    /**
     * @param string $string
     * @param string|null $symbols
     * @return string
     */
    public static function trim(string $string, ?string $symbols = null) : string
    {
        return trim($string, " \t\n\r\0\x0B{$symbols}");
    }
}