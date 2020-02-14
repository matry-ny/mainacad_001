<?php

declare(strict_types=1);

namespace components;

/**
 * Class Request
 * @package components
 */
class Request
{
    /**
     * @var array
     */
    private array $routParts = [];

    /**
     * Request constructor.
     * @param string $rout
     * @param string $delimiter
     */
    public function __construct(string $rout, string $delimiter = '/')
    {
        $this->routParts = array_filter(explode($delimiter, $rout));
    }

    public function getControllerName() : string
    {
        return  '';
    }

    public function getActionName() : string
    {
        return '';
    }
}
