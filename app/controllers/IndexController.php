<?php

namespace controllers;

use components\App;
use components\web\AbstractSecuredController;
use models\FileManager;

/**
 * Class IndexController
 * @package controllers
 */
class IndexController extends AbstractSecuredController
{
    public function actionIndex() : string
    {
        return $this->render('index', [
            'directories' => (new FileManager(App::getInstance()->getUser()))->getDirectories()
        ]);
    }
}
