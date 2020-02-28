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
            App::getInstance()->request->getControllerName(),
            StringsHelper::trim($template, '/')
        );

        return App::getInstance()->view
            ->setLayout($layout)
            ->setTemplate($template)
            ->setVariables($variables)
            ->render();
    }

    /**
     * @param string $url
     * @param int $status
     */
    protected function redirect(string $url, int $status = 301) : void
    {
        header("Location: {$url}", true, $status);
        exit;
    }
}
