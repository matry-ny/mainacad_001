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
     * @var string Name of required controller parsed from rout
     */
    private string $controllerName;

    /**
     * @var string Name of required action parsed from rout
     */
    private string $actionName;

    /**
     * Request constructor.
     * @param string $rout
     * @param string $delimiter
     */
    public function __construct(string $rout, string $delimiter = '/')
    {
        $this->routParts = array_filter(explode($delimiter, $rout));
        $this->controllerName = array_shift($this->routParts) ?? 'index';
        $this->actionName = array_shift($this->routParts) ?? 'index';
    }

    /**
     * @return string
     */
    public function getControllerName() : string
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName() : string
    {
        return $this->actionName;
    }
}
