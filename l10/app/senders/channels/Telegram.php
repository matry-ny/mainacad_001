<?php

namespace app\senders\channels;

use app\interfaces\PostInterface;
use app\interfaces\StatusInterface;
use app\senders\AbstractProtocol;

/**
 * Class Telegram
 * @package app\senders\channels
 */
class Telegram extends AbstractProtocol implements PostInterface, StatusInterface
{
    public function post(string $message) : void
    {
        echo "Message send to Telegram: {$message}";
    }

    public function getStatus(): int
    {
        return 500;
    }

    public function getProtocol(): string
    {
        $this->setProtocol('TCP');
        return $this->protocol;
    }
}
