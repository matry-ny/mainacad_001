<?php

namespace controllers;

use components\AbstractController;
use components\App;

/**
 * Class IndexController
 * @package controllers
 */
class IndexController extends AbstractController
{
    public function actionIndex() : string
    {
        return $this->render('index');
    }
}