<?php

namespace app\senders;

use app\interfaces\PostInterface;

/**
 * Class Sender
 * @package app\senders
 */
class Sender
{
    /**
     * @param string $message
     * @param PostInterface $channel
     */
    public function send(string $message, PostInterface $channel) : void
    {
        $channel->post($message);
    }
}
