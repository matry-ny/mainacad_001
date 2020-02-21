<?php

namespace controllers;

use components\AbstractController;
use components\App;
use models\FileManager;
use models\User;

/**
 * Class IndexController
 * @package controllers
 */
class IndexController extends AbstractController
{
    public function actionIndex() : string
    {
        (new FileManager())->getDirectories(App::$user);

        return $this->render('index', [
            'name' => 'Dmytro Kotenko',
            'age' => '30',
            'rout' => 123213,
            'template' => 22222222
        ]);
    }
}
