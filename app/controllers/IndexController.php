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
        return $this->render('index', [
            'directories' => (new FileManager(App::$user))->getDirectories()
        ]);
    }
}
