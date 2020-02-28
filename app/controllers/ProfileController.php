<?php

namespace controllers;

use components\App;
use components\web\AbstractSecuredController;

/**
 * Class ProfileController
 * @package controllers
 */
class ProfileController extends AbstractSecuredController
{
    public function actionSignOut()
    {
        App::getInstance()->getUser()->signOut();

        $this->redirect('/');
    }
}
