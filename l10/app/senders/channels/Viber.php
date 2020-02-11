<?php

namespace app\senders\channels;

use app\interfaces\PostInterface;

/**
 * Class Viber
 * @package app\senders\channels
 */
class Viber implements PostInterface
{
    /**
     * @param string $message
     */
    public function post(string $message) : void
    {
        echo "Message send to Viber: {$message}";
    }
}
