<?php

namespace app\senders\channels;

use app\interfaces\PostInterface;

/**
 * Class SMS
 */
class SMS implements PostInterface
{
    /**
     * @param string $message
     */
    public function post(string $message) : void
    {
        echo "SMS send with message: {$message}";
    }
}
