<?php

namespace controllers;

use components\AbstractController;

/**
 * Class ProfileController
 * @package controllers
 */
class ProfileController extends AbstractController
{
    public function actionView()
    {
        echo 'I am alive!!! (' . __METHOD__ . ')';
    }
}
