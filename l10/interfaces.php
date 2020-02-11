<?php

interface PostInterface
{
    public function post(string $message) : void;
}

interface StatusInterface
{
    public function getStatus() : int;
}

abstract class AbstractProtocol
{
    protected string $protocol = 'HTTPS';

    abstract public function getProtocol() : string;

    public function setProtocol(string $protocol) : void
    {
        $this->protocol = strtoupper($protocol);
    }
}

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

class Viber implements PostInterface
{
    public function post(string $message) : void
    {
        echo "Message send to Viber: {$message}";
    }
}

class SMS implements PostInterface
{
    public function post(string $message) : void
    {
        echo "SMS send with message: {$message}";
    }
}

class Sender
{
    public function send(string $message, PostInterface $channel) : void
    {
        $channel->post($message);
    }
}

//$channel = new SMS();
$channel = new Telegram();

$sender = new Sender();
$sender->send('Hell!!!', $channel);