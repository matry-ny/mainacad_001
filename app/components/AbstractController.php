<?php

namespace components;

use helpers\StringsHelper;

/**
 * Class AbstractController
 * @package components
 */
abstract class AbstractController
{
    /**
     * @param string $template
     * @return string
     */
    protected function render(string $template) : string
    {
        $template = sprintf(
            '%s/%s.php',
            App::$request->getControllerName(),
            StringsHelper::trim($template, '/')
        );

        return App::$view->render($template);
    }
}
