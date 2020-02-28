<?php

namespace components\web;

use components\AbstractController;
use components\App;

/**
 * Class AbstractSecuredController
 * @package components\web
 */
class AbstractSecuredController extends AbstractController
{
    /**
     * AbstractSecuredController constructor.
     */
    public function __construct()
    {
        if (App::getInstance()->getUser()->isGuest) {
            $this->redirect('/site/login');
        }
    }
}
