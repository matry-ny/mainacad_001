<?php

declare(strict_types=1);

namespace components;

use helpers\StringsHelper;
use RuntimeException;

/**
 * Class View
 * @package components
 */
class View
{
    /**
     * @var string
     */
    private string $viewsRout;

    /**
     * @var string
     */
    private string $template;

    /**
     * @var string
     */
    private string $layout;

    /**
     * @var array
     */
    private array $variables = [];

    /**
     * View constructor.
     * @param string $viewsRout
     */
    public function __construct(string $viewsRout)
    {
        $this->setViewsRout($viewsRout);
    }

    /**
     * @param string $template
     * @param array $variables
     * @param string $layout
     * @return string
     */
    public function render() : string
    {
        extract($this->variables, EXTR_OVERWRITE);

        ob_start();
        require_once $this->template;
        $content = ob_get_clean();

        ob_start();
        require_once $this->layout;
        return ob_get_clean();
    }

    /**
     * @param string $rout
     */
    private function setViewsRout(string $rout) : void
    {
        $rout = StringsHelper::trim($rout, '/');
        if (PHP_OS_FAMILY !== 'Windows') {
            $rout = "/{$rout}";
        }

        $this->viewsRout = $rout;
    }

    /**
     * @param string $template
     * @return View
     */
    public function setTemplate(string $template): View
    {
        $template = StringsHelper::trim($template, '/');
        $this->template = "{$this->viewsRout}/{$template}";
        if (!file_exists($this->template)) {
            throw new RuntimeException("Template \"{$template}\" can not be loaded");
        }

        return $this;
    }

    /**
     * @param string $layout
     * @return View
     */
    public function setLayout(string $layout): View
    {
        $layout = StringsHelper::trim($layout, '/');
        $this->layout = "{$this->viewsRout}/layouts/{$layout}.php";
        if (!file_exists($this->layout)) {
            throw new RuntimeException("Layout \"{$layout}\" can not be loaded");
        }

        return $this;
    }

    /**
     * @param array $variables
     * @return View
     */
    public function setVariables(array $variables): View
    {
        if (array_key_exists('this', $variables)) {
            throw new RuntimeException('Variable $this is reserved');
        }

        $this->variables = $variables;
        return $this;
    }
}
