<?php

namespace components;

/**
 * Class App
 * @package components
 */
class App
{
    /**
     * @var Request
     */
    private Request $request;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $this->request = new Request($_SERVER['REQUEST_URI']);
    }

    public function run()
    {
        $controller = $this->prepareController();
        $this->runAction($controller);
    }

    /**
     * @return AbstractController
     */
    private function prepareController() : AbstractController
    {
        $controller = $this->request->getControllerName();
        $controller = $this->camelize($controller);
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
        $action = $this->request->getActionName();
        $action = $this->camelize($action);
        $action = "action{$action}";

        if (!method_exists($controller, $action)) {
            exit("Method {$action} can not be loaded");
        }

        return $controller->{$action}();
    }

    private function camelize(string $string)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }
}
