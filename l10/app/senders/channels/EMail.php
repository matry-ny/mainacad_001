<?php

namespace app\senders\channels;

use app\interfaces\PostInterface;
use app\interfaces\StatusInterface;
use app\senders\AbstractProtocol;

/**
 * Class EMail
 * @package app\senders\channels
 */
class EMail extends AbstractProtocol implements PostInterface, StatusInterface
{
    public function post(string $message) : void
    {
        echo "Email send with message: {$message}";
    }

    public function getStatus(): int
    {
        return 200;
    }

    public function getProtocol(): string
    {
        $this->setProtocol('SMTP');
        return $this->protocol;
    }
}
