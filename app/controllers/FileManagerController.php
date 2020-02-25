<?php

namespace controllers;

use components\AbstractController;
use components\App;
use models\FileManager;

/**
 * Class FileManagerController
 * @package controllers
 */
class FileManagerController extends AbstractController
{
    public function actionCreateDir()
    {
        (new FileManager(App::$user))->createDirectory($_POST['dirName']);

        header('Location: /', true, 301);
        exit;
    }

    public function actionUploadFile()
    {
        (new FileManager(App::$user))->uploadFile(
            $_FILES['attachement']['tmp_name'],
            $_FILES['attachement']['name']
        );

        header('Location: /', true, 301);
        exit;
    }
}
