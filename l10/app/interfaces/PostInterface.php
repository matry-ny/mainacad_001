<?php

namespace app\interfaces;

/**
 * Interface PostInterface
 * @package app\interfaces
 */
interface PostInterface
{
    /**
     * @param string $message
     */
    public function post(string $message) : void;
}