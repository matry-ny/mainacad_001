<?php

namespace controllers;

use components\AbstractController;
use components\App;

/**
 * Class SiteController
 * @package controllers
 */
class SiteController extends AbstractController
{
    public function actionLogin() : string
    {
        if (App::getInstance()->request->getIsPost()
            && App::getInstance()->getUser()->login($_POST['login'], $_POST['password'])
        ) {
            $this->redirect('/');
        }

        return $this->render('login', [], 'guest');
    }
}
