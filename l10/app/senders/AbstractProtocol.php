<?php

namespace app\senders;

/**
 * Class AbstractProtocol
 * @package app\senders
 */
abstract class AbstractProtocol
{
    /**
     * @var string
     */
    protected string $protocol = 'HTTPS';

    /**
     * @return string
     */
    abstract public function getProtocol() : string;

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol) : void
    {
        $this->protocol = strtoupper($protocol);
    }
}
