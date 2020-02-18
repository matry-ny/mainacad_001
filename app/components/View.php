<?php

declare(strict_types=1);

namespace components;

use helpers\StringsHelper;

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
     * View constructor.
     * @param string $viewsRout
     */
    public function __construct(string $viewsRout)
    {
        $this->setViewsRout($viewsRout);
    }

    public function render(string $template) : string
    {
        $template = StringsHelper::trim($template, '/');
        ob_start();
        require_once "{$this->viewsRout}/{$template}";
        $content = ob_get_clean();

        ob_start();
        require_once "{$this->viewsRout}/layouts/main.php";
        return ob_get_clean();
    }

    /**
     * @param string $rout
     * @return string
     */
    private function getViewSrc(string $rout) : string
    {
        ob_start();
        require_once $rout;
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
}
