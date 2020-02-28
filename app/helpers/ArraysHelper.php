<?php


namespace helpers;

/**
 * Class ArraysHelper
 * @package helpers
 */
class ArraysHelper
{
    /**
     * @param array $filesPost
     * @return array
     */
    public static function reArrayFiles(array $filesPost) : array
    {
        $result = [];

        $filesQuantity = count($filesPost['name']);
        $fileKeys = array_keys($filesPost);

        for ($i = 0; $i < $filesQuantity; $i++) {
            foreach ($fileKeys as $key) {
                $result[$i][$key] = $filesPost[$key][$i];
            }
        }

        return $result;
    }
}