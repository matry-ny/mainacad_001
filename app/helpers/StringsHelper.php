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
}