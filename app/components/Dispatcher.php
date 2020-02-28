<?php

namespace components;

use helpers\StringsHelper;

/**
 * Class Dispatcher
 * @package components
 */
class Dispatcher
{
    /**
     * @return mixed
     */
    public function dispatch()
    {
        $controller = $this->prepareController();
        return $this->runAction($controller);
    }

    /**
     * @return AbstractController
     */
    private function prepareController() : AbstractController
    {
        $controller = App::getInstance()->request->getControllerName();
        $controller = StringsHelper::camelize($controller);
        $controller = "\\controllers\\{$controller}Controller";

        if (!class_exists($controller)) {
            exit("Controller {$controller} can not bew loaded");
        }

        $controllerObject = new $controller();
        if (!$controllerObject instanceof AbstractController) {
            exit("Controller {$controller} is invalid");
        }

        return $controllerObject;
    }

    /**
     * @param AbstractController $controller
     * @return mixed
     */
    private function runAction(AbstractController $controller)
    {
        $action = App::getInstance()->request->getActionName();
        $action = StringsHelper::camelize($action);
        $action = "action{$action}";

        if (!method_exists($controller, $action)) {
            exit("Method {$action} can not be loaded");
        }

        return $controller->{$action}();
    }
}