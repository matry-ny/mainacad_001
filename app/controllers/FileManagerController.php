<?php

namespace controllers;

use components\AbstractController;

/**
 * Class FileManagerController
 * @package controllers
 */
class FileManagerController extends AbstractController
{
    public function actionIndex()
    {
        echo 'I am alive!!! (' . __METHOD__ . ')';
    }
}
