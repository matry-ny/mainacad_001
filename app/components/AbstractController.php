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
     * @param array $variables
     * @return string
     */
    protected function render(string $template, array $variables = [], string $layout = 'main') : string
    {
        $template = sprintf(
            '%s/%s.php',
            App::$request->getControllerName(),
            StringsHelper::trim($template, '/')
        );

        return App::$view
            ->setLayout($layout)
            ->setTemplate($template)
            ->setVariables($variables)
            ->render();
    }
}
