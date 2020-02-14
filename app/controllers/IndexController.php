<?php

namespace controllers;

use components\AbstractController;

/**
 * Class IndexController
 * @package controllers
 */
class IndexController extends AbstractController
{
    public function actionIndex()
    {
        echo 'I am alive!!! (' . __METHOD__ . ')';
    }
}
